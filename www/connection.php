<?php
	$connect = mysqli_connect("localhost","root","","project");
	if ($connect) {
		echo "Connection successful!";
	}
	else{
		echo "Connection failed!";
	}
?>