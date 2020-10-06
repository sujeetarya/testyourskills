<?php
	session_start();
	if(isset($_SESSION['rand'])){
		$x=$_SESSION['rand'];
		echo "<script>alert('OTP = $x')</script>";
		//unset($_SESSION['rand']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="submit" name="submit1"><br><br>
		<input type="submit" name="submit2"><br><br>
		<input type="submit" name="submit3"><br><br>
		<input type="submit" name="submit4"><br><br>
		<input type="submit" name="submit5"><br><br>
	</form>
<?php

if(isset($_POST['submit1'])){
	echo "submit1<hr>";
}

if(isset($_POST['submit2'])){
	echo "submit2<hr>";
}

if(isset($_POST['submit3'])){
	echo "submit3<hr>";
}

if(isset($_POST['submit4'])){
	echo "submit4<hr>";
}

if(isset($_POST['submit5'])){
	echo "submit5<hr>";
}

if (isset($_SESSION['rand'])) {
	echo "1232312";
}

?>
</body>
</html>