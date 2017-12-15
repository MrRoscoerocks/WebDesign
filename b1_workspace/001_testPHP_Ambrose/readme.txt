<?php
echo "My first PHP script!";
print("Today is 08 Nov 8:27");
echo "\n\nDoes this look ok?";

// does this work?
#how about this way?
/* the universalway*/
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h5>" . $txt1 . "</h5>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

print "<h5 id='print'>PHP uses print or print() like python 2 vs python3!</h5>";
print "Hello from a print statement without ()!<br>";
print ("hello from a print statement with ()");
print "I'm about to learn PHP fundamentals of server, XAMPP, file management, echo print, vars, concats..!"

			?>
			<hr>
			<?php
			echo "<br>Working example of a fav dev tool called var_dump()<br>";

			$x = 5985;
			var_dump($x);
			echo "<br>";

			$x = 10.365;
			var_dump($x);
			echo "<br>";

			$cars = array("Volvo", "BMW", "Toyota", "Ford", "Chevrolet");
			var_dump($cars);
			echo "<br>";
			?>
			<hr>

			<?php
			$BoiseColor = "red";
			$BoiseText = "In Boise, ID it is: ";
			$Boisedate = new DateTime('now', new DateTimeZone('America/Boise'));

			$DCColor = "red";
			$DCText = "In Wasington, DC it is: ";
			$DCdate = new DateTime('now', new DateTimeZone('America/New_york'));

			$LondonColor = "red";
			$LondonText = "In London, England it is: ";
			$Londondate = new DateTime('now', new DateTimeZone('Europe/London'));

			$TokyoColor = "red";
			$TokyoText = "In Tokyo, Japan it is: ";
			$Tokyodate = new DateTime('now', new DateTimeZone('Asia/Tokyo'));

			$DublinColor = "red";
			$DublinText = "In Dubland, Ireland it is: ";
			$Dublindate = new DateTime('now', new DateTimeZone('Europe/Dublin'));

			echo "<br>Current Date & Time for major cities around the world";
			echo '<div style="Color:' . $BoiseColor . '">' . $BoiseText . '' . $Boisedate -> format('m-d-y h:i:s') . '</div>';
			echo '<div style="Color:' . $DCColor . '">' . $DCText . '' . $DCdate -> format('m-d-y h:i:s') . '</div>';
			echo '<div style="Color:' . $LondonColor . '">' . $LondonText . '' . $Londondate -> format('m-d-y h:i:s') . '</div>';
			echo '<div style="Color:' . $TokyoColor . '">' . $TokyoText . '' . $Tokyodate -> format('m-d-y h:i:s') . '</div>';
			echo '<div style="Color:' . $DublinColor . '">' . $DublinText . '' . $Dublindate -> format('m-d-y h:i:s') . '</div>';
			?>
			<?php
			echo "<br>Calculate Number of Days to Christmas<br>";
			$target = mktime(0, 0, 0, 12, 25, 2017);
			$today = time();
			$difference = ($target - $today);
			$days = (int)($difference / 86400);
			print "Christmas will occur in in " . $days . " days<br>";
			?>
			<?php
			echo "<br>Calculate Number of Days to Thanksgiving<br>";
			$target = mktime(0, 0, 0, 11, 23, 2017);
			$today = time();
			$difference = ($target - $today);
			$days = (int)($difference / 86400);
			print "Thanksgiving will occur in in " . $days . " days<br>";
			?>
			<?php
			echo "<br>Calculate Number of hours to Thanksgiving<br>";
			$target = mktime(0, 0, 0, 11, 23, 2017);
			$today = time();
			$difference = ($target - $today);
			$hours = (int)($difference / 3600);
			print "Thanksgiving will occur in in " . $hours . " hours<br>";
			?>
			<?php
			echo "<br>Calculate Number of seconds to Thanksgiving<br>";
			$target = mktime(0, 0, 0, 11, 23, 2017);
			$today = time();
			$difference = ($target - $today);
			$seconds = (int)($difference / 1);
			print "Thanksgiving will occur in in " . $seconds . " seconds<br>";
			?>
			<?php
			echo "<br>Calculate Number of days till im 21 years old<br>";
			$target = mktime(0, 0, 0, 8, 19, 2021);
			$today = time();
			$difference = ($target - $today);
			$days = (int)($difference / 86400);
			print "My 21st birthday will occur in in " . $days . " days<br>";
			?>
			<?php
			echo "<br>Calculate Number of hours till im 21 years old<br>";
			$target = mktime(0, 0, 0, 8, 19, 2021);
			$today = time();
			$difference = ($target - $today);
			$hours = (int)($difference / 3600);
			print "My 21st birthday will occur in in " . $hours . " hours<br>";
			?>
			<?php
			echo "<br>Calculate Number of seconds till im 21 years old<br>";
			$target = mktime(0, 0, 0, 8, 19, 2021);
			$today = time();
			$difference = ($target - $today);
			$seconds = (int)($difference / 1);
			print "My 21st birthday will occur in in " . $seconds . " seconds<br>";
			?>
			<?php
			echo "<hr>";
			$servername = "localhost";
			$username = "root";
			$password = "toor";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password);

			// Check connection
			if (!$conn) {
				die("Connection Failed: " . mysqli_connect_error());
			}
			echo "Connected Successfully";
			?>
						<?php
			$servername = "localhost";
			$username = "root";
			$password = "toor";

			echo "<br>MySQL connection using Procedural Programming<br>";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully";
						?>