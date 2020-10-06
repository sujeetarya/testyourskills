<?php
	include("header2.php");/*
	$xyz=$_SESSION['user_email'];*/
?>
<!DOCTYPE>
<html>
<head>
	<title>Home</title>
</head>
<style type="text/css">

	.home-top {
	    margin-top: 35px;
	}

	h1{
		font-family: BentonSans;
	    color: #79589F;
	}

	.row{
		width: 100%;
		display: flex;
		justify-content: center;
	}
	.row li{
		margin: 40px 20px;
		border: none;
		cursor: pointer;
		/*border: solid 2px #000;*/
	}
	.fill-image1{
        width: 80px;
        height: 80px;
        background: url("img/csharp_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image1:hover{
        background: url("img/csharp_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image2{
        width: 80px;
        height: 80px;
        background: url("img/python_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image2:hover{
        background: url("img/python_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image3{
        width: 80px;
        height: 80px;
        background: url("img/java_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image3:hover{
        background: url("img/java_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image4{
        width: 80px;
        height: 80px;
        background: url("img/nodejs_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image4:hover{
        background: url("img/nodejs_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image5{
        width: 80px;
        height: 80px;
        background: url("img/php_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image5:hover{
        background: url("img/php_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image6{
        width: 80px;
        height: 80px;
        background: url("img/swift_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image6:hover{
        background: url("img/swift_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image7{
        width: 80px;
        height: 80px;
        background: url("img/sql_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image7:hover{
        background: url("img/sql_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image8{
        width: 80px;
        height: 80px;
        background: url("img/cpp_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image8:hover{
        background: url("img/cpp_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image9{
        width: 80px;
        height: 80px;
        background: url("img/go_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image9:hover{
        background: url("img/go_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image11{
        width: 80px;
        height: 80px;
        background: url("img/html_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image11:hover{
        background: url("img/html_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image12{
        width: 80px;
        height: 80px;
        background: url("img/ruby_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image12:hover{
        background: url("img/rubby_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image13{
        width: 80px;
        height: 80px;
        background: url("img/objc_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image13:hover{
        background: url("img/objc_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image14{
        width: 80px;
        height: 80px;
        background: url("img/scala_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image14:hover{
        background: url("img/scala_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image15{
        width: 80px;
        height: 80px;
        background: url("img/kotlin_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image15:hover{
        background: url("img/kotlin_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image16{
        width: 80px;
        height: 80px;
        background: url("img/swift_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image16:hover{
        background: url("img/swift_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image17{
        width: 80px;
        height: 80px;
        background: url("img/sql_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image17:hover{
        background: url("img/sql_blue.png") no-repeat;
        background-position: center;
	}


	.fill-image18{
        width: 80px;
        height: 80px;
        background: url("img/cpp_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image18:hover{
        background: url("img/cpp_blue.png") no-repeat;
        background-position: center;
	}

	.fill-image19{
        width: 80px;
        height: 80px;
        background: url("img/go_gray.png") no-repeat;
        background-position: center;
	}
	.fill-image19:hover{
        background: url("img/go_blue.png") no-repeat;
        background-position: center;
	}
hr{
	width: 50%;
}
</style>

<body>
    <div class="row home-top">
    	<div class="banner banner-start text-center">
    		<div class="col-md-12">
    			<h1>Let's see where you are stand</h1>
    		</div>
    	</div>
    </div>
    <hr>
    
    <div class="container-fluid">
    	<div class="row">
    		<ul class="list-group list-group-horizontal-sm">
			  <li class="list-group-item fill-image1"></li>
			  <li class="list-group-item fill-image2"></li>
			  <li class="list-group-item fill-image3"></li>
			  <li class="list-group-item fill-image4"></li>
			  <li class="list-group-item fill-image5"></li>
			  <li class="list-group-item fill-image6"></li>
			  <li class="list-group-item fill-image7"></li>
			  <li class="list-group-item fill-image8"></li>
			  <li class="list-group-item fill-image9"></li>
			</ul>
		</div>
		<div class="row">
    		<ul class="list-group list-group-horizontal-sm">
			  <li class="list-group-item fill-image11"></li>
			  <li class="list-group-item fill-image12"></li>
			  <li class="list-group-item fill-image13"></li>
			  <li class="list-group-item fill-image14"></li>
			  <li class="list-group-item fill-image15"></li>
			  <!-- <li class="list-group-item fill-image16"></li>
			  <li class="list-group-item fill-image17"></li>
			  <li class="list-group-item fill-image18"></li>
			  <li class="list-group-item fill-image19"></li> -->
			</ul>
		</div>
	</div>
</body>
</html>
