<html>
<head>
<title>Entrance Examination For Admission 2017 at a Single click</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class='body' bgcolor=#E5E4E2>
<div class="div1"><a href="front.html" target='_self' class="font1">
Entrance Examination For Admission 2017 at a Single click</a>
</div>
<div class="div2">All National Level & State Level Entrance Examination 2017</div>

<table class='table1' align=center><tr><td>Frequently Asked Question:</td></tr></table>
<br><br>

<table width="70%" border="0" align=center style="margin-bottom:0px">
<?php 

$s="localhost";
$u='root';
$p="";
$d1="jvwu";
$a=0;
$con=new mysqli($s,$u,$p,$d1);
$i=1;
$pawan = "select * from faq ";
						
$exe = mysqli_query($con, $pawan); 
						
						while($result = mysqli_fetch_array($exe)){
							
?>



<tr style="background:linear-gradient(#FFCBA4,white);font-weight:bold;"><td style="width:10%; border-radius:30%; font-weight:bold;">Question <?php echo $i++;?> </td>

<td style="border-radius:10%;font-weight:bold;"><font size="4" ><?php echo $result[1];?> </font></b>
</td>
</tr>
<tr><td style="width:10%"> </td><td style="background-color:pink;>

<font size="4" ><b><?php echo $result[2];?> </font>
</td>
</tr>
<tr><td style="width:10%"> </td><td>

<font size="4" ><br> </font>
</td>
</tr>
<?php 
}
?>

</table>



<br>


<div class="divb1"><a href="disp2.php" target='_self' class="font2"><button  class="button1">Women Career Guidence</button></a></div>
<div class="divb1"><a href="que2.php" target='_self' class="font2"><button class="button1">Frequently Asked Questions&ndash;Women University Admission</button></a></div>
<div class="divb1"><a href="field2.php" target='_self' class="font2"><button class="button1">Discipline wise Career Guidence<br>For Women(DETAILS)</button></a></div>


<div class='div6'>
This Web Portal is designed to help students get details of all the State and National Level Entrance Examinations  and Career Guidance that <br>will help students take right decision about their higher education.<br><br><hr class="hr">

Promoted By-Indian Women<br>

Surbhi Kansal, Shalini Tiwari and Akanksha Singh<br>

Developed By - Annu Sehrawat
</div>


</body>
</html>
