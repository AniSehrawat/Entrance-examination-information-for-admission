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



<?php
$host="localhost";
$user="root";
$pass="";
$db="department";

//create connection

$con=new mysqli($host,$user,$pass,$db);

$id=$_POST['id'];

	//selecing department name
		$sql="SELECT * from dept where id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
			//output of department name
			while($row=$result->fetch_assoc())
			{
				echo"<br><table class='table1' align=center><tr>";
				echo"<td>".$row['dept_name']."</td>";
				echo"</tr>";
			}

				
//selecting info from department
$sql="SELECT * from info where Dept_id=$id";

$result=$con->query($sql);

	echo "<table align=center class='table2' border=5>
	<tr>
	<th>Exam Name</th>
	<th>Website</th>
	<th>Application Start Date</th>
	<th>Application End Date</th>
	<th>Date Of Exam</th>
	<th>Result Date/Tentative</th>
	<th>Result</th></tr>";
	
		
	if($result->num_rows>0)
		
			//output of data
			while($row=$result->fetch_assoc())
				{ 
					echo("<tr>");
					echo "<td>".$row['Exam Name']."</td>";
					echo "<td>".$row['Website']."</td>";
					echo "<td>".$row['Application Start Date']."</td>";
					echo "<td>".$row['Application End Date']."</td>";
					echo "<td>".$row['Date Of Exam']."</td>";
					echo "<td>".$row['Result Date/Tentative']."</td>";
					echo "<td>".$row['Result']."</td>";
					echo "</tr>";
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
