<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Golf App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style/sidebar.css">
<link rel="stylesheet" href="style/scorecard.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-dark-grey" style="width:300px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <p id="user" class="w3-light-grey">&nbspUser: <?php echo($_SESSION['user']); ?></p>
  <a href="menu.php" class="w3-bar-item w3-button">Main Page</a>
  <a href="#" class="w3-bar-item w3-button w3-white">Play Round</a>
  <a href="stats.php" class="w3-bar-item w3-button">Statistics</a>
  <a href="previous_rounds.php" class="w3-bar-item w3-button">Previous Rounds</a>
  <a href="#" class="w3-bar-item w3-button">Leaderboard</a>
  <a href="#" class="w3-bar-item w3-button">Trophies</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-red">Logout</a>
  <div id="app">
	<a href="app/android/GolfScoringApp_v0.1.apk"><img src="img/android.png" width="250px" height="83px"></a>
  </div>
</div>

<div class="w3-main w3-grey" style="margin-left:300px; height:100vh">
<div class="w3-orange">
  <button class="w3-button w3-orange w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Main Menu</h1>
  </div>
</div>

<div class="w3-container">
</br>
<?php

$course = "GC Berchtesgadener Land";
$holes = "18 Holes";

echo "Course: " . $course . "<br>";
echo "Holes: " . $holes . "<br><br>";

// Local Variables
$p1 = 5;
$p2 = 4;
$p3 = 5;
$p4 = 3;
$p5 = 4;
$p6 = 4;
$p7 = 3;
$p8 = 4;
$p9 = 4;

?>

<form action="" method="post">
<table id="scorecard">
	<tr class="top_row">
		<td>HOLE</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
	</tr>
	<tr class="dark_row">
		<td>PAR</td>
		<td><?php echo $p1 ?></td>
		<td><?php echo $p2 ?></td>
		<td><?php echo $p3 ?></td>
		<td><?php echo $p4 ?></td>
		<td><?php echo $p5 ?></td>
		<td><?php echo $p6 ?></td>
		<td><?php echo $p7 ?></td>
		<td><?php echo $p8 ?></td>
		<td><?php echo $p9 ?></td>
	</tr>
	<tr class="light_row">
		<td>SCORE</td>
		<td><input type="number" name="s1"></td>
		<td><input type="number" name="s2"></td>
		<td><input type="number" name="s3"></td>
		<td><input type="number" name="s4"></td>
		<td><input type="number" name="s5"></td>
		<td><input type="number" name="s6"></td>
		<td><input type="number" name="s7"></td>
		<td><input type="number" name="s8"></td>
		<td><input type="number" name="s9"></td>
	</tr>	
	<tr class="dark_row">
		<td>PUTTS</td>
		<td><input type="number" name="pt1"></td>
		<td><input type="number" name="pt2"></td>
		<td><input type="number" name="pt3"></td>
		<td><input type="number" name="pt4"></td>
		<td><input type="number" name="pt5"></td>
		<td><input type="number" name="pt6"></td>
		<td><input type="number" name="pt7"></td>
		<td><input type="number" name="pt8"></td>
		<td><input type="number" name="pt9"></td>
	</tr>
	<tr class="light_row">
		<td>FAIRWAY</td>
		<td>
			<label>
				<select name="f1">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f2">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f3">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f4">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f5">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f6">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f7">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f8">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f9">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
	</tr>
	<tr class="empty_row">
		<td colspan="10">&nbsp</td>
	</tr>
	<tr class="top_row">
		<td>HOLE</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
		<td>15</td>
		<td>16</td>
		<td>17</td>
		<td>18</td>
	</tr>
	<tr class="dark_row">
		<td>PAR</td>
		<td><?php echo $p1 ?></td>
		<td><?php echo $p2 ?></td>
		<td><?php echo $p3 ?></td>
		<td><?php echo $p4 ?></td>
		<td><?php echo $p5 ?></td>
		<td><?php echo $p6 ?></td>
		<td><?php echo $p7 ?></td>
		<td><?php echo $p8 ?></td>
		<td><?php echo $p9 ?></td>
	</tr>
	<tr class="light_row">
		<td>SCORE</td>
		<td><input type="number" name="s1"></td>
		<td><input type="number" name="s2"></td>
		<td><input type="number" name="s3"></td>
		<td><input type="number" name="s4"></td>
		<td><input type="number" name="s5"></td>
		<td><input type="number" name="s6"></td>
		<td><input type="number" name="s7"></td>
		<td><input type="number" name="s8"></td>
		<td><input type="number" name="s9"></td>
	</tr>	
	<tr class="dark_row">
		<td>PUTTS</td>
		<td><input type="number" name="pt1"></td>
		<td><input type="number" name="pt2"></td>
		<td><input type="number" name="pt3"></td>
		<td><input type="number" name="pt4"></td>
		<td><input type="number" name="pt5"></td>
		<td><input type="number" name="pt6"></td>
		<td><input type="number" name="pt7"></td>
		<td><input type="number" name="pt8"></td>
		<td><input type="number" name="pt9"></td>
	</tr>
	<tr class="light_row">
		<td>FAIRWAY</td>
		<td>
			<label>
				<select name="f1">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f2">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f3">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f4">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f5">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f6">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f7">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f8">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
		<td>
			<label>
				<select name="f9">
					<option>-></option>
					<option>o</option>
					<option><-</option>
				</select>
			</label>
		</td>
	</tr>
</table>
<br>
<input type="submit">
</form>
</div>
   
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>