<?php
session_start();
$nt=$_POST['nt'];
$ne=$_POST['ne'];
$np=$_POST['np'];
$f=$_POST['f'];
$nphd=$_POST['nphd'];
$s8=$_POST['s8'];
$s9=$_POST['s9'];
$s15=$_POST['s15'];
$ce=$_POST['ce'];
$es=$_POST['es'];
$pub=$_POST['pub'];
$ci=$_POST['ci'];
$t25=$_POST['t25'];
$pq=$_POST['pg'];
$pp=$_POST['pp'];
$rf=$_POST['rf'];
$ss=(15*($nt/$ne))+(5*$np);
$fsr=30*(15*($f/($nt+$np)));
$fra=$nphd/$f;
if ($fra>0.95){
	$fq=10;
}
else{
	$fq=10*$fra;
}
if ((3*$s8)<=1){
	$f1=3*$s8;
}
else{
	$f1=1;
}
if ((3*$s9)<=1){
	$f2=3*$s9;
}
else{
	$f2=1;
}
if ((3*$s15)<=1){
	$f3=3*$s15;
}
else{
	$f3=1;
}
$fe=(3*$f1)+(3*$f2)+(4*$f3);
$fqe=$fe+$fq;
$fru=(7.5*$ce)+(22.5*$es);
$pu=35*($pub/$f);
$qp=(20*($ci/$pu))+(20*($t25/$pu));
$ipr=(10*$pq)+(5*$pp);
$ss = round($ss,2);
$fsr = round($fsr,2);
$fqe = round($fqe,2);
$fru = round($fru,2);
$pu = round($pu,2);
$qp = round($qp,2);
$ipr = round($ipr,2);
$rf = round($rf,2);
$_SESSION["ss"]=$ss;
$_SESSION["fsr"]=$fsr;
$_SESSION["fqe"]=$fqe;
$_SESSION["fru"]=$fru;
$_SESSION["pu"]=$pu;
$_SESSION["qp"]=$qp;
$_SESSION["ipr"]=$ipr;
$_SESSION["rf"]=$rf;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <style >
    body{
    background: #e67e22;
    }
    .btnn{
    width: 250px;
    border: 0px;
    background: black;
    color: white;
    padding: 5px;
    border-radius: 2%;
    }
    a{
        color: white;
    }
    .box{
        border-left: 2px solid black;
        padding: 10px;
    }
	#contr,#contr1{
	font-weight:bold;
	}
    div{
        margin-bottom: 10px;
    }
    </style>
    <title>NIRF Score Calculator</title>
</head>
<body>
<form method="post" action='submit.php' >
<div class="container">
    <div class="row">
        <h1><b>Enter the details:</b></h1> <br>
		
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <label for="user">Average Consultancy Funding</label><br>
            <input onclick="a17()" type="number" class="input_field form-control" id='cf' name="cf"  step="any"><br>
            <label for="user">Plaement Average Students</label><br>
            <input onclick="a18()" type="number" class="input_field form-control" id='pa' name="pa"  step="any"><br>
			<label for="user">Higher Studies Student</label><br>
           <input onclick="a19()" type="number" class="input_field form-control" id='ha' name="ha"  step="any"><br>
			<label for="user">Pass Percentage</label><br>
            <input onclick="a20()" type="number" class="input_field form-control" id='pap' name="pap"  step="any"><br>
            <label for="user">Median Salary</label><br>
            <input onclick="a21()" type="number" class="input_field form-control" id='ms' name="ms"  step="any"><br>
			<label for="user">P.hD students Graduated </label><br>
            <input onclick="a22()" type="number" class="input_field form-control" id='sg' name="sg"  step="any"><br>
            <br><br>

            <!--<input type="number" class="input_field form-control" id='user' name="username"><br>
			<label for="number">Aadhar Number of Person 2</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>
            <label for="number">Aadhar Number of Person 4</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>-->
        </div>
       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <label for="user">Other State Students</label><br>
            <input onclick="a23()" type="number" class="input_field form-control" id='os' name="os"  step="any"><br>
            <label for="password">Other country students</label><br>
            <input onclick="a24()" type="number" class="input_field form-control" id='oc' name="oc"  step="any"><br>
			<label for="user">Female Students</label><br>
            <input onclick="a25()" type="number" class="input_field form-control" id='fs' name="fs"  step="any"><br>
			<label for="user">Female Staffs</label><br>
            <input onclick="a26()" type="number" class="input_field form-control" id='fst' name="fst" step="any"><br>
            <label for="password">Percentage with financial aid</label><br>
            <input onclick="a27()" type="number" class="input_field form-control" id='fai' name="fai" step="any"><br>
			<label for="user">Facilites for Physically Challenged</label><br>
            <input onclick="a28()" type="number" class="input_field form-control" id='pyc' name="pyc"  step="any"><br>
			<input type="submit" class="btnn" value="Submit">
			
			<!-- <a href="next.html" id="btton"><button class="btnn"><h5><b>Next</b></h5></button></a>
            <label for="user">Aadhar Number of Person 1</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>
            <label for="user">Aadhar Number of Person 3</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>
            <label for="user">Aadhar Number of Person 5</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>
            <br><br><br>-->  
        </div>
		 </form>
        <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12"></div>
        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
            <div class="box">
            <h3><b>What is this?</b></h3>
            <p id="demo">1 Teaching, Learning & Resources 100 0.30<br>
                 2 Research and Professional Practice 100 0.30<br>
                 3 Graduation Outcomes 100 0.20 <br>
                 4 Outreach and Inclusivity 100 0.10<br>
                 5 Perception 100 0.10</p>
			</div>
        </div>
    </div>
</div>
<script>
function a17() {
  document.getElementById("demo").innerHTML = " The average annual consultancy amount (amount actually received in rupees) per faculty at institute level in previous three years.";
}
function a18() {
  document.getElementById("demo").innerHTML = "Percentage of graduating students (in UG/ PG programs) placed in the previous three years.";
}
function a19() {
  document.getElementById("demo").innerHTML = "Percentage of graduating students (in UG/ PG programs) who have been selected for higher studies in the previous three years.";
}
function a20() {
  document.getElementById("demo").innerHTML = "The percentage of Students (as a fraction of the approved intake), averaged over previous three years, passing the respective university examinations in stipulated time for the program in which enrolled.";
}
function a21() {
  document.getElementById("demo").innerHTML = " Median salary of graduates (in UG/PG program) in the previous three years From an institution.";
}
function a22() {
  document.getElementById("demo").innerHTML = " Average number of Ph.D students graduated (awarded Ph.D) over the previous three years.";
}
function a23() {
  document.getElementById("demo").innerHTML = "Fraction of total students enrolled from other states";
}
function a24() {
  document.getElementById("demo").innerHTML = "Fraction of total students enrolled from other countries";
}
function a25() {
  document.getElementById("demo").innerHTML = " The percentage of Women students. ";
}
function a26() {
  document.getElementById("demo").innerHTML = "The percentage of Women Faculty including the women members in senior administrative positions, such as Heads of Departments, Deans or Institute Heads.";
}
function a27() {
  document.getElementById("demo").innerHTML = " The percentage of UG students being provided financial aid by the institution, government and private bodies to pursue their degree programs. ";
}
function a28() {
  document.getElementById("demo").innerHTML = " If the Institute provides full facilities for physically challenged students, as outlined.Else, in proportion to facilities.";
}
</script>
</body>
</html>