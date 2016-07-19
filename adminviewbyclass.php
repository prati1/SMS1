

<html>
<head> 
	  
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>

  
	  .container .row {
   margin-left: 10.75rem;
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

<nav class="teal" role="navigation">
  <div id="nav" name="nav" class="nav-wrapper">
    <a href="#!" class="brand-logo">ABC</a>
    <ul class="right hide-on-med-and-down">
      <!--
	  <li><a class="perm_identity"><i class="material-icons left">perm_identity</i><?php echo $login_session; ?> </a></li>
	  -->
	  <li><a class="settings"><i class="material-icons left">settings</i>Settings</a></li>
	  <li><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
  </div> <!-- navbar -->
</nav>



 <header>
         <!-- <div class="nav-wrapper"><a class="page-title">SideNav dfjdkf fadifd kdfaifj jkdfji</a></div> -->
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" class="teal" class="brand-logo">ABC</a></li>
        <li class="bold"><a class="waves-effect waves-teal">Search BY:</a></li>
		<li class="no-padding">
		  <ul class="collapsible collapsible-accordion">
            <li class="bold active"><a class="collapsible-header  waves-effect waves-teal">Class</a>
              <div class="collapsible-body">
                 <ul>
                                 <li><a href="viewbyclass.php?standard_name='1'">One</a></li>
								<li><a href="adminviewbyclass.php?standard_name='2'">Two</a></li>
								<li><a href="viewbyclass.php?standard_name='3'">Three</a></li>
								<li><a href="viewbyclass.php?standard_name='4'">Four</a></li>
								<li><a href="viewbyclass.php?standard_name='5'">Five</a></li>
								<li><a href="viewbyclass.php?standard_name='6'">Six</a></li>
								<li><a href="viewbyclass.php?standard_name='7'">Seven</a></li>
								<li><a href="viewbyclass.php?standard_name='8'">Eight</a></li>
								<li><a href="viewbyclass.php?standard_name='9'">Nine</a></li>
								<li><a href="viewbyclass.php?standard_name='10'">Ten</a></li>
                                </ul>
              </div>
            </li>
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Age</a>
              <div class="collapsible-body">
                 <ul>
                                 <li><a href="viewbyage.php?standard_name='5'">Five</a></li>
								<li><a href="viewbyage.php?standard_name='6'">Six</a></li>
								<li><a href="adminviewbyage.php?Age='7'">Seven</a></li>
								<li><a href="viewbyage.php?standard_name='8'">Eight</a></li>
								<li><a href="viewbyage.php?standard_name='9'">Nine</a></li>
								<li><a href="viewbyage.php?standard_name='10'">Ten</a></li>
								<li><a href="viewbyage.php?standard_name='11'">Eleven</a></li>
								<li><a href="viewbyage.php?standard_name='12'">Twelve</a></li>
								<li><a href="viewbyage.php?standard_name='13'">Thirteen</a></li>
								<li><a href="viewbyage.php?standard_name='21'">Twenty One</a></li>
                                </ul>
              </div>
            </li>
          
           
          </ul>
        </li>
        
      </ul>
	  
</header>

<main><div class="section" id="index-banner">
<!--
 <div class="container">
    <div class="row">
      <div class="col s12 m9">
        <h1 class="header center-on-small-only">Jubilant High School</h1>
      </div>
	  

    </div>
</div>
-->	

 <div class="container">
  <div class="row">
       <div class="col s12 m9 90">
      <!--  Material Design -->
      <div id="materialdesign" class="section scrollspy">
        <h2 class="header">Administration Section</h2>
       <?php
/* 
	VIEWBYCLASS.PHP
	Displays all data from 'administration' table
*/
	 include('config.php');

	 
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
</div>
</div>
	
  
  



</main>

</body>

</html>
