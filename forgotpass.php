<!-- 1/3 -->
<?php
	session_start();
	include("connection.php");
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
			<form method="POST">
				<h1>Change Password</h1>
				Email<br><input type="email" name="email" placeholder="enter your email" required="required">
				<br><br>
				<input class="btn" type="submit" name="submit" value="Send OTP" ><br><br>
			</form>
		
<?php
if(isset($_POST['submit']))
{
	$emailid=$_POST['email'];
	$_SESSION['usermail']=$emailid;
	/*echo $emailid;*/
	if($emailid!="")
	{
		$query="select * from signup where email='$emailid'";
		$data=mysqli_query($connect,$query);
		$count=mysqli_num_rows($data);
		if($count==1)
		{
			$subject="OPT";
			$random=rand(100000,999999);
			$_SESSION['rand']=$random;
			/*if(mail($emailid, $subject, $random))*/
			if(true)
			{
				header('location:otp.php');
			}
			else
			{
				echo "otp not sent";
			}
		}
		else
		{
			echo "<font color='red'>&#x2718; </font>email not found";
		}
	}
	else
	{
		echo "<font color='red'>&#x2718; </font>All fields are required!";
	}
}
/*else
{
	echo "<font color='red'>&#x2718; </font>not clicked";
}*/
?>
		</div>
	</div>