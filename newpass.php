<!-- 3/3 -->
<?php
	session_start();
	$useremail=$_SESSION['usermail'];
	/*echo $umail;*/
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
			<h1>New Password</h1>
			New Password<br>
			<input type="text" name="anykey" placeholder="Enter new password" required="required"><br><br>
			<input class="btn" type="submit" name="confirm" value="Confirm">
		</form>
<?php
if(isset($_POST['confirm']))
	{
		$newkey=$_POST['anykey'];
		if($newkey!="")
		{
			$query="update employer set upass='$newkey' where uemail='$useremail'";
			$data=mysqli_query($connect,$query);
			if($data)
			{
				echo "<font color='green'>&#x2714;</font> successfully updated";
				session_unset();
				header('location:login.php');
			}
			else
			{
				echo "<font color='red'>&#x2718; </font>failed to update";
				session_unset();
				header('location:login.php');
			}
		}
		else
		{
			echo "<font color='red'>&#x2718; </font>password can't be empty";
		}
	}
	/*else
	{
		echo "not clicked";
	}*/
?>
		</div>
	</div>