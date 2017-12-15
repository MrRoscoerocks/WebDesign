<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
include("connect-db.php");

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $last ='', $id = '', $em = '', $date = '')
{ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>
<?php
	if ($id != '') { echo "Edit Record";
	} else { echo "New Record";
	}
 ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1><?php
	if ($id != '') { echo "Edit Record";
	} else { echo "New Record";
	}
 ?></h1>

<form action="" method="post">
<div>
<?php if ($id != '') { ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>

<strong>First Name: *</strong> <input type="text" name="firstname"
value="<?php echo $first; ?>"/><br/>
<strong>Last Name: *</strong> <input type="text" name="lastname"
value="<?php echo $last; ?>"/><br/>
<strong>Email: </strong> <input type="text" name="email"
value="<?php echo $em; ?>"/><br/>
<strong>Registration Date: </strong> <input type="text" name="reg_date"
value="<?php echo $date; ?>" readonly/>
<p>* required</p>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>

<?php }

	/*

	EDIT RECORD

	*/
	// if the 'id' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['id']))
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// make sure the 'id' in the URL is valid
	if (is_numeric($_POST['id']))
	{
	// get variables from the URL/form
	$id = $_POST['id'];
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);
	$reg_date = htmlentities($_POST['reg_date'], ENT_QUOTES);
	
	
	
	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '')
	{
	// alert
	renderForm($firstname, $lastname, $id, $email, $reg_date);
	}
	else
	{
	// if everything is fine, update the record in the database
	if ($stmt = $mysqli->prepare("UPDATE MyGuests SET firstname = ?, lastname = ?, email = ?, reg_date = ? WHERE id=?"))
	{
	$stmt->bind_param("ssssi", $firstname, $lastname, $email, $reg_date, $id);
	$stmt->execute();
	$stmt->close();
	}

	// redirect the user once the form is updated
	header("Location: view.php");
	}
	}
	}
	// if the form hasn't been submitted yet, get the info from the database and show the form
	else
	{
	// make sure the 'id' value is valid
	if (is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
	// get 'id' from URL
	$id = $_GET['id'];

	// get the recod from the database
	if($stmt = $mysqli->prepare("SELECT * FROM MyGuests WHERE id=?"))
	{
	$stmt->bind_param("i", $id);
	$stmt->execute();

	$stmt->bind_result($id, $firstname, $lastname, $email, $reg_date);
	$stmt->fetch();

	// show the form
	renderForm($firstname, $lastname, $id, $email, $reg_date);

	$stmt->close();
	}
	}
	// if the 'id' value is not valid, redirect the user back to the view.php page
	else
	{
	header("Location: view.php");
	}
	}
	}

	/*

	NEW RECORD

	*/
	// if the 'id' variable is not set in the URL, we must be creating a new record
	else
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// get the form data
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);

	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '')
	{
	renderForm($firstname, $lastname);
	}
	else
	{
	// insert the new record into the database
	if ($stmt = $mysqli->prepare("INSERT MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"))
	{
	$stmt->bind_param("sss", $firstname, $lastname, $email);
	$stmt->execute();
	$stmt->close();
	}

	// redirec the user
	header("Location: view.php");
	}

	}
	// if the form hasn't been submitted yet, show the form
	else
	{
	renderForm();
	}
	}

	// close the mysqli connection
	$mysqli->close();
?>