<?php
session_start(); // Session starts here.
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
		<form method="post" action='nirf2.php' >
<div class="container">
    <div class="row">
        <h1><b>Enter the details:</b></h1> <br>

        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <label for="user">Sanctioned Intake</label><br>
            <input onclick="a1()" type="number" class="input_field form-control" id='nt' name="nt"  step="any"><br>
            <label for="user">Students Enrolled</label><br>
            <input onclick="a2()" type="number" class="input_field form-control" id='ne' name="ne"  step="any"><br>
			<label for="user">Doctrate Enrolled</label><br>
            <input onclick="a3()" type="number" class="input_field form-control" id='np' name="np"  step="any"><br>
            <label for="user">Faculty Count</label><br>
            <input onclick="a4()" type="number" class="input_field form-control" id='f' name="f"  step="any"><br>
			<label for="user">No of P.Hd staff</label><br>
            <input onclick="a5()" type="number" class="input_field form-control" id='nphd' name="nphd"  step="any"><br>
            <label for="user">Staff with 8 or less year exp</label><br>
            <input onclick="a6()" type="number" class="input_field form-control" id='s8' name="s8"  step="any"><br>
			<label for="user">Staff with 8-15 year exp</label><br>
            <input onclick="a7()" type="number" class="input_field form-control" id='s9' name="s9"  step="any"><br>
            <label for="user">Staff with 15 or high year exp</label><br>
            <input onclick="a8()" type="number" class="input_field form-control" id='s15' name="s15"  step="any"><br>
            <br><br>

            <!--<input type="number" class="input_field form-control" id='user' name="username"><br>
			<label for="number">Aadhar Number of Person 2</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>
            <label for="number">Aadhar Number of Person 4</label><br>
            <input type="number" class="input_field form-control" id='user' name="username"><br>-->
        </div>
       <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <label for="user">Average Capital Expenditure</label><br>
            <input onclick="a9()" type="number" class="input_field form-control" id='ce' name="ce"  step="any"><br>
            <label for="password">Expenditure for students</label><br>
            <input onclick="a10()" type="number" class="input_field form-control" id='es' name="es"  step="any"><br>
			<label for="user">Number of  publications</label><br>
           <input onclick="a11()" type="number" class="input_field form-control" id='pub' name="pub"  step="any"><br>
			<label for="user">Total Ciation Count</label><br>
           <input onclick="a12()" type="number" class="input_field form-control" id='ci' name="ci"  step="any"><br>
            <label for="password">Ciation in TOP25</label><br>
            <input onclick="a13()" type="number" class="input_field form-control" id='t25' name="t25"  step="any"><br>
			<label for="user">Patent Granted</label><br>
            <input onclick="a14()" type="number" class="input_field form-control" id='pg' name="pg"  step="any"><br>
			<label for="user">Patent Published</label><br>
            <input onclick="a15()" type="number" class="input_field form-control" id='pp' name="pp"  step="any"><br>
            <label for="password">Average annual research funding</label><br>
            <input onclick="a16()" type="number" class="input_field form-control" id='rf' name="rf"  step="any"><br>
			<input type="submit" class="btnn" value="Next">
			
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
            <h3><b>What does it mean?</b></h3>
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
function a1() {
  document.getElementById("demo").innerHTML = "Total sanctioned approved intake in the institution considering all UG and PG programs of the institution";
}
function a2() {
  document.getElementById("demo").innerHTML = "Total number of students enrolled in the institution considering all UG and PG Programs of the institution";
}
function a3() {
  document.getElementById("demo").innerHTML = "Total number of students enrolled for the doctoral program till previous academic year";
}
function a4() {
  document.getElementById("demo").innerHTML = "Full time regular faculty in the institution in the previous year <br>Faculty members with Ph.D. and M.E./M.Tech. will be considered and counted here. Faculty member with a Bachelor’s degree will not be counted.";
}
function a5() {
  document.getElementById("demo").innerHTML = "The percentage of Faculty with Ph.D. (or equivalent qualification) with respect to the total no. of faculty required or actual faculty whichever is higher, in theprevious year. ";
}
function a6() {
  document.getElementById("demo").innerHTML = "Fraction with Experience up to 8 years";
}
function a7() {
  document.getElementById("demo").innerHTML = "Fraction with Experience from 8 to 15 years";
}
function a8() {
  document.getElementById("demo").innerHTML = "Fraction with Experience higher than 15 years";
}
function a9() {
  document.getElementById("demo").innerHTML = " Average Annual Capital Expenditure per student for previous three years pertaining to engineering discipline only. (Excluding expenditure on construction of new buildings)";
}
function a10() {
  document.getElementById("demo").innerHTML = "Operational(or Recurring) Expenditure per student for previous three years pertaining to engineering discipline only. (Excluding maintenance of hostels and allied services) ";
}
function a11() {
  document.getElementById("demo").innerHTML = "Weighted number of publications as acertained from suitable third party sources";
}
function a12() {
  document.getElementById("demo").innerHTML = "Total Citation Count over previous three years.";
}
function a13() {
  document.getElementById("demo").innerHTML = "Number of citations in top 25 percentile averaged over the previous three years";
}
function a14() {
  document.getElementById("demo").innerHTML = "The number of patents granted over the previous three years.";
}
function a15() {
  document.getElementById("demo").innerHTML = "The number of patents published over the previous three years.";
}
function a16() {
  document.getElementById("demo").innerHTML = "Average annual research funding earnings (amount actually received in rupees) per faculty at institute level in previous three years";
}
</script>
</body>
</html>