<!DOCTYPE html>
<html>
<head>
	<title>Tutorials</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <style type="text/css">
	   /* h4 {text-shadow: 2px 2px orange;}*/
	    /*h4 {text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;}*/
	    h2 {text-shadow: 2px 2px 8px #FF0000;}
	    /*h4 {text-shadow: 0 0 3px #FF0000;;}*/
	    .zoom:hover {
		  -ms-transform: scale(1.5); /* IE 9 */
		  -webkit-transform: scale(1.5); /* Safari 3-8 */
		  transform: scale(1.5); 
		}

    </style>
</head>
<body>
	<?php
    	include("header.php");
    ?>
    <div class="container">
    	<h2>Tutorials</h2>
    	<a href="tutorials_c.php">
	  	<img class="img-fluid img-thumbnail rounded-circle zoom" src="img/c.PNG" alt="C" width="200" height="200"></a>
	  	<a href="tutorials_c++.php">
	  	<img class="img-fluid img-thumbnail rounded-circle zoom" src="img/c++.PNG" alt="Chania" width="200" height="200"></a>
	  	<a href="tutorials_java.php">
	  	<img class="img-fluid img-thumbnail rounded-circle zoom" src="img/java.JPG" alt="java" width="200" height="200"></a>
	  	<a href="tutorials_html.php">
		<img class="img-fluid img-thumbnail rounded-circle zoom" src="img/HTML5.PNG" alt="HTML" width="200" height="200"></a>
		<a href="tutorials_sql.php">
		<img class="img-fluid img-thumbnail rounded-circle zoom" src="img/sql.JPG" alt="sql" width="200" height="200"></a>
	</div>
	<?php
        include("footer.php");
    ?>
</body>
</html>