<?php
//session_start();

//if(!isset($_SESSION['user'])) {
    //die('Bitte zuerst <a href="index.php">einloggen</a>');
//}
?>
<!DOCTYPE html>
<html>
<title>Golf App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style/sidebar.css">
<link rel="stylesheet" href="style/play_round.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-dark-grey" style="width:300px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <p id="user" class="w3-light-grey">&nbspUser: <?php //echo($_SESSION['user']); ?></p>
  <a href="menu.php" class="w3-bar-item w3-button">Main Page</a>
  <button class="w3-bar-item w3-button w3-white" onclick="play_round()">Play Round</button>
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
    <h1>Play Round</h1>
  </div>
</div>

<div class="w3-container">
	
	<form action="#">
		<table id="round_selectors">
			<tr id="course_select_row">
				<td><label for="sel_course" id="course_label">Select Course</label></td>
				<td>
					<select name="sel_course" id="course_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select>
				</td>
			</tr>
			<tr id="hole_select_row">
				<td><label for="sel_hole" id="hole_label">Select Holes</label></td>
				<td>
					<select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select>
				</td>
			</tr>
		</table>
		<table id="scorecard">
			<tr id="hole_out">
				<td><p>HOLE</p></td>
				<td><p>1</p></td>
				<td><p>2</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>5</p></td>
				<td><p>6</p></td>
				<td><p>7</p></td>
				<td><p>8</p></td>
				<td><p>9</p></td>
			</tr>
			<tr id="par_out">
				<td><p>PAR</p></td>
				<td><p>5</p></td>
				<td><p>4</p></td>
				<td><p>5</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>4</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>4</p></td>
			</tr>
			<tr id="score_out">
				<td class="w3-orange"><p>SCORE</p></td>
				<td><input type="number" id="score_1"></td>
				<td><input type="number" id="score_2"></td>
				<td><input type="number" id="score_3"></td>
				<td><input type="number" id="score_4"></td>
				<td><input type="number" id="score_5"></td>
				<td><input type="number" id="score_6"></td>
				<td><input type="number" id="score_7"></td>
				<td><input type="number" id="score_8"></td>
				<td><input type="number" id="score_9"></td>
			</tr>
			<tr id="putts_out">
				<td class="w3-orange"><p>PUTTS</p></td>
				<td><input type="number" id="putts_1"></td>
				<td><input type="number" id="putts_2"></td>
				<td><input type="number" id="putts_3"></td>
				<td><input type="number" id="putts_4"></td>
				<td><input type="number" id="putts_5"></td>
				<td><input type="number" id="putts_6"></td>
				<td><input type="number" id="putts_7"></td>
				<td><input type="number" id="putts_8"></td>
				<td><input type="number" id="putts_9"></td>
			</tr>
			<tr id="fir_out">
				<td class="w3-orange"><p>FIR</p></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
			</tr>
			
			
			<tr id="empty_row">
				<td colspan="12">&nbsp</td>
			</tr>
			
			
			
			<tr id="hole_out">
				<td><p>HOLE</p></td>
				<td><p>1</p></td>
				<td><p>2</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>5</p></td>
				<td><p>6</p></td>
				<td><p>7</p></td>
				<td><p>8</p></td>
				<td><p>9</p></td>
			</tr>
			<tr id="par_out">
				<td><p>PAR</p></td>
				<td><p>5</p></td>
				<td><p>4</p></td>
				<td><p>5</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>4</p></td>
				<td><p>3</p></td>
				<td><p>4</p></td>
				<td><p>4</p></td>
			</tr>
			<tr id="score_out">
				<td class="w3-orange"><p>SCORE</p></td>
				<td><input type="number" id="score_1"></td>
				<td><input type="number" id="score_2"></td>
				<td><input type="number" id="score_3"></td>
				<td><input type="number" id="score_4"></td>
				<td><input type="number" id="score_5"></td>
				<td><input type="number" id="score_6"></td>
				<td><input type="number" id="score_7"></td>
				<td><input type="number" id="score_8"></td>
				<td><input type="number" id="score_9"></td>
			</tr>
			<tr id="putts_out">
				<td class="w3-orange"><p>PUTTS</p></td>
				<td><input type="number" id="putts_1"></td>
				<td><input type="number" id="putts_2"></td>
				<td><input type="number" id="putts_3"></td>
				<td><input type="number" id="putts_4"></td>
				<td><input type="number" id="putts_5"></td>
				<td><input type="number" id="putts_6"></td>
				<td><input type="number" id="putts_7"></td>
				<td><input type="number" id="putts_8"></td>
				<td><input type="number" id="putts_9"></td>
			</tr>
			<tr id="fir_out">
				<td class="w3-orange"><p>FIR</p></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
				<td><select name="sel_hole" id="hole_selector">
						<option value="test">test</option>
						<option value="test2">test2</option>
					</select></td>
			</tr>
			<tr id="empty_row">
				<td colspan="10">&nbsp</td>
			</tr>
			<tr id="empty_row">
				<td colspan="8">&nbsp</td>
				<td colspan="2" rowspan="2" id="submit_button">Submit</td>
			</tr>
			<tr id="empty_row">
				<td colspan="8">&nbsp</td>
			</tr>
		</table>
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

<script type="text/javascript">
function play_round(){
	
if (screen.width <= 699) {
	document.location = "mobile/play_round.php";
}

}

</script>
     
</body>
</html>