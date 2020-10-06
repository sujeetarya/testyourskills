<?php
	session_start();
?>
<!DOCTYPE html>
<html >
<head>
	<title>Home</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapse_target">
			<ul class="nav navbar-nav">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="C.php">C</a></li>
				<li class="nav-item"><a class="nav-link" href="C++.php">C++</a></li>
				<li class="nav-item"><a class="nav-link" href="java.php">Java</a></li>
				<li class="nav-item"><a class="nav-link" href="HTML.php">HTML</a></li>
				<li class="nav-item"><a class="nav-link" href="sql.php">SQL</a></li>
				<li class="nav-item"><a class="nav-link" href="Tutorials.php">Tutorials</a></li>
				<li class="nav-item"><a class="nav-link" href="About_Us.php">About Us</a></li>
			</ul>
			<ul class="nav navbar-nav ml-auto">
				<?php
					if (isset($_SESSION['user_email'])) {
						echo'<form action="logout.php" method="post">
								<button type="submit" name="logout-submit">Logout</button>	
							</form>';
					}
					else {
						echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>
						<li class='nav-item'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
					}
				?>


			</ul>
		</div>
	</nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
