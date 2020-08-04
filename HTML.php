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
            	<th colspan="2">Q.HTML stands for?</th>
            	</tr>
            <tr>
            	<td id="q1o1" onclick="correct(this.id)">&emsp;A.Hyper Text Markup Language</td>
                <td id="q1o2" onclick="wrong(this.id)">&emsp;B.High Text Markup Language</td>
            </tr>
            <tr>
            	<td id="q1o3" onclick="wrong(this.id)">&emsp;C.Hyper Tabular Markup Language</td>
                <td id="q1o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <tr>
            	<th colspan="2">Q.which of the following tag is used to mark a begining of paragraph ?</th>
            </tr>
            <tr>
            	<td id="q2o1" onclick="wrong(this.id)">&emsp;A.&lt;TD&gt;</td>
                <td id="q2o2" onclick="correct(this.id)">&emsp;B.&lt;P&gt;</td>
            </tr>
            <tr>
            	<td id="q2o3" onclick="wrong(this.id)">&emsp;C.&lt;TR&gt;</td>
                <td id="q2o4" onclick="wrong(this.id)">&emsp;D.&lt;BR&gt;</td>
            </tr>
            <!--###########################-->
            <tr>
            	<th colspan="2">Q.Correct HTML tag for the largest heading is</th>
            </tr>
            <tr>
            	<td id="q3o1" onclick="wrong(this.id)">&emsp;A.&lt;HEAD&gt;</td>
                <td id="q3o2" onclick="correct(this.id)">&emsp;B.&lt;H1&gt;</td>
            </tr>
            <tr>
            	<td id="q3o3" onclick="wrong(this.id)">&emsp;C.&lt;H6&gt;</td>
                <td id="q3o4" onclick="wrong(this.id)">&emsp;D.&lt;Heading&gt;</td>
            </tr>
            <!--###########################-->
            <tr>
            <th colspan="2">Q.The attribute of &lt;form&gt; tag</th>
            </tr>
            <tr>
            	<td id="q4o1" onclick="wrong(this.id)">&emsp;A.Method</td>
                <td id="q4o2" onclick="wrong(this.id)">&emsp;B.Action</td>
            </tr>
            <tr>
            	<td id="q4o3" onclick="correct(this.id)">&emsp;C.Both (a)&amp;(b)</td>
                <td id="q4o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
            <tr>
            	<th colspan="2">Q.www is based on which model?</th>
            </tr>
            <tr>
            	<td id="q5o1" onclick="wrong(this.id)">&emsp;A.Local-server</td>
                <td id="q5o2" onclick="correct(this.id)">&emsp;B.Client-server</td>
            </tr>
            <tr>
                <td id="q5o3" onclick="wrong(this.id)">&emsp;C.3-tier</td>
                <td id="q5o4" onclick="wrong(this.id)">&emsp;D.None of these</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.Which of the following attributes of text box control allow to limit the maximum character?</th>
            </tr>
            <tr>
                <td id="q6o1" onclick="wrong(this.id)">&emsp;A.size</td>
                <td id="q6o2" onclick="wrong(this.id)">&emsp;B.len</td>
            </tr>
            <tr>
                <td id="q6o3" onclick="correct(this.id)">&emsp;C.maxlength</td>
                <td id="q6o4" onclick="wrong(this.id)">&emsp;D.all of these</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.Web pages starts with which ofthe following tag?</th>
            </tr>
            <tr>
                <td id="q7o1" onclick="wrong(this.id)">&emsp;A.&lt;Body&gt;</td>
                <td id="q7o2" onclick="correct(this.id)">&emsp;C.&lt;HTML&gt;</td>
            </tr>
            <tr>
                <td id="q7o3" onclick="wrong(this.id)">&emsp;B.&lt;Form&gt;</td>
                <td id="q7o4" onclick="wrong(this.id)">&emsp;D.&lt;Title&gt;</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.To create HTML page, you need</th>
            </tr>
            <tr>
                <td id="q8o1" onclick="wrong(this.id)">&emsp;A.Web browser</td>
                <td id="q8o2" onclick="wrong(this.id)">&emsp;B.text editor</td>
            </tr>
            <tr>
                <td id="q8o3" onclick="correct(this.id)">&emsp;C.both a &amp; b</td>
                <td id="q8o4" onclick="wrong(this.id)">&emsp;D.None of the above</td>
            </tr>
                <!--############################################################################################################-->
            <tr>
                <th colspan="2">Q.&lt;a&gt; and &lt;/a&gt; are the tags used for</th>
                </tr>
            <tr>
                <td id="q9o1" onclick="wrong(this.id)">&emsp;A.Adding image</td>
                <td id="q9o2" onclick="wrong(this.id)">&emsp;B.Adding text</td>
            </tr>
            <tr>
                <td id="q9o3" onclick="wrong(this.id)">&emsp;C.Audio-voiced text</td>
                <td id="q9o4" onclick="correct(this.id)">&emsp;D.Adding links to your page</td>
            </tr>
                <!--###########################-->
            <tr>
                <th colspan="2">Q.What does &lt;BR&gt; tag add to your webpage?</th>
            </tr>
            <tr>
                <td id="q10o1" onclick="wrong(this.id)">&emsp;A.Long break</td>
                <td id="q10o2" onclick="wrong(this.id)">&emsp;B.Paragraph break</td>
            </tr>
            <tr>
                <td id="q10o3" onclick="correct(this.id)">&emsp;C.Line break</td>
                <td id="q10o4" onclick="wrong(this.id)">&emsp;D.None of the above</td>
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
            document.getElementById(id).style.backgroundColor="#00cd00";
            document.getElementById(id).style.color="white";
            x++;
        }
        function wrong(id){
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
