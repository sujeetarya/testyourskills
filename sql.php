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
    			<th colspan="2">What is the full form of SQL?</th>
           	</tr>
            <tr>
            	<td id="q1o1" onclick="wrong(this.id)">&emsp;A.Structured Query List</td>
                <td id="q1o2" onclick="wrong(this.id)">&emsp;B.Simple Query Language</td>
            </tr>
            <tr>
            	<td id="q1o3" onclick="correct(this.id)">&emsp;C.Structured Query Language</td>
                <td id="q1o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <tr>
            	<th colspan="2">Q.Which is the subset of SQL commands used to manipulate Oracle Databasestructures, including tables?</th>
            </tr>
            <tr>
            	<td id="q2o1" onclick="correct(this.id)">&emsp;A.Data Definition Language(DDL)</td>
                <td id="q2o2" onclick="wrong(this.id)">&emsp;B.Data Manipulation Language(DML)</td>
            </tr>
            <tr>
            	<td id="q2o3" onclick="wrong(this.id)">&emsp;C.Both of above</td>
                <td id="q2o4" onclick="wrong(this.id)">&emsp;D.None</td>
            </tr>
            <!--###########################-->
            <tr>
            	<th colspan="2">Q. Which operator performs pattern matching?</th>
            </tr>
            <tr>
            	<td id="q3o1" onclick="correct(this.id)">&emsp;A.LIKE operator</td>
                <td id="q3o2" onclick="wrong(this.id)">&emsp;B. EXISTS operator</td>
            </tr>
            <tr>
            	<td id="q3o3" onclick="wrong(this.id)">&emsp;C.BETWEEN operator</td>
                <td id="q3o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <!--###########################-->
            <tr>
            <th colspan="2">What operator tests column for the absence of data?</th>
            </tr>
            <tr>
            	<td id="q4o1" onclick="wrong(this.id)">&emsp;A.EXISTS operator</td>
                <td id="q4o2" onclick="wrong(this.id)">&emsp;B.NOT operator</td>
            </tr>
            <tr>
            	<td id="q4o3" onclick="correct(this.id)">&emsp;C.IS NULL operator</td>
                <td id="q4o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <tr>
            	<th colspan="2">Q.In SQL, which command(s) is(are) used to change a table's storage characteristics?</th>
            </tr>
            <tr>
            	<td id="q5o1" onclick="wrong(this.id)">&emsp;A.MODIFY TABLE</td>
                <td id="q5o2" onclick="wrong(this.id)">&emsp;B.CHANGE TABLE</td>
            </tr>
            <tr>
                <td id="q5o3" onclick="wrong(this.id)">&emsp;C.ALTER TABLE</td>
                <td id="q5o4" onclick="correct(this.id)">&emsp;D.All of the above</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q. In SQL, which of the following is not a data definition language commands?</th>
            </tr>
            <tr>
                <td id="q6o1" onclick="wrong(this.id)">&emsp;A.RENAME</td>
                <td id="q6o2" onclick="wrong(this.id)">&emsp;B.GRANT</td>
            </tr>
            <tr>
                <td id="q6o3" onclick="correct(this.id)">&emsp;C.UPDATE</td>
                <td id="q6o4" onclick="wrong(this.id)">&emsp;D.REVOKE</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2"> In SQL, which command is used to SELECT only one copy of each set of duplicable rows</th>
            </tr>
            <tr>
                <td id="q7o1" onclick="wrong(this.id)">&emsp;A.SELECT UNIQUE</td>
                <td id="q7o2" onclick="correct(this.id)">&emsp;B.SELECT DISTINCT</td>
            </tr>
            <tr>
                <td id="q7o3" onclick="wrong(this.id)">&emsp;C.SELECT DIFFERENT</td>
                <td id="q7o4" onclick="wrong(this.id)">&emsp;D. All of the above</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.A command that lets you change one or more fields in a record is</th>
            </tr>
            <tr>
                <td id="q8o1" onclick="wrong(this.id)">&emsp;A.Insert</td>
                <td id="q8o2" onclick="wrong(this.id)">&emsp;B.Look-up</td>
            </tr>
            <tr>
                <td id="q8o3" onclick="correct(this.id)">&emsp;C.Modify</td>
                <td id="q8o4" onclick="wrong(this.id)">&emsp;D.All of the above</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.Which of the SQL statements is correct?</th>
            </tr>
            <tr>
                <td id="q9o1" onclick="correct(this.id)">&emsp;A.SELECT Username, Password FROM Users</td>
                <td id="q9o2" onclick="wrong(this.id)">&emsp;B.SELECT Username AND Password FROM Users</td>
            </tr>
            <tr>
                <td id="q9o3" onclick="wrong(this.id)">&emsp;C.SELECT Username, Password WHERE Username = 'user1'</td>
                <td id="q9o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.The FROM SQL clause is used to...</th>
            </tr>
            <tr>
                <td id="q10o1" onclick="wrong(this.id)">&emsp;A.specify search condition</td>
                <td id="q10o2" onclick="wrong(this.id)">&emsp;B.specify range for search condition</td>
            </tr>
            <tr>
                <td id="q10o3" onclick="correct(this.id)">&emsp;C.specify what table we are selecting or deleting data FROM</td>
                <td id="q10o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
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
