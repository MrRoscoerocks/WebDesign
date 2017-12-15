<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Test PHP Ambrose</title>

		<!-- JQuery stack - libraries first - cascades -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/testPHP_Ambrose.js"></script>

		<!-- CSS stack -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/w3.css" type="text/css" />
		<link rel="stylesheet" href="css/testPHP2.css" type="text/css" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

		<style>
			body {
				background-image: url("images/wood_big_A.jpg");
				background-repeat: none;
			}
		</style>
	</head>
	<body>
		<!-- Sidebar -->
		<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
			<button onclick="w3_close()" class="w3-bar-item w3-large">
				&Theta; Close &Theta;
			</button>
			<!-- Ops Links -->
			<a href="#" class="w3-bar-item w3-button">Operational</a>

			<a href="http://www.westada.net/b1/b1elit" class="w3-bar-item w3-button">Eli T</a>
			<a href="http://www.westada.net/b1/b1dallind" class="w3-bar-item w3-button">Dallin D</a>
			<a href="http://www.westada.net/b1/b1hannahw" class="w3-bar-item w3-button">Hannah W</a>
			<a href="http://www.westada.net/b1/b1loganw" class="w3-bar-item w3-button">Logan W</a>
			<a href="http://www.westada.net/b1/b1abdulazizk" class="w3-bar-item w3-button">Abdulaziz K</a>
			<a href="http://www.westada.net/b1/b1chasek" class="w3-bar-item w3-button">Chase K</a>
			<a href="http://www.westada.net/b1/b1kylet" class="w3-bar-item w3-button">Kyle T</a>
			<a href="http://www.westada.net/b1/b1donovanw" class="w3-bar-item w3-button">Donovan W</a>
			<a href="http://www.westada.net/b1/b1lukec" class="w3-bar-item w3-button">Luke C</a>
			<a href="http://www.westada.net/b1/b1tylerc" class="w3-bar-item w3-button">Tyler C</a>
			<a href="http://www.westada.net/b1/b1peterh" class="w3-bar-item w3-button">Peter H</a>
			<a href="http://www.westada.net/b1/b1justinf" class="w3-bar-item w3-button">Justin F</a>
			<a href="http://www.westada.net/b1/b1ethana" class="w3-bar-item w3-button">Ethan A</a>
			<a href="http://www.westada.net/b1/b1johnh" class="w3-bar-item w3-button">John H</a>
			<a href="http://www.westada.net/b1/b1jjn" class="w3-bar-item w3-button">Jonathan N</a>
			<a href="http://www.westada.net/b1/b1connerf" class="w3-bar-item w3-button">Conner F</a>
			<a href="http://www.westada.net/b1/b1carterh" class="w3-bar-item w3-button">Carter H</a>
			<a href="http://www.westada.net/b1/b1brendans" class="w3-bar-item w3-button">Brendan S</a>
			<a href="http://www.westada.net/b1/b1alejandroe" class="w3-bar-item w3-button">Alejandro E</a>
			<a href="http://www.westada.net/b1/b1danic" class="w3-bar-item w3-button">Dani C</a>
			<a href="http://www.westada.net/b1/b1isaacw" class="w3-bar-item w3-button">Isaac W</a>

		</div>
		<div align="center">
			<!-- Page Content -->
			<div class="w3-teal">
				<div align="left">
					<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">
						☰
					</button>
				</div>

				<h1>Yeah man!</h1>
				<h2>Roscoe Ambrose 02 Nov 2017</h2>
			</div>
			<hr>
			<div id="dogDiv">
				<img id="dogPic" src="images/dogs_small.jpg" />
			</div>

			<hr>
			<h3>Start PHP! Look out below!!</h3>
			<br>
			<div align="center">
				<form action="php/DBaddRecords.php" method="post">
					First Name:
					<input type="text" name="firstname">
					<br>
					Last Name:
					<input type="text" name="lastname">
					<br>
					E-mail: &#8291; &#8291; &#8291; &#8291; &#8291; &#8291; &#8291;
					<input type="text" name="email">
					<br>
					<input type="submit">
				</form>
			</div>

			<br>
			<hr>
			<div id="sqlDiv">
				<h3>Show SQL Select results</h3>
				<?php include 'php/DBconnect_4parm.php'; ?>
				<?php include 'php/DBechoShow.php';	?>
				<?php include 'php/DBclose.php'; ?>
			</div>
			<hr>
			<div id="sqlTable">
				<h3> Show SQL Select results using a formatted table</h3>
				<?php include 'php/DBconnect_4parm.php'; ?>
				<?php include 'php/DBtableShow.php'; ?>
				<?php include 'php/DBclose.php'; ?>
			</div>
			<hr>
			<h3>End PHP! Look up!!</h3>
			<br>
			<script>
				function w3_open() {
					document.getElementById("mySidebar").style.display = "block";
				}

				function w3_close() {
					document.getElementById("mySidebar").style.display = "none";
				}
			</script>
		</div>
	</body>

</html>

