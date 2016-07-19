<?php
   include('session.php');
  
?>

<html>
<head> 
	  
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
	   
	   .container{
		   width:85%;
	   }
	   
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
  <div id="nav" name="nav" class="nav-wrapper fixed">
    <a href="#!" class="brand-logo">ABC</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="perm_identity"><i class="material-icons left">perm_identity</i><?php echo $login_session; ?> </a></li>
	  <li><a class="settings"><i class="material-icons left">settings</i>Settings</a></li>
	  <li><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
  </div> <!-- navbar -->
</nav>



</body>

</html>
