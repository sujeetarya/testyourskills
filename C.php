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
    			<th colspan="2">Q. Who is known as the father of C Language ?</th>
           	</tr>
            <tr>
            	<td id="q1o1" onclick="wrong(this.id)">&emsp;A.Sosling</td>
                <td id="q1o2" onclick="wrong(this.id)">&emsp;B.Vjarne Stroustrup</td>
            </tr>
            <tr>
            	<td id="q1o3" onclick="correct(this.id)">&emsp;C.Dennis Ritchie</td>
                <td id="q1o4" onclick="wrong(this.id)">&emsp;D.Sujeet Arya</td>
            </tr>
            <tr>
            	<th colspan="2">Q.What is the default return type of main() in C ?</th>
            </tr>
            <tr>
            	<td id="q2o1" onclick="wrong(this.id)">&emsp;A.void</td>
                <td id="q2o2" onclick="correct(this.id)">&emsp;B.int</td>
            </tr>
            <tr>
            	<td id="q2o3" onclick="wrong(this.id)">&emsp;C.float</td>
                <td id="q2o4" onclick="wrong(this.id)">&emsp;D.char</td>
            </tr>
            <!--###########################-->
            <tr>
            	<th colspan="2">Q.C Language was developed in the year ____ ?</th>
            </tr>
            <tr>
            	<td id="q3o1" onclick="correct(this.id)">&emsp;A.1970</td>
                <td id="q3o2" onclick="wrong(this.id)">&emsp;B.1980</td>
            </tr>
            <tr>
            	<td id="q3o3" onclick="wrong(this.id)">&emsp;C.1985</td>
                <td id="q3o4" onclick="wrong(this.id)">&emsp;D.1975</td>
            </tr>
            <!--###########################-->
            <tr>
            <th colspan="2">Q.Which one is not a reserve keyword in C Language?</th>
            </tr>
            <tr>
            	<td id="q4o1" onclick="wrong(this.id)">&emsp;A.auto</td>
                <td id="q4o2" onclick="wrong(this.id)">&emsp;B.case</td>
            </tr>
            <tr>
            	<td id="q4o3" onclick="correct(this.id)">&emsp;C.main</td>
                <td id="q4o4" onclick="wrong(this.id)">&emsp;D.register</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Name the loop that executes at least once.</th>
            </tr>
            <tr>
            	<td id="q5o1" onclick="wrong(this.id)">&emsp;A.For</td>
                <td id="q5o2" onclick="wrong(this.id)">&emsp;B.If</td>
            </tr>
            <tr>
                <td id="q5o3" onclick="wrong(this.id)">&emsp;C.while</td>
                <td id="q5o4" onclick="correct(this.id)">&emsp;D.do-while</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.An uninitialized pointer in C is called ___</th>
            </tr>
            <tr>
                <td id="q6o1" onclick="wrong(this.id)">&emsp;A.Constructor</td>
                <td id="q6o2" onclick="wrong(this.id)">&emsp;B.dangling pointer</td>
            </tr>
            <tr>
                <td id="q6o3" onclick="correct(this.id)">&emsp;C.Wild Pointer</td>
                <td id="q6o4" onclick="wrong(this.id)">&emsp;D.Destructor</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.A pointer that is pointing to NOTHING is called ____</th>
            </tr>
            <tr>
                <td id="q7o1" onclick="wrong(this.id)">&emsp;A.VOID Pointer</td>
                <td id="q7o2" onclick="correct(this.id)">&emsp;C.NULL Pointer</td>
            </tr>
            <tr>
                <td id="q7o3" onclick="wrong(this.id)">&emsp;B.DANGLING Pointer</td>
                <td id="q7o4" onclick="wrong(this.id)">&emsp;D.WILD Pointer</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.If the two strings are identical, then strcmp() function returns</th>
            </tr>
            <tr>
                <td id="q8o1" onclick="correct(this.id)">&emsp;A.0</td>
                <td id="q8o2" onclick="wrong(this.id)">&emsp;B.-1</td>
            </tr>
            <tr>
                <td id="q8o3" onclick="wrong(this.id)">&emsp;C.1</td>
                <td id="q8o4" onclick="wrong(this.id)">&emsp;D.Yes</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.Prototype of a function means _____</th>
                </tr>
            <tr>
                <td id="q9o1" onclick="wrong(this.id)">&emsp;A.Name of FunctionB</td>
                <td id="q9o2" onclick="wrong(this.id)">&emsp;B.Output of Function</td>
            </tr>
            <tr>
                <td id="q9o3" onclick="correct(this.id)">&emsp;C.Declaration of Function</td>
                <td id="q9o4" onclick="wrong(this.id)">&emsp;D.Input of a Function</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.How will you print \n on the screen?</th>
            </tr>
            <tr>
                <td id="q10o1" onclick="wrong(this.id)">&emsp;A.printf("\n");</td>
                <td id="q10o2" onclick="wrong(this.id)">&emsp;B.echo "\\n";</td>
            </tr>
            <tr>
                <td id="q10o3" onclick="wrong(this.id)">&emsp;C.printf('\n');</td>
                <td id="q10o4" onclick="correct(this.id)">&emsp;D.printf("\\n");</td>
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
