<?php
session_start();

$name = $_POST['username'];

$host='localhost:3306';
$uname='root';
$pwd='wearesaints';
$db='golf';

$con = mysqli_connect($host,$uname,$pwd) or die("connection failed");

mysqli_select_db($con,$db) or die ("db selection failed");

$result = mysqli_query($con,"SELECT password FROM users WHERE username = '" .$name. "'");

while($row = mysqli_fetch_assoc($result)){
	$tmp[] = $row;
	if(isset($row['password'])){
		$checkpass = $row['password'];
	}
	else{
		$checkpass = NULL;
	}
}

if(isset($checkpass)){
	if($_POST["password"]==$checkpass){
		$check='true';
	}
	else{
		$check='false';
	}
}
else{
	$check='false';
}

mysqli_close($con);

if($check=='true'){
	$_SESSION['user'] = $name;
	
	header("Location: http://www.tf-photography.at/golf/menu.php", true, 301);
	exit();
}
else{
	header("Location: http://www.tf-photography.at/golf/index.php", true, 301);
	exit();
}
?>