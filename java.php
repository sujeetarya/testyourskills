<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
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
    			<th colspan="2">Q.What is the stored in the object obj in following lines of Java code?<br>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: green">box obj;</span>
                </th>
           	</tr>
            <tr>
            	<td id="q1o1" onclick="wrong(this.id)">&emsp;A.Memory address of allocated memory of object</td>
                <td id="q1o2" onclick="wrong(this.id)">&emsp;B.Garbage</td>
            </tr>
            <tr>
            	<td id="q1o3" onclick="correct(this.id)">&emsp;C.NULL</td>
                <td id="q1o4" onclick="wrong(this.id)">&emsp;D.Any arbitrary pointer</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Which of these keywords is used to make a class?</th>
            </tr>
            <tr>
            	<td id="q2o1" onclick="correct(this.id)">&emsp;A.class</td>
                <td id="q2o2" onclick="wrong(this.id)">&emsp;B.none of the mentioned</td>
            </tr>
            <tr>
            	<td id="q2o3" onclick="wrong(this.id)">&emsp;C.struct</td>
                <td id="q2o4" onclick="wrong(this.id)">&emsp;D.int</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Which of the following is a valid declaration of an object of class Box?</th>
            </tr>
            <tr>
            	<td id="q3o1" onclick="correct(this.id)">&emsp;A.Box obj = new Box();</td>
                <td id="q3o2" onclick="wrong(this.id)">&emsp;B. Box obj = new Box;</td>
            </tr>
            <tr>
            	<td id="q3o3" onclick="wrong(this.id)">&emsp;C.obj = new Box();</td>
                <td id="q3o4" onclick="wrong(this.id)">&emsp;D.new Box obj;</td>
            </tr>
            <!--###########################-->
            <tr>
            <th colspan="2">Q.Which of these operators is used to allocate memory for an object?</th>
            </tr>
            <tr>
            	<td id="q4o1" onclick="wrong(this.id)">&emsp;A.malloc</td>
                <td id="q4o2" onclick="wrong(this.id)">&emsp;B.alloc</td>
            </tr>
            <tr>
            	<td id="q4o3" onclick="correct(this.id)">&emsp;C.new</td>
                <td id="q4o4" onclick="wrong(this.id)">&emsp;D.give</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Which of these statement is incorrect?</th>
            </tr>
            <tr>
            	<td id="q5o1" onclick="wrong(this.id)">&emsp;A.Applets do not require a main() method at all</td>
                <td id="q5o2" onclick="wrong(this.id)">&emsp;B.There can be only one main() method in a program</td>
            </tr>
            <tr>
                <td id="q5o3" onclick="wrong(this.id)">&emsp;C.main() method must be made public</td>
                <td id="q5o4" onclick="correct(this.id)">&emsp;D.Every class must contain a main() method</td>
            </tr>
            <tr>
                <th colspan="2">Q.What will be the output of the following Java program?<br />&emsp;&emsp;
                    <img src="img/javaQ6.png" alt="File not found SKIP THIS QUESTION" />
                </th>
            </tr>
            <tr>
                <td id="q6o1" onclick="wrong(this.id)">&emsp;A.8</td>
                <td id="q6o2" onclick="wrong(this.id)">&emsp;B.9</td>
            </tr>
            <tr>
                <td id="q6o3" onclick="correct(this.id)">&emsp;C.Compilation error</td>
                <td id="q6o4" onclick="wrong(this.id)">&emsp;D.Runtime error</td>
            </tr>
            <tr>
                <th colspan="2">Q.Which of the following statements is correct?</th>
            </tr>
            <tr>
                <td id="q7o1" onclick="wrong(this.id)">&emsp;A.Public method is accessible only to subclasses of its parent class</td>
                <td id="q7o2" onclick="correct(this.id)">&emsp;B.Public method is accessible to all other classes in the hierarchy </td>
            </tr>
            <tr>
                <td id="q7o3" onclick="wrong(this.id)">&emsp;C.Public method can only be called by object of its class</td>
                <td id="q7o4" onclick="wrong(this.id)">&emsp;D.Public method can be accessed by calling object of the public class</td>
            </tr>
            <tr>
                <th colspan="2">Q.What will be the output of the following Java program?<br />&emsp;&emsp;
                    <img src="img/javaQ8.png" alt="File not found SKIP THIS QUESTION" />
                </th>
            </tr>
            <tr>
                <td id="q8o1" onclick="wrong(this.id)">&emsp;A.12</td>
                <td id="q8o2" onclick="wrong(this.id)">&emsp;B.400</td>
            </tr>
            <tr>
                <td id="q8o3" onclick="correct(this.id)">&emsp;C.200</td>
                <td id="q8o4" onclick="wrong(this.id)">&emsp;D.100</td>
            </tr>
            <tr>
                <th colspan="2">Q.What will be the output of the following Java program?<br />&emsp;&emsp;
                    <img src="img/javaQ9.png" alt="File not found SKIP THIS QUESTION" />
                </th>
            </tr>
            <tr>
                <td id="q9o1" onclick="correct(this.id)">&emsp;A.1</td>
                <td id="q9o2" onclick="wrong(this.id)">&emsp;B.2</td>
            </tr>
            <tr>
                <td id="q9o3" onclick="wrong(this.id)">&emsp;C.Runtime error</td>
                <td id="q9o4" onclick="wrong(this.id)">&emsp;D.Garbage value</td>
            </tr>
            <tr>
                <th colspan="2">Q.What will be the output of the following Java program?<br />&emsp;&emsp;
                    <img src="img/javaQ10.JPG" alt="File not found SKIP THIS QUESTION" />
                </th>
            </tr>
            <tr>
                <td id="q10o1" onclick="wrong(this.id)">&emsp;A.0</td>
                <td id="q10o2" onclick="wrong(this.id)">&emsp;B.1</td>
            </tr>
            <tr>
                <td id="q10o3" onclick="correct(this.id)">&emsp;C.classname@hashcode in hexadecimal form</td>
                <td id="q10o4" onclick="wrong(this.id)">&emsp;D.Runtime error</td>
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
