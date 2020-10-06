<?php
include("header2.php");
 include("connection.php");
?>
<style type="text/css">
	*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		.container-main{
			background: #34495e;
			height: 91vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.boxing{
			background: #fff;
			padding: 1.5em 3em;
			box-shadow: 0 3px 7px rgba(0,0,0,.3);
			border: 2px solid black;
			border-radius: 10px;
		}
		.boxing h1{
			text-decoration: underline red;
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

		.register{
			float: right;
		}
</style>
	<div class="container-main">
		<div class="boxing">
			<form method="POST">
				<h1>Sign up</h1>
				Name<br><input type="text" name="username"><br><br>
				Email<br><input type="email" name="userid"><br><br>
				Password<br><input type="password" name="userkey"><br><br>
				<input class="btn" type="submit" name="submit"><br><br>
			</form>
			<a href="login.php" class="register">Login</a><br>
<!--php file-->
<?php
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		//$_SESSION['user']=$username;
		$usermail=$_POST['userid'];
		$userpass=$_POST['userkey'];
		if($username!="" && $usermail!="" && $userpass!="")
		{	//check if user/email already exist;
			$query="SELECT * from signup where email='$usermail'"; 
			$data=mysqli_query($connect,$query);
			$count=mysqli_num_rows($data);
			if($count>0)
			{
				echo "<font color='red'>&#x2718; </font>Email already exist! <a href='login.php'>Login</a>";
			}
			else
			{ //inseting data to signup
				$insert="INSERT INTO signup (name,password,email) VALUES('$username','$userpass','$usermail')"; 
				$run=mysqli_query($connect,$insert);
				if($run)
				{
					echo "<font color='green'>&#x2714; </font>Successfully Registered
					<a href='login.php'>Login</a>";
				}
				else
				{
					echo "failed";
				}
			}
		}
		else{
			echo "<font color='red'>&#x2718; </font>All fields are required!";
		}
	}
?>
		</div>
	</div>