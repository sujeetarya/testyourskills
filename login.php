<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		.cent{width: 200px; height: 200px; position: fixed; top: 0; bottom: 0; left: 0; right: 0; margin: auto;";}
	</style>
	<style type="text/css">
		.btn {padding:10px;border:none;border-radius:9px;color:#FFFFFF;background-color:#0066FF;}
	</style>
</head>
<body style="background-color: #3C9;">
	<table class="cent" style="font-weight: 700">
		<form method="post">
			<tr>
				<td colspan="2" align="center"  style="color: red">
					Login
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" required="" name="txtName">
				</td>
			</tr>
			<tr>
				<td>Password&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>
					<input type="password" required="" name="passPassword">
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="Cancel" name="btnCancel" class="btn" style="background-color: red;"
					 onclick="window.location.href='index.php';">
				</td>
					<td align="right">
						<input type="submit" value="Login" name="btnSubmit" class="btn">
					</td>
				</td>
			</tr>
		</form>
	</table>
	<?php
		if(isset($_POST['btnSubmit']))
		{
			$name=$_POST['txtName'];
			$password = $_POST['passPassword'];
			
				$con = mysqli_connect("localhost","root","");
				$seldb = mysqli_select_db($con,"mcq_db");

				$srt="SELECT * FROM `signup` WHERE name='$name'AND password='$password'";
				$result = mysqli_query($con, $srt);
				$numrow=mysqli_num_rows($result);
				if ($numrow > 0) {
					echo '<script language="javascript">';
					echo 'alert("Correct")';
					echo "</script>";
					header("refresh:1; url=index.php");
				}
				else{
					echo '<script language="javascript">';
					echo 'alert("Invalid user name or password")';
					echo "</script>";
					header("refresh:1; url=index.php");
				}
		}
	?>
</body>
</html>