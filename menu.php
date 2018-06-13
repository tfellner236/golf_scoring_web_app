<?php
session_start();

if(!isset($_SESSION['user'])) {
    die('Bitte zuerst <a href="index.php">einloggen</a>');
}
?>
<!DOCTYPE html>
<html>
<title>Golf App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style/sidebar.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-dark-grey" style="width:300px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <p id="user" class="w3-light-grey">&nbspUser: <?php echo($_SESSION['user']); ?></p>
  <a href="menu.php" class="w3-bar-item w3-button w3-white">Main Page</a>
  <a href="#" class="w3-bar-item w3-button w3-green">Play Round</a>
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
<p>Content</p>
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