<?php 
session_start();
$no = "#1abc9c" ;
$need = "#e74c3c";
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
	<style type="text/css">
  table { border:solid 1px #000; }
  td    { border:style 3px red; }
</style>
    <style >
    body{
    background: #ecf0f1;
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

<div id="container">
<div id="row">
<h3>
<b>The Suggestion for your better performance are listed below:</b>
</h3>
</div>
<table   border="5" class="table ">
  <tbody>
    <tr>
      <td bgcolor=<?php if ($_SESSION["ss"]<10){ echo $need; ;} else { echo $no;} ?>><?php if ($_SESSION["ss"]<10){
	echo nl2br(" Your SS score is low.So concentrate on the following factors.\nTotal sanctioned approved intake in the institution considering all UG and PG
programs of the institution.\n Total number of students enrolled in the institution considering all UG and PG
Programs of the institution.\n Total number of students enrolled for the doctoral program till previous academic year.");
	}
	else
	{
	echo nl2br("Your SS score is good.Keep Going.\n");	
	}?>
	</td>
      <td bgcolor=<?php if ($_SESSION["fsr"]<15) { echo $need;} else { echo $no;} ?>><?php if ($_SESSION["fsr"]<15){
	echo nl2br("Your FSR score is low.\n Please incerease faculty count as it is based on student to faculty ratio.\n Maintain it on 1:15");
	}
	else
	{
	echo nl2br("Your FSR score is good.Keep Going.\n");	
	}?></td>
    </tr>
    <tr>
      <td bgcolor=<?php if ($_SESSION["fqe"]<10) { echo $need; } else { echo $no;} ?>>
	  <?php if ($_SESSION["fqe"]<10){
		echo nl2br("Your FQE score is low.\nPlease increase the percentage of Faculty with Ph.D. (or equivalent qualification) with respect to the total no. of faculty required or actual faculty whichever is higher, in the previous year.\n Also increase count of staff with experience more than 15 years. ");
		}
		else
		{
		echo nl2br("Your FQE score is good.Keep going.\n");	
		} ?></td>
      <td bgcolor=<?php if ($_SESSION["fru"]<15) { echo $need; } else { echo $no;}  ?>><?php if ($_SESSION["fru"]<15){
		echo nl2br("Your FRU score is Low.\n Increase Average Annual Capital Expenditure per student for previous three years pertaining to engineering discipline only and Operational(or Recurring) Expenditure per student for previous three years pertaining to engineering discipline only. ");
		}
		else
		{
		echo nl2br("Your FRU score is good.Keep Going\n");	
		}?></td>
    </tr>
	 <tr>
      <td bgcolor=<?php if ($_SESSION["pu"]<15) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["pu"]<15){
			echo nl2br("Your PU score is low.\nIncrease the count of  weighted number of publications as acertained from suitable third party sources.");
			}
			else
			{
			echo nl2br("Your PU score is good.Keep going.\n");	
			}?></td>
      <td bgcolor=<?php if ($_SESSION["qp"]<20) { echo $need; } else { echo $no;}  ?>><?php if ($_SESSION["qp"]<20){
			echo nl2br("Your QR score is low.\n Increase Total Citation Count over previous three years.\n Also Increase the count of ciations in top25.\n");
			}
			else
			{
			echo nl2br("Your QP score is good.Keep going.\n");	
			}?></td>
    </tr>
	 <tr>
      <td bgcolor=<?php if ($_SESSION["ipr"]<7.7) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["ipr"]<7.7){
echo nl2br("Your IPR score is low.\n Increase the number of patents granted over the previous three years.\n Increase the number of patents published over the previous three years.\n");
}
else
{
echo nl2br("Your IPR score is good.Keep going.\n");	
}?></td>
<td bgcolor=<?php if ($_SESSION["fpp"]<15) { echo $need; } else { echo $no;}  ?>><?php if ($_SESSION["fpp"]<15){
echo nl2br("Your FPPP Score ios low.\n Increase  average annual research funding earnings (amount actually received in rupees) per faculty at institute level in previous three years.\n average annual consultancy amount (amount actually received in rupees) per
faculty at institute level in previous three years ");
}
else
{
echo nl2br("Your FPP score is good.\n");	
}?></td>
     
    </tr> <tr>
      
      <td bgcolor=<?php if ($_SESSION["gph"]<20) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["gph"]<20){
echo nl2br("Your GPH score is low.\n Percentage of graduating students (in UG/ PG programs) placed in the previous three years.\n Percentage of graduating students (in UG/ PG programs) placed in the previous three years.\n");
}
else
{
echo nl2br("Your GPH score is good.Keep going.\n");	
} ?></td>
<td bgcolor=<?php if ($_SESSION["gue"]<7) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["gue"]<7){
echo nl2br("Your GUE score is low.\n the percentage of Students (as a fraction of the approved intake), averaged over previous three years, passing the respective university examinations in stipulated time for the program in which enrolled.");
}
else
{
echo nl2br("Your GUE score is good.Keep going.\n");	
}?></td>
    </tr> <tr> 
      <td bgcolor=<?php if ($_SESSION["gms"]<15) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["gms"]<15){
echo nl2br("Your GMS score is Low.\n Increase the median salary of graduates (in UG/PG program) in the previous three years
from an institution.");
}
else
{
echo nl2br("Your GMS score is good.Keep going.\n");	
}?></td>
<td bgcolor=<?php if ($_SESSION["gphid"]<10) { echo $need; } else { echo $no;} ?>> <?php if ($_SESSION["gphid"]<10){
echo nl2br("Your GPHID is low.\n Average number of Ph.D students graduated (awarded Ph.D) over the previous three years.");
}
else
{
echo nl2br("Your GPID score is good.Keep going.\n");	
} ?></td>
    </tr> <tr>
      
      <td bgcolor=<?php if ($_SESSION["rd"]<15) { echo $need; } else { echo $no;}  ?>><?php if ($_SESSION["rd"]<15){
echo nl2br("Your RD score is low.\n Increase the fraction of total students enrolled from other states.\n Increase fraction of students enrolled from other countries");
}
else
{
echo nl2br("Your RD score is good.Keep going.\n");	
}?></td>
 <td bgcolor=<?php if ($_SESSION["wd"]<15) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["wd"]<15){
echo nl2br("Your WD score is low.\n Increase the total women students.\n Increase the women faculty count . ");
}
else
{
echo nl2br("Your WD score is good.Keep going\n");	
} ?></td>
    </tr> <tr>
     
      <td bgcolor=<?php if ($_SESSION["ecs"]<10) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["ecs"]<10){
echo nl2br("You ECS score is low. \n Increase the percentage of UG students being provided financial aid by the institution, government and private bodies to pursue their degree programs.");
}
else
{
echo nl2br("Your ECS score is good.Keep going.\n");	
}?></td>
 <td bgcolor=<?php if ($_SESSION["pcs"]<10) { echo $need; } else { echo $no;}?>><?php if ($_SESSION["pcs"]<10){
echo nl2br("Your PCS score is low.\n Increase the  facilities for physically challenged
students");
}
else
{
echo nl2br("Your PCS score is good.Keep going.\n");	
} ?></td>
    </tr>
	 <tr>
     <td bgcolor=<?php if ($_SESSION["score"]<50) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["score"]<50){
echo nl2br("This score is based on the Inpection of the goverenment officials.");
}
else
{
echo nl2br("This score is based on the Inpection of the goverenment officials.");	
}?>
      <td bgcolor=<?php if ($_SESSION["score"]<50) { echo $need; } else { echo $no;} ?>><?php if ($_SESSION["score"]<50){
echo nl2br("Your overall score is low.So please concentrate on all the above .");
}
else
{
echo nl2br("Your Total score is good.\n");	
}?></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</body>