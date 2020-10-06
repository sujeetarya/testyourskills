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
	<table class="cent" style="font-weight: 700" cellpadding="5px" class="table">
		<form method="post">
			<tr>
				<td colspan="2" align="center"  style="color: red">Signup</td>
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
				<td>Contact</td>
				<td>
					<input type="number" required="" name="numContact" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>
					<input type="email" name="eEmail" required="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="Cancel" name="btnCancel" class="btn" style="background-color: red;"
					 onclick="window.location.href='index.php';">
				</td>
					<td align="right">
						<input type="submit" value="Submit" name="btnSubmit" class="btn">
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
			$mobile = $_POST['numContact'];
			$email = $_POST['eEmail'];
			
				$con = mysqli_connect("localhost","root","");
				$seldb = mysqli_select_db($con,"mcq_db");

				$srt="INSERT INTO signup(name,password,phone,email) VALUES ('$name','$password',$mobile,'$email')";
				$srt2 = mysqli_query($con, $srt);
				if ($srt2) {
					echo '<script language="javascript">';
					echo 'alert("Your account has been created")';
					echo "</script>";
					header("refresh:1; url=index.php");
				}
				else{
					echo 'alert("Something went wrong")';
				}
		}
	?>
</body>
</html>