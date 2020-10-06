<?php
 include("header2.php");
?>
<style type="text/css">
	*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		.container_main{
			background: #34495e;
			height: 91vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.boxing{
			background: #fff;
			padding: 1.5em 2em;
			box-shadow: 0 3px 7px rgba(0,0,0,.3);
			border: 1px solid green;
			border-radius: 10px;
		}
		.boxing h1{
			text-decoration: underline red;
			padding-bottom: .5em;
		}
		.btn{
			border: 2px solid black;
			border-radius: 5px;
			box-shadow: 0 3px 7px rgba(0,0,0,.3);
			background: #f2f2f2;
		}
		.btn:hover{
			background: #000;
			color: #fff;
		}
		.register{
			float: right;
		}
</style>
<?php
	//session_start();
	include("connection.php");	 
?>
	<div class="container_main">
		<div class="boxing">
			<form method="POST">
				<h1>Login</h1>
				Email<br><input type="text" name="email" required><br><br>
				Password<br><input type="password" name="password" required><br><br>
				<input class="btn" type="submit" name="login">
			</form>
			<a href="signup.php" float="right" class="register">Signup</a><br>
<!--php file-->
<?php
	if(isset($_POST['login']))
	{
		$useremail=$_POST['email'];
		$userpass=$_POST['password'];
		if($useremail!="" && $userpass!="")
		{
			$query="select * from signup where email='$useremail' && password='$userpass'";
			$data=mysqli_query($connect,$query);
			$count=mysqli_num_rows($data);
			if($count>0)
			{
				$_SESSION['user_email']=$useremail;
				/*echo $_SESSION['username'];*/
				header('location:index2.php');
				/*echo "<font color='green'>&#x2714; </font>Successfully Logged in";*/
			}
			else
			{
				echo "<font color='red'>&#x2718; </font>Invalid	 user or password<br>
				<a href='forgotpass.php'>Forgot Password?</a>";
			}
		}
		/*else{
			echo "<font color='red'>&#x2718; </font>All fields are required!";
		}*/
	}
?>
		</div>
	</div>