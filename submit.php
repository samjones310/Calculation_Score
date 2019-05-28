<?php
session_start();
$cf=$_POST['cf'];
$pa=$_POST['pa'];
$ha=$_POST['ha'];
$pap=$_POST['pap'];
$ms=$_POST['ms'];
$sg=$_POST['sg'];
$os=$_POST['os'];
$oc=$_POST['oc'];
$fs=$_POST['fs'];
$fst=$_POST['fst'];
$fai=$_POST['fai'];
$pyc=$_POST['pyc']; 
$rf=$_SESSION['rf'];
$fppp=(7.5*$rf)+(2.5*$cf);
$gph=40*(($pa/100)+($ha/100));
if (($pap/80)<=1){
	$gue=($pap/80)*15;
}
else{
	$gue=15;
}
$gms=25*$ms;
$gphid=20*$sg;
$rd=($os*25)+(5*$oc);
$wd=(15*($fs/50))+(15*($fst/20));
$ecs=20*$fai;
$pcs=$pyc;
$ss=$_SESSION["ss"];
$fsr=$_SESSION["fsr"];
$fqe=$_SESSION["fqe"];
$fru=$_SESSION["fru"];
$pu=$_SESSION["pu"];
$qp=$_SESSION["qp"];
$ipr=$_SESSION["ipr"];
$rf=$_SESSION["rf"];
$fppp = round($fppp,2);
$gph = round($gph,2);
$gue = round($gue,2);
$gms = round($gms,2);
$gphid = round($gphid,2);
$rd = round($rd,2);
$wd = round($wd,2);
$ecs = round($ecs,2);
$pcs = round($pcs,2);
$_SESSION["fpp"]=$fppp;
$_SESSION["gph"]=$gph;
$_SESSION["gue"]=$gue;
$_SESSION["gms"]=$gms;
$_SESSION["gphid"]=$gphid;
$_SESSION["rd"]=$rd;
$_SESSION["wd"]=$wd;
$_SESSION["ecs"]=$ecs;
$_SESSION["pcs"]=$pcs;
$_SESSION["score"]=$score;
$tlr=$ss+$fsr+$fqe+$fru;
$rp=$pu+$qp+$ipr+$fppp;
$go=$gph+$gue+$ms+$gphid;
$oi=$rd+$wd+$ecs+$pcs;
$pr=90;
$score=($tlr*.3)+($rp*.3)+($go*.2)+($oi*.1)+($pr*.1);
echo $score;
// Session starts here.
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
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
	th[colspan="4"] {
    text-align: center;
	color:red;
}
th[colspan="1"] {
    text-align: center;
	color:red;
}
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
	
#container1 {
width :90%;
  height: 420px;
  margin: 60px;
  padding: 0;
}
#container {
width :90%;
  height: 420px;
  margin: 60px;
  padding: 0;
}
    </style>
	<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
<script>
anychart.onDocumentReady(function() {

  // set the data
  var data = {
    header: ["Factor Name", "Score"],
    rows: [
      ["SS", <?php echo $ss; ?>],
      ["FSR", <?php echo $fsr; ?>],
      ["FQE", <?php echo $fqe; ?>],
      ["FRU", <?php echo $fru; ?>],
      ["PU", <?php echo $pu; ?>],
      ["QP", <?php echo $qp; ?>],
	  ["IPR", <?php echo $ipr; ?>],
      ["FPPP", <?php echo $fppp; ?>],
      ["GPHE", <?php echo $gph; ?>],
      ["GUE", <?php echo $gue; ?>],
      ["MS", <?php echo $ms; ?>],
      ["GPHD", <?php echo $gphid; ?>],
	  ["RD", <?php echo $rd; ?>],
      ["WD", <?php echo $wd; ?>],
      ["ESCS", <?php echo $ecs; ?>],
      ["PCS", <?php echo $pcs; ?>],
      ["PREMP", <?php echo $pr; ?>],
      ["Score",<?php echo $score; ?>],
  ]};

  // create the chart
  var chart = anychart.column();

  // add data
  chart.data(data);

  // set the chart title
  chart.title("College names");

  // draw
  chart.container("container1");
  chart.draw();
});
</script>
    <title>NIRF Score Calculator</title>
</head>
<body>
<div id="container1"></div>
<div id="container">
<table class="table table-striped">
  <thead>
	<tr>
	<th ></th>
	<th colspan="4">TLR</TH>
	<th colspan="4">TLR</TH>
	<th colspan="4">TLR</TH>
	<th colspan="4">TLR</TH>
	<th colspan="1">PR</th>
	</tr>
    <tr>
      <th scope="col"></th>
      <th scope="col">SS</th>
      <th scope="col">FSR</th>
      <th scope="col">FQE</th>
	  <th scope="col">FRU</th>
	  <th scope="col">PU</th>
      <th scope="col">QP</th>
      <th scope="col">IPR</th>
	  <th scope="col">EPPP</th>
	  <th scope="col">GPHE</th>
      <th scope="col">GUE</th>
      <th scope="col">MS</th>
	  <th scope="col">GPHD</th>
	  <th scope="col">RP</th>
      <th scope="col">WD</th>
      <th scope="col">ESCS</th>
	  <th scope="col">PCS</th>
	  <th scope="col">PREMP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Score</th>
      <td><?php echo $ss; ?></td>
      <td><?php echo $fsr; ?></td>
      <td><?php echo $fqe; ?></td>
	  <td><?php echo $fru; ?></td>
      <td><?php echo $pu; ?></td>
      <td><?php echo $qp; ?></td>
	  <td><?php echo $ipr; ?></td>
      <td><?php echo $fppp; ?></td>
      <td><?php echo $gph; ?></td>
	   <td><?php echo $gue; ?></td>
      <td><?php echo $ms; ?></td>
      <td><?php echo $gphid; ?></td>
	  <td><?php echo $rd; ?></td>
      <td><?php echo $wd; ?></td>
      <td><?php echo $ecs; ?></td>
	  <td><?php echo $pcs; ?></td>
      <td><?php echo $pr; ?></td>
    </tr>
    <tr>
      <th scope="row">Total</th>

      <td>20</td>
      <td>30</td>
	  <td>20</td>
      <td>30</td>
      <td>35</td>
	  <td>40</td>
      <td>15</td>
      <td>10</td>
	   <td>40</td>
      <td>15</td>
      <td>25</td>
	  <td>20</td>
      <td>30</td>
      <td>30</td>
	  <td>20</td>
      <td>20</td>
	        <td>100</td>
    </tr>
  </tbody>
</table>
<div class="container">
  <div class="row">
    <div class="col text-center">
      <a href="suggest.php" class="btn btn-default">Need Sugestions</a>
    </div>
  </div>
</div>
</div>
</div>

</body>