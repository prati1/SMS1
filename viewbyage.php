
<html>
<head>
	<title>WELCOME TO ADMINISTRATION</title>
	
	
	
	
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>   
	      
		  	  <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Delete the student record?");
               if( retVal == true ){
                 //document.write ("User wants to continue!");
				  //echo<a href="deletestudent.php?student_id=' . $row['student_id'] . '"></a>;
				 $.get("deletestudent.php")
				  //var x = new XMLHttpRequest();
   // x.open("GET","deletestudent.php",true);
    //x.send();
                  return true;
               }
               else{
                  document.write ("User does not want to continue!");
                  return false;
               }
            }
         //-->
      </script>
	  <style>
	  div{
    border: 1px solid #000;
    width: 200px;
    height: 200px;
}

.row
{
  border:5px solid #42a5f5;  
   margin-top:10px; 
}

div h1{
    text-align: center;
    margin-top: -10px;
    height: 20px;
    line-height: 20px;
    font-size: 15px;
}

div h1 span{
    background-color: white;
}
	 </style>

</head>
<body>

<?php
/* 
	VIEWBYAGE.PHP
*/
	 include('config.php');
	 session_start();
	 
	$age = $_POST['Age'];
	
	 //$age=$_GET['age'];
	// get results from database
	$result = mysql_query("SELECT * FROM sms.administration where age=$age group by student_roll") 
		or die(mysql_error());  
	
	// display data in table
	echo "<p><b>View All</b>";
	
	echo "<table border='5' class='highlight'>";
	echo "<tr> <th>ID</th><th>Roll No</th> <th>Name</th> <th>Gender</th><th>Address</th><th>Guardian Name</th><th>Phone No</th><th>Email id </th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
			$id=$row['student_id'];
		// echo out the contents of each row into a table
		echo "<tr>";
				//echo '<td>'<a href="adminfullview.php?student_id=' . $row['student_id'] . '"> . $row['student_id'] . </a>'</td>';
		echo '<td><a target="main && searchasadmin &&clan && egg" href="adminfullview.php?student_id=' . $row['student_id'] . '"> $id </a></td>';
		//echo '<td>' . $row['student_id'] . '</td>';
		echo '<td>' . $row['student_roll'] . '</td>';
		echo '<td>' . $row['Name'] . '</td>';
		echo '<td>' . $row['gender'] . '</td>';
		echo '<td>' . $row['temp_address'] . '</td>';
		//echo '<td>' . $row['date_of_admission'] . '</td>';
		//echo '<td>' . $row['DOBad'] . '</td>';
		//echo '<td>' . $row['age'] . '</td>';
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

</body>
</html>	
	

