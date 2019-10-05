<html>
<head>
<title>Entrance Examination For Admission 2017 at a Single click</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="div1"><a href="front.html" target='_self' class="font1">
Entrance Examination For Admission 2017 at a Single click</a>
</div>
<div class="div2">All National Level & State Level Entrance Examination 2017</div>


<table class='table1' align=center><tr><td>Select Your interested Area:</td></tr></table>

<br><br>
<form action="" method="POST"><center>
<select type='dropdown' name='id' class="divs">
<option value="0">-------------------SELECT FIELD------------------</option>
<option value="1"><button type=submit class="button" name='id'>Homoeopathic Science</button></option>
<option value="2"><button type=submit  value="2" class="button">Ayurvedic science</button></option>
<option value="3"><button type=submit  value="3" class="button">Naturopathy & Yogic Science</button></option>
<option value="4"><button type=submit  value="4" class="button">Physiotherapy</button></option>
<option value="5"><button type=submit  value="4" class="button">Medical Lab Technology</button></option>
<option value="6"><button type=submit  value="6" class="button">Optometry and Radiology</button></option>
<option value="7"><button type=submit  value="7" class="button">Pharmacy</button></option>
<option value="8"><button type=submit  value="8" class="button">Pharmacy & Nursing</button></option>
<option value="9"><button type=submit  value="9" class="button">Agriculture</button></option>
<option value="10"><button type=submit value="10" class="button">Food & Biotechnology</button></option>
<option value="11"><button type=submit value="11" class="button">Veterinary Science</button></option>
<option value="12"><button type=submit value="12" class="button">Management and Commerce</button></option>
<option value="13"><button type=submit value="13" class="button">Engineering & Technology</button></option>
<option value="14"><button type=submit value="14" class="button">Law</button></option>
<option value="15"><button type=submit value="15" class="button">Journalism</button></option>
<option value="16"><button type=submit value="16" class="button">Designing & Architechture</button></option>
<option value="17"><button type=submit value="17" class="button">Education and Methodology</button></option>
<option value="18"><button type=submit value="18" class="button">Arts and Humanities  </button></option>
<option value="19"><button type=submit value="19" class="button">Polytechnic/Diploma Medical Programmes</button></option>
<option value="20"><button type=submit value="20" class="button">Research Programs</button></option>
</select>
<input type="submit" name="sb" value="select" class="divs1">
</form></center>

<br>

<?php
$host="localhost";
$user="root";
$pass="";
$db="department";

//create connection

$con=new mysqli($host,$user,$pass,$db);
if(isset($_POST['sb']))
	
	{
		if(($_POST['id']==0))
		{
			echo"<center><font size=5%>Please Select Any Field</center>";
		}
		else
		{

$id=$_POST['id'];

//selecting info from department




$sql2="SELECT count( DISTINCT Discipline ) FROM field WHERE Dept_id =$id";
$result2=mysqli_query($con,$sql2);

$row2=mysqli_fetch_array($result2);

echo $row2['0'];
 
 for($i=1;$i<=$row2['0'];$i++)
 {

$sql4=mysqli_query($con,"SELECT count(Discipline) from field WHERE type=$i AND Dept_id=$id");	 
$sql3=mysqli_query($con,"SELECT Discipline from field WHERE type=$i AND Dept_id=$id");

$row4=mysqli_fetch_array($sql4);
echo "<br>".$row4['0'];


$row3=mysqli_fetch_array($sql3);
echo "<br>".$row3['0'];

 }



$sql1="SELECT count(id) from field where Dept_id=$id";
$result1=mysqli_query($con,$sql1);

$row1=mysqli_fetch_array($result1);

$sql="SELECT * from field where Dept_id=$id";
echo $row1['0'];
$z=$row1['0']-1;
echo $z;

$result=$con->query($sql);

	echo "<table border=4 width=80% class='table2'>
	<tr><th>Discipline</th><th>Women's University in India</th><th>Website Link</th><th>Totalno. of University</th></tr>";
	
	//echo "<tr colspan='".$sql4."'><td>'".$sql3."'</td></tr>";
		
	if($result->num_rows>0)
			//output of data
			$a=0;
			$b=0;
			$c=0;
			$d=0;
			while($row=$result->fetch_array())
				{ 
					echo("<tr></tr>");
				/*	if($a==0)
					{
							echo "<td rowspan='".$row1['0']."'>".$row['Discipline']."</td>";
							$a++;
					}
					if($row['0']==2){
					if($b==0)
					{
							echo "<td rowspan='".$row1['0']."'>".$row['Discipline']."</td>";
							$b++;
					}}*/
					echo "<td>".$row['Discipline']."</td>";
					echo "<td>".$row["Women's University in India"]."</td>";
					echo "<td>".$row['Website Link']."</td>";
					
					if($row['0']==1){
					if($c==0)
					{
						
					echo "<td rowspan='".$row1['0']."'>".$row['Total no.of University']."</td>";
					$c++;	
					}}
				if($row['0']==2){
					if($d==0)
					{
							echo "<td rowspan='".$row1['0']."'>".$row['Total no.of University']."</td>";
							$d++;
					}}
				
				}
					
					//echo $row2['0'];
 
 /*for($i=1;$i<=$row2['0'];$i++)
 {

$sql4=mysqli_query($con,"SELECT count(Discipline) from field WHERE type=$i AND Dept_id=$id");	 
$sql3=mysqli_query($con,"SELECT Discipline from field WHERE type=$i AND Dept_id=$id");

$row4=mysqli_fetch_array($sql4);

$row3=mysqli_fetch_array($sql3);

echo "<tr><td rowspan='".$row4['0']."'>".$row3['0']."</td></tr>";
//echo "<br>".$row3['0']; 

 }*/
					
					
					
					
					
					
				
			
			
						//echo "<td rowspan='".$row1['0']."'>".$row['Total no.of University']."</td>";
						
						
						
						
		
	}	
	}
			
$con->close();
?>
</table>





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
