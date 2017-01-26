<?php
	require("connection.php");
	$email = $_POST["inputEmail"];
	$pwd = $_POST["inputPassword"];
	$query = mysqli_query($connect, "select * from users Where username = '".$email."' and password = '".$pwd."'");
	if (mysqli_num_rows($query)) {
		header("Location: http://localhost/mainpage.html");
	}
	else {
		echo "Query failed!";
	}
?>