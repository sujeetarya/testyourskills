<!-- 2/3 -->
<?php
	session_start();
	if(isset($_SESSION['rand'])){
		$x=$_SESSION['rand'];
		echo "<script>alert('OTP = $x')</script>";
		//unset($_SESSION['rand']);
	}
	else {
		//echo "<script>alert('Session is NOT set')</script>";
		header('location:signup.php');		
	}
	//echo "<script>alert('OTP = $x')</script>"; 
	//echo $x;
?>
<style type="text/css">
	*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		.container{
			background: #f2f2f2;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.box{
			background: #fff;
			padding: 1.5em 2em;
			box-shadow: 0 3px 7px rgba(0,0,0,.3);
		}
		.box h1{
			text-decoration: underline red;
			padding-bottom: .5em;
		}
		input{
			padding: .5em;
		}
		.btn{
			border: 2px solid black;
			border-radius: 5px;
			box-shadow: 0 3px 7px rgba(0,0,0,.3);
			background: #f2f2f2;
			padding: .5em 1em;
		}
		.btn:hover{
			background: #000;
			color: #fff;
		}
</style>
<div class="container">
	<div class="box">
		<h1>Enter OTP</h1>
		<form method="POST" autocomplete="off">
			OTP<br>
			<input type="text" name="otp" placeholder="Enter OPT" required="required"><br><br>
			<input class="btn" type="submit" name="verify" value="Verify"><br><br>
		</form>

<?php
	if(isset($_POST['verify']))
	{
		$pass=$_POST['otp'];
		if($pass!="")
		{
			if($x==$pass)
			{
				echo "<script>alert('OTP = $x')</script>";
				unset($_SESSION['rand']);
				header('location:newpass.php');
			}
			else
			{
				echo "<font color='red'>&#x2718; </font>Wrong OTP";
			}
		}
		else
		{
			echo "<font color='red'>&#x2718; </font>All fields are required";
		}
	}
?>
</div>
</div>