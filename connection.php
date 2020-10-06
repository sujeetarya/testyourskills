<?php
	$connect=mysqli_connect("localhost","root","","mcq_db");
	if($connect)
	{
		//echo "Server connection established with mcq_db <br>";
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Server connection Error")';
		echo "</script>";
	}
?>