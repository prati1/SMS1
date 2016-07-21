

<html>
<head> 
	  
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
	  	  .dropdown-content{
    overflow: visible !important;
}

  	 .container{
		 width:100%;
	 }
	   
	  .container .row {
   margin-left: -6.75rem;
  margin-right: -6.75rem;
}

.card{
	display: inline-block;
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 230px;
	}
	  </style>
	 
</head>

<body>
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

 <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="dropdown-button2" href="#!" data-activates="dropdown2" data-hover="hover" data-alignment="left">Class</a></li>
  <li class="divider"></li>
  <li><a href="#!">Age</a></li>
  <li class="divider"></li>
  <li><a href="#!">Advanced Options</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
  <li><a href="adminviewbyclass.php?standard_name='1'">one</a></li>
  <li class="divider"></li>
  <li><a href="adminviewbyclass.php?standard_name='2'">two</a></li>
  <li class="divider"></li>
  <li><a href="adminviewbyclass.php?standard_name='3'">three</a></li>
</ul>
	  
	  <nav class="teal" role="navigation">
  <div id="nav" name="nav" class="nav-wrapper fixed">
    <a href="#!" class="brand-logo">ABC</a>
    <ul class="right hide-on-med-and-down">
      <!--
	  
	 <li><a class="perm_identity"><i class="material-icons left">perm_identity</i> echo php session</a></li>
		-->
		<!-- Dropdown Trigger -->
      <li class="bold active"><a class="dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true">Search By<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="newreg123.php">Student Registration</a></li>
	 <li  class="bold"><a href="administration.php">Home</a></li>
	  <li class="bold"><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
  </div> <!-- navbar -->
</nav>


<main><div class="section" id="index-banner">



 
       <div class="col s12 m9 70">
      <!--  Material Design -->
      <div id="materialdesign" class="section scrollspy">
        <h2 class="header">Student Information</h2>
       <?php
/* 
	VIEWBYCLASS.PHP
	Displays all data from 'administration' table
*/
	 

	 
	 $standard=$_GET['standard_name'];
	// get results from database
	$result = mysql_query("SELECT * FROM sms.administration where standard_name=$standard group by student_roll") 
		or die(mysql_error());  
		
		//We have not yet used standard_id in table administration. Once the standard table is filled, this attribute must be applied in administration
	
	// display data in table
	echo "<p><b>View All</b>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th><th>Roll No</th> <th>Name</th> <th>Gender</th><th>Address</th><th>Guardian Name</th><th>Phone No</th><th>Email id </th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
				//echo '<td>'<a href="adminfullview.php?student_id=' . $row['student_id'] . '"> . $row['student_id'] . </a>'</td>';
		echo '<td>' . $row['student_id'] . '</td>';
		echo '<td>' . $row['student_roll'] . '</td>';
		echo '<td>' . $row['Name'] . '</td>';
		echo '<td>' . $row['gender'] . '</td>';
		echo '<td>' . $row['temp_address'] . '</td>';
		echo '<td>' . $row['gName'] . '</td>';
		echo '<td>' . $row['phone_no'] . '</td>';
		echo '<td>' . $row['email_id'] . '</td>';
		echo '<td><a href="edit.php?student_id=' . $row['student_id'] . '">Edit</a></td>';
		echo '<td><a href="deletestudent.php?student_id=' . $row['student_id'] . '">Delete</a></td>';
		//echo '<td><a href="#?student_id=' . $row['student_id'] . '" onclick="getConfirmation()">Delete</button></a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
	  
	  
?>
<p><a href="newreg.php">Add a new record</a></p>
       
	</div>
</div>


	
  
  
<script>
	$('.dropdown-button2').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: ($('.dropdown-content').width()*0.88), // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
	</script>


</main>

</body>

</html>
