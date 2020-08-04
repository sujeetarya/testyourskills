<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
    	include("header.php");
    ?>
    <hr>
    <div class="container-fluid">
    	<div class="row">
			<div class="col-sm-3" style="border: solid; border-color:orange ;border-radius: 12px;">
				<h3 style="border-left: solid thick; border-radius: 20%; border-color:red; font-size:36px;">MCQ</h3>
				<ul style="list-style-type: square; font-size: 20px;">
					<li><a href="c.php">C</a></li>
					<li><a href="c++.php">C++</a></li>
					<li><a href="java.php">Java</a></li>
					<li><a href="HTML.php">HTML</a></li>
					<li><a href="sql.php">SQL</a></li>
				</ul>
			</div>
			<div class="col-sm-3" style="border: solid; border-radius: 12px; border-color: blue;">
	        	<h3 style="border-left: solid thick; border-radius: 20%; border-color:red; font-size:36px;">Tutorials</h3>
				<ul style="list-style-type: square; font-size: 20px;">
					<li>
						<a href="tutorials_c.php">C</a>
						<!-- <select style="font-size: 12px; float: right;" onchange="location=this.value;">
							<option disabled="" selected="">--C Programming by--</option>
							<option value="https://www.youtube.com/watch?v=co7_-3FBDhE&list=PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy">
								Mr. Sundeep Saradhi
							</option>
							<option value="https://www.youtube.com/watch?v=si-KFFOW2gw&list=PLVlQHNRLflP8IGz6OXwlV_lgHgc72aXlh">
								Mr. Srinivas
							</option>
							<option value="https://www.youtube.com/watch?v=rLf3jnHxSmU&list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR">
								Neso Academy
							</option>
						</select> -->
					</li>
					<li>
						<a href="tutorials_c++.php">C++</a>
						<!-- <select style="font-size: 12px; float: right;" onchange="location=this.value;">
							<option disabled="" selected="">--C++ by--</option>
							<option value="https://www.youtube.com/watch?v=co7_-3FBDhE&list=PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy">
								Mr. Sundeep Saradhi
							</option>
							<option value="https://www.youtube.com/watch?v=si-KFFOW2gw&list=PLVlQHNRLflP8IGz6OXwlV_lgHgc72aXlh">
								Mr. Srinivas
							</option>
							<option value="https://www.youtube.com/watch?v=rLf3jnHxSmU&list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR">
								Neso Academy
							</option>
						</select> -->
					</li>
					<li>
						<a href="tutorials_java.php">Java</a>
						<!-- <select style="font-size: 12px; float: right;" onchange="location=this.value;">
							<option disabled="" selected="">--Java by--</option>
							<option value="https://www.youtube.com/watch?v=co7_-3FBDhE&list=PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy">
								Mr. Sundeep Saradhi
							</option>
							<option value="https://www.youtube.com/watch?v=si-KFFOW2gw&list=PLVlQHNRLflP8IGz6OXwlV_lgHgc72aXlh">
								Mr. Srinivas
							</option>
							<option value="https://www.youtube.com/watch?v=rLf3jnHxSmU&list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR">
								Neso Academy
							</option>
						</select> -->
					</li>
					<li>
						<a href="tutorials_html.php">HTML</a>
						<!-- <select style="font-size: 12px; float: right;" onchange="location=this.value;">
							<option disabled="" selected="">--HTML by--</option>
							<option value="https://www.youtube.com/watch?v=co7_-3FBDhE&list=PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy">
								Mr. Sundeep Saradhi
							</option>
							<option value="https://www.youtube.com/watch?v=si-KFFOW2gw&list=PLVlQHNRLflP8IGz6OXwlV_lgHgc72aXlh">
								Mr. Srinivas
							</option>
							<option value="https://www.youtube.com/watch?v=rLf3jnHxSmU&list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR">
								Neso Academy
							</option>
						</select> -->
					</li>
					<li>
						<a href="tutorials_sql.php">SQL</a>
						<!-- <select style="font-size: 12px; float: right;" onchange="location=this.value;">
							<option disabled="" selected="">--SQL by--</option>
							<option value="https://www.youtube.com/watch?v=co7_-3FBDhE&list=PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy">
								Mr. Sundeep Saradhi
							</option>
							<option value="https://www.youtube.com/watch?v=si-KFFOW2gw&list=PLVlQHNRLflP8IGz6OXwlV_lgHgc72aXlh">
								Mr. Srinivas
							</option>
							<option value="https://www.youtube.com/watch?v=rLf3jnHxSmU&list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR">
								Neso Academy
							</option>
						</select> -->
					</li>
				</ul>
			</div>
			<div class="col-sm-3" style="border: solid; border-color:green ;border-radius: 12px; background-image: url('img/comingsoon.PNG');background-repeat: no-repeat; background-position: bottom right;">
				<h3 style="border-left: solid thick; border-radius: 20%; border-color:red; font-size:36px;">Queries</h3>
				<p>Post your queries/doubts here and people can answer them , and others can also see the solutions if they have same problem, we are just trying to provide a platform to  our users to they can share their knowledge and grow together. </p>
				<!-- <ul style="list-style-type: square; font-size: 20px;">
					<li><a href="c.php">C</a></li>
					<li>C++</li>
					<li>Java</li>
					<li>HTML</li>
					<li>SQL</li>
				</ul> -->
			</div>
			<div class="col-sm-3" style="border: solid; border-color:red; border-radius: 12px;">
				<h3 style="border-left: solid thick; border-radius: 20%; border-color:red; font-size:36px;">Submit MCQ</h3>
				<!-- <ul style="list-style-type: square; font-size: 20px;">
					<li><a href="c.php">C</a></li>
					<li>C++</li>
					<li>Java</li>
					<li>HTML</li>
					<li>SQL</li>
				</ul> -->
				<form action="suggestion.php">
				<textarea id="textarea1" rows="4" cols="35" placeholder="Submit your question to be featured in MCQ section,also give answer along with answer" style="border: solid; border-color: gray; background-color: black; color: white; max-width: 95%"></textarea>
				<p>
						<input type="submit"> &nbsp;&nbsp; <input type="reset">
					</p>
				</form>
			</div>
		</div>
	</div>
	<div class="container" style="padding:2px;">
			<div class="col-sm-12">
				<form action="suggestion.php">
					<textarea id="textarea1" rows="4" cols="150" placeholder="We are always open to suggession, feel free to write" style="border: solid; border-color: gray; background-color: black; color: white; max-width: 95%"></textarea>
					<p>
						<input type="submit"> &nbsp;&nbsp; <input type="reset">
					</p>
				</form>
			</div>		
	</div>
	<!-- FOOTER -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
		<ul class="navbar-nav">
			<li class="nav-item">
				<span style="color: white;">&copy;copy</span>
			</li>
		</ul>
		<ul class="nav navbar-nav ml-auto">
			<li class="nav-item">
				<span style="color: white;">-by Sujeet Kumar Arya</span>
			</li>
		</ul>
	</nav>
    
</body>
</html>
