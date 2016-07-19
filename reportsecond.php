<html>
<head>
	<title>STUDENT DETAIL</title>
	  <script type="text/javascript">
	  function myFunction(){window.print();}
		  </script>
</head>
<body>


<div id="printableArea">
   
    </div>
    <input type="button" onclick="myFunction()" value="PRINT" />
<?php

/*
	REPORT CARD OF A PARTICULAR STUDENT
*/

	 include('config.php');
	 session_start();
	 
	 //$id=$_GET['student_id'];
	 
	// get results from database
	$result = mysql_query("SELECT s.student_id,CONCAT(first_name, ' ',middle_name,' ', last_name) As Name, s.student_roll,m2.standard_name, English, Nepali, Maths, Science, Social, ENVE, Computer
	from sms.marks2 m2, sms.student s  where m2.student_id=12343 and s.student_id=m2.student_id") 
		or die(mysql_error());  
		
		$percent=mysql_query("SELECT *, ((English + Nepali + Maths + Science + Social + COALESCE(Computer,0) + COALESCE(ENVE,0))/
	(7 - COALESCE(Computer - Computer,1) - COALESCE(ENVE - ENVE,1)))
	as percent from sms.marks1 where student_id=12343") or die(mysql_error());
	
		$total=mysql_query("SELECT *, (English + Nepali + Maths + Science + Social + COALESCE(Computer,0) + COALESCE(ENVE,0))
	as tot_marks from sms.marks1 where student_id=12343") or die(mysql_error());

	/*
		$avg = mysql_query("SELECT avg(first_term) as avg_first, avg(second_term) as avg_second, avg(third_term) as avg_third from sms.marks where student_id=12213 ") 
		or die(mysql_error());  
	$row1=mysql_fetch_array($avg);
	*/
		
	// display data in table
	echo "<p><b>Report Card:</b>";
		echo "<p><b>SECOND TERMINAL EXAMINATION</b>";
	$tot = mysql_fetch_array( $total );
	$row = mysql_fetch_array( $result );
	echo "<p><b>Reg NO:</b>";	
			echo'<b>'. $row['student_id'] . '</b>';
			echo "<p><b>Name:</b>";
		echo'<b>'. $row['Name'] . '</b>';
	echo "<p><b>Standard:</b>";
		echo'<b>'. $row['standard_name'] . '</b>';
		echo "<p><b>Roll No:</b>";
		echo'<b>'. $row['student_roll'] . '</b>';
		

		$pass=40;
		$full=100;
	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>Subject</th><th>Pass Marks</th> <th>Full Marks</th> <th>Marks Obtained</th></tr>";		
	

	echo "<tr>";
	echo '<th>English</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['English'] . '</td>';
	echo "</tr>";
	
	
		echo "<tr>";
	echo '<th>Nepali</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Nepali'] . '</td>';
	echo "</tr>";
	
		echo "<tr>";
	echo '<th>Science</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Science'] . '</td>';
	echo "</tr>";
	
		echo "<tr>";
	echo '<th>Mathematics</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Maths'] . '</td>';
	echo "</tr>";
 
		echo "<tr>";
	echo '<th>Social Studies</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Social'] . '</td>';
	echo "</tr>";
	
	if($row['ENVE']!=NULL){
	echo "<tr>";
	echo '<th>Environment</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['ENVE'] . '</td>';
	echo "</tr>";
	}
	 
		if($row['Computer']!=NULL){
		echo "<tr>";
	echo '<th>Computer Science</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Computer'] . '</td>';
	echo "</tr>";
		}
	
		echo "<tr>";
	echo '<th>Total</th>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>' . $tot['tot_marks'] . '</td>';
	echo "</tr>";
	
	echo "</table>"; 
	
		$row1 = mysql_fetch_array( $percent );
	echo "<p><b>Percentage:</b>";	
			echo'<b>'. $row1['percent'] . '</b>';
?>

</body>
</html>