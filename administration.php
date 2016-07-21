

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

<body class="grey lighten-5">

  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

	  <!--
<nav class="teal" role="navigation">
  <div id="nav" name="nav" class="nav-wrapper">
    <a href="#!" class="brand-logo">ABC</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="perm_identity"><i class="material-icons left">perm_identity</i>php echo $login_session </a></li>
	  <li><a class="settings"><i class="material-icons left">settings</i>Settings</a></li>
	  <li><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
  </div> 
</nav>
-->

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
	 <li><a class="perm_identity"><i class="material-icons left">perm_identity</i>php $login_session</a></li>
		-->
		<!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true">Search By<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="newreg123.php">Student Registration</a></li>
	 <li  class="bold active"><a href="administration.php">Home</a></li>
	  <li class="bold"><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
	
  </div> <!-- navbar -->
</nav>




<main><div class="section" id="index-banner">
 <div class="container">
    <div class="row">
      <div class="col s9 m9">
        <h1 class="header center-on-small-only">Jubilant High School</h1>
		 <div class="s12 center">
            <div class="image-container">
              <img src="school1.jpg" style="width:100%;">
            </div>
          </div>
      </div>
	  
	   <!-- Table of Contents -->
    <div class="col hide-on-small-only s3 m3 50">
     <div class="card">
            <div class="card-image">
              <img src="schoolcard1.jpg">
              <span class="card-title">Jubilant High</span>
            </div>
            <div class="card-content">
                                        <div class="line-chart-wrapper">
                                            <p class="margin teal-text"> JUBILANT HIGH</p>
                                              <a><i class="material-icons">place</i>Bhalatole,Baglung</a>
											  <p><a><i class="material-icons">phone</i>+977-9867637898</a></p>
                                        </div>
			  
            </div>
			
          </div>
    </div>
    </div>
</div>	
	
  
  
  <div class="container">
  <div class="row">
       <div class="col s12 m9 90">
      <!--  Material Design -->
      <div id="materialdesign" class="section scrollspy">
        <h2 class="header">Administration Section</h2>
        <p class="caption">kdfia kdfja jiafj kafdif af akfjakfjiefj afkafjiajfa fljfifh a fakfjaij ef afiakf afljafjaf alf aifja lfj aifj afjfaljfajf alf alfjalfja
		akfjalfj afjlaf aljf aifj lakfjaif alifjalf jalifja fa;l falifjaklfjaif akjfalif aljfalijf af hlaijf aslhgla faljgvajfal val vlajg alijag 
		ajflja falfjalf aijf aljf alijf la fjf fjlajf a;l faifjalf aslfjla faljf lajfla fi.</p>
        <div class="video-container">
          <iframe width="853" height="480" src="video.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
	</div>
  </div>
</div>
</div>

</div>



</main>


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
	
	

        <footer class="page-footer teal">
         
          <div class="footer-copyright">
            <div class="container">
            © 2016 All Rights Reserved
            <a class="grey-text text-lighten-4 right" href="#!">Like us on facebook</a>
            </div>
          </div>
        </footer>

</body>

</html>
