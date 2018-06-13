<?php
session_start();

if(!isset($_SESSION['user'])) {
    die('Bitte zuerst <a href="index.php">einloggen</a>');
}
?>
<!DOCTYPE html>
<html>
<title>Golf App</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style/sidebar.css">
<link rel="stylesheet" href="style/stats.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="scripts/mdb.js"></script>
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-dark-grey" style="width:300px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <p id="user" class="w3-light-grey">&nbspUser: <?php echo($_SESSION['user']); ?></p>
  <a href="menu.php" class="w3-bar-item w3-button">Main Page</a>
  <a href="#" class="w3-bar-item w3-button w3-green">Play Round</a>
  <a href="stats.php" class="w3-bar-item w3-button w3-white">Statistics</a>
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
			<h1>Statistics</h1>
		</div>
	</div>

	<div class="w3-bar w3-dark-grey">
		<button class="w3-bar-item w3-button tablink w3-orange tab-item" onclick="openCity(event,'Overview')" style="width: 20%">Overview</button>
		<button class="w3-bar-item w3-button tablink tab-item" onclick="openCity(event,'Fairway')" style="width: 20%">Fairway</button>
		<button class="w3-bar-item w3-button tablink tab-item" onclick="openCity(event,'Green Hits')" style="width: 20%">Green Hits</button>
		<button class="w3-bar-item w3-button tablink tab-item" onclick="openCity(event,'Putts')" style="width: 20%">Putts</button>
		<button class="w3-bar-item w3-button tablink tab-item" onclick="openCity(event,'Course Stats')" style="width: 20%">Course Stats</button>
	</div>
  
	<div id="Overview" class="w3-container city">
	
		<div class="row">
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Rounds Played</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Rounds Played</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Rounds Played</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Rounds Played</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4 col-sm-offset-4"">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Rounds Played</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>

	<div id="Fairway" class="w3-container city" style="display:none">
		<div class="jumbotron">
			<canvas id="FairwayChart"></canvas>
			<script>
				var ctx = document.getElementById("FairwayChart");
				var fairwayData = {
					labels: [1, 2, 3, 4, 5, 6, 7],
					datasets: [{
						lineTension: 0,
						fill: false,
						borderColor: '#ff9800',
						backgroundColor: '#ff9800',
						borderWidth: 3,
						pointBorderColor: '#ff9800',
						pointBackgroundColor: '#ff9800',
						pointRadius: 4,
						data: [24, 59, 75, 20, 20, 55, 40],
					}]
				};
				var chartOptions = {
					legend: {
						display: false,
					},
					scales: {
						xAxes: [{
							gridLines: {
								display: false,
								color: "white",
								zeroLineColor:"white"
							},
							scaleLabel: {
								display: false,
							},
							ticks: {
								fontColor: 'white'
							},
						}],
						yAxes: [{
							gridLines: {
								color: "white",
								borderDash: [2, 5],
							},
							scaleLabel: {
								display: false,
							},
							ticks: {
								min: 0,
								max: 100,
								stepSize: 10,
								fontColor: 'white'
							},
						}]
					 }
				};
				var myChart = new Chart(ctx, {
					type: 'line',
					data: fairwayData,
					options: chartOptions
				});
			</script>
		</div>
		
		<div class="row">
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Left</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Hit</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="stat-table">
					<tr>
						<td class="stat-label w3-light-grey">Right</td>
					</tr>
					<tr>
						<td class="stat-data w3-dark-grey">5</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div id="Green Hits" class="w3-container city" style="display:none">
		<p>Green Content</p>
	</div>
	
	<div id="Putts" class="w3-container city" style="display:none">
		<p>Putts Content</p>
	</div>
	
	<div id="Course Stats" class="w3-container city" style="display:none">
		<p>Course Stats</p>
	</div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-orange", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-orange";
}
</script>
     
</body>
</html>