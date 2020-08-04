<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
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
    <div class="table-responsive">
        <table class="table table-dark table-bordered">
    		<tr>
    			<th colspan="2">Q. In CPP, cin and cout are the predefined stream __________</th>
           	</tr>
            <tr>
            	<td id="q1o1" onclick="wrong(this.id)">&emsp;A. Operator</td>
                <td id="q1o2" onclick="wrong(this.id)">&emsp;B.Functions</td>
            </tr>
            <tr>
            	<td id="q1o3" onclick="correct(this.id)">&emsp;C.Objects</td>
                <td id="q1o4" onclick="wrong(this.id)">&emsp;D.Data types</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Constant variables can be created in CPP by using ________ </th>
            </tr>
            <tr>
            	<td id="q2o1" onclick="wrong(this.id)">&emsp;A.enum</td>
                <td id="q2o2" onclick="wrong(this.id)">&emsp;B.const</td>
            </tr>
            <tr>
            	<td id="q2o3" onclick="wrong(this.id)">&emsp;C.#define</td>
                <td id="q2o4" onclick="correct(this.id)">&emsp;D.All of these</td>
            </tr>
            <!--###########################-->
            <tr>
            	<th colspan="2">Q. Object oriented programming employs_________ programming approach.</th>
            </tr>
            <tr>
            	<td id="q3o1" onclick="correct(this.id)">&emsp;A.bottom-up</td>
                <td id="q3o2" onclick="wrong(this.id)">&emsp;B.top-down</td>
            </tr>
            <tr>
            	<td id="q3o3" onclick="wrong(this.id)">&emsp;C.procedural</td>
                <td id="q3o4" onclick="wrong(this.id)">&emsp;D.All of these</td>
            </tr>
            <!--###########################-->
            <tr>
            <th colspan="2">Q. _________________are used for generic programming.</th>
            </tr>
            <tr>
            	<td id="q4o1" onclick="wrong(this.id)">&emsp;A.Inheritance</td>
                <td id="q4o2" onclick="wrong(this.id)">&emsp;B.Virtual Functions</td>
            </tr>
            <tr>
            	<td id="q4o3" onclick="correct(this.id)">&emsp;C.Templates</td>
                <td id="q4o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <tr>
            	<th colspan="2">Q.While redefining a virtual function in the derived class, if its prototype is changed then _________ .</th>
            </tr>
            <tr>
            	<td id="q5o1" onclick="wrong(this.id)">&emsp;A.It will be overloaded by the compiler</td>
                <td id="q5o2" onclick="wrong(this.id)">&emsp;B.Its virtual nature will be lost</td>
            </tr>
            <tr>
                <td id="q5o3" onclick="wrong(this.id)">&emsp;C.Compiler will generate “Prototype mismatch error"</td>
                <td id="q5o4" onclick="correct(this.id)">&emsp;D.both a and b</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.Object based language differs from object oriented language as it does not support features _____ .</th>
            </tr>
            <tr>
                <td id="q6o1" onclick="wrong(this.id)">&emsp;A.Encapsulation & Inheritance</td>
                <td id="q6o2" onclick="wrong(this.id)">&emsp;B.Dynamic Binding & Abstraction</td>
            </tr>
            <tr>
                <td id="q6o3" onclick="correct(this.id)">&emsp;C. Inheritance & Dynamic Binding</td>
                <td id="q6o4" onclick="wrong(this.id)">&emsp;D. Polymorphism & Encapsulation</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.Classes in CPP are________ .</th>
            </tr>
            <tr>
                <td id="q7o1" onclick="wrong(this.id)">&emsp;A.built-in data types</td>
                <td id="q7o2" onclick="correct(this.id)">&emsp;B.User defined data types</td>
            </tr>
            <tr>
                <td id="q7o3" onclick="wrong(this.id)">&emsp;C	.derived data types</td>
                <td id="q7o4" onclick="wrong(this.id)">&emsp;D. All of these</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.If a class contains static variable, then every object of the class has its copy of static variable.</th>
            </tr>
            <tr>
                <td id="q8o1" onclick="correct(this.id)">&emsp;A.False</td>
                <td id="q8o2" onclick="wrong(this.id)">&emsp;B.True</td>
            </tr>
            <tr>
                <td id="q8o3" onclick="wrong(this.id)">&emsp;C.I don't know</td>
                <td id="q8o4" onclick="wrong(this.id)">&emsp;D.Don't worry i will tell you</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q. __________________ is the OOP feature and mechanism that binds together code and the data it manipulates, and keep both safe from outside world.</th>
                </tr>
            <tr>
                <td id="q9o1" onclick="wrong(this.id)">&emsp;A.Data Binding</td>
                <td id="q9o2" onclick="wrong(this.id)">&emsp;B.Data Storing</td>
            </tr>
            <tr>
                <td id="q9o3" onclick="correct(this.id)">&emsp;C.Data Encapsulation</td>
                <td id="q9o4" onclick="wrong(this.id)">&emsp;D.Data Abstraction</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q. ____________ refers to the act of representing only essential features without including the background details.</th>
            </tr>
            <tr>
                <td id="q10o1" onclick="wrong(this.id)">&emsp;A.Data Hiding</td>
                <td id="q10o2" onclick="wrong(this.id)">&emsp;B.Data Encapsulation</td>
            </tr>
            <tr>
                <td id="q10o3" onclick="correct(this.id)">&emsp;C.Data Abstraction</td>
                <td id="q10o4" onclick="wrong(this.id)">&emsp;D.All of these</td>
            </tr>
    	</table>
    </div>
     <?php
        include("score_btn.php");
    ?>
    <?php
        include("footer.php");
    ?>
    <script language="javascript" type="text/javascript">
        var x=0,y=0;
        function correct(id){
        //document.getElementById("print").innerHTML="CORRECT ANSWER";
        document.getElementById(id).style.backgroundColor="#00cd00";
        document.getElementById(id).style.color="white";
        x++;
        }
        function wrong(id){
        //document.getElementById("print").innerHTML="WRONG ANSWER";
        document.getElementById(id).style.backgroundColor="#ff0000";
        document.getElementById(id).style.color="white";
        y++;
        }
        function score(){
        //document.getElementById("print").innerHTML=x+"/"+(x+y);
        alert("YOU SCORE :-"+x+"/"+(x+y));
        }
    </script>
</body>
</html>
