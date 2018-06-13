<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Golf App</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="style/login.css">
<body>

<div id="login">
	<p class="header">Login</p>

	<div id="login_form">
		<form action="login_processor.php" method="post" class="w3-container">
			<div class="form_line">
				<label>Username:</label>
				<input class="text-input" type="text" name="username">
			</div>

			<div class="form_line">
				<label>Password:</label>
				<input class="text-input" type="password" name="password">
			</div>
			
			<input class="login-button" type="submit" value="Login">
		</form>
	</div>
</div>

<div id="app">
	<a href="app/android/GolfScoringApp_v0.1.apk"><img src="img/android.png" width="150px" height="50px"></a>
</div>

</body>
</html>