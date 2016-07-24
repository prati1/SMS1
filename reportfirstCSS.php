
<html>
<head>
	<title>STUDENT DETAIL</title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
	  .container{
		width: 90%;
	}
</style>	  
		  <script type="text/javascript">
	  function myFunction(){window.print();}
		  </script>
<style type="text/css">
  .navbar-nav {
    width: 100%;
    text-align: center;
    > li {
      float: none;
      display: inline-block;
    }
  } 
nav ul li a{
  color: black;
}    
</style>
</head>
<body align="centre">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
 <div class="container">

<div class="card-panel blue lighten-5">


 <!-- <nav>
    <div class="nav-wrapper fixed">
      <a href="#!" class="brand-logo">JUBILANT HIGH</a>
      <ul class="right hide-on-med-and-down">
        <li>HIGH SCHOOL</a></li>
       
      </ul>
    </div>
  </nav>
-->

	 <nav class="teal" role="navigation">
	
  <div id="nav" name="nav" class="nav-wrapper fixed">
    <a href="#!" class="brand-logo">LOGO</a>

<h2 class="center hide-on-med-and-down">NAME OF THE SCHOOL</h2>
	<!--<h1>REPORT CARD</h1>
-->
    
	  <!--
	 <li><a class="perm_identity"><i class="material-icons left">perm_identity</i>php $login_session</a></li>


	
  </div> <!-- navbar -->
</nav>



<?php

/*
	REPORT CARD OF A PARTICULAR STUDENT
*/

	 include('config.php');
	 session_start();
	 
	 //$id=$_GET['student_id'];
	 
	// get results from database
	$result = mysql_query("SELECT s.student_id,CONCAT(first_name, ' ',middle_name,' ', last_name) As Name, s.student_roll,m1.standard_name, English, Nepali, Maths, Science, Social, ENVE, Computer
	from sms.marks1 m1, sms.student s  where m1.student_id=12343 and s.student_id=m1.student_id") 
		or die(mysql_error()); 
	$percent=mysql_query("SELECT *, ((English + Nepali + Maths + Science + Social + COALESCE(Computer,0) + COALESCE(ENVE,0))/
	(7 - COALESCE(Computer - Computer,1) - COALESCE(ENVE - ENVE,1)))
	as percent from sms.marks1 where student_id=12343") or die(mysql_error());
	
		$total=mysql_query("SELECT *, (English + Nepali + Maths + Science + Social + COALESCE(Computer,0) + COALESCE(ENVE,0))
	as tot_marks from sms.marks1 where student_id=12343") or die(mysql_error());


		
	// display data in table
	echo "<p><b><h2><center>REPORT CARD</center></h2></b>";
	
	echo "<p><b><center><h4>FIRST TERMINAL EXAMINATION</h4></center></b>";

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
	echo "<table border='3' cellpadding='10' >";
	echo "<thead><tr><th>Subject</th><th>Pass Marks</th> <th>Full Marks</th> <th>Marks Obtained</th></tr></thead>";		
	

	echo"<thead>";
	echo "<tr>";
	echo '<th>English</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['English'] . '</td>';
	echo "</tr>";
	echo"</thead>";

	echo"<thead>";
		echo "<tr>";
	echo '<th>Nepali</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Nepali'] . '</td>';
	echo "</tr>";
	echo"</thead>";

	echo"<thead>";
	echo "<tr>";
	echo '<th>Science</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Science'] . '</td>';
	echo "</tr>";
	echo"</thead>";

	echo"<thead>";
	echo "<tr>";
	echo '<th>Mathematics</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Maths'] . '</td>';
	echo "</tr>";
	echo"</thead>";
		
	echo"<thead>";
	echo "<tr>";
	echo '<th>Social Studies</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Social'] . '</td>';
	echo "</tr>";
	echo"</thead>";	

	echo"<thead>";
	if($row['ENVE']!=NULL){
	echo "<tr>";
	echo '<th>Environment</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['ENVE'] . '</td>';
	echo "</tr>";
	}
	echo"</thead>";
		
	echo"<thead>";
	if($row['Computer']!=NULL){
		echo "<tr>";
	echo '<th>Computer Science</th>';
	echo '<td>' . $pass . '</td>';
	echo '<td>' . $full . '</td>';
	echo '<td>' . $row['Computer'] . '</td>';
	echo "</tr>";
		}
	echo"</thead>";	
		
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
<div id="printableArea">
   
<button class="btn waves-effect waves-light" type="button" onclick="myFunction()" name="action">PRINT
   <!-- <i class="material-icons right">send</i>-->
  </button>    
    <!--<input type="button" onclick="myFunction()" value="PRINT" />
	-->
</div>
</div>
</div>
</body>
</html>
