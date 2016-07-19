<?php

   include('navbar.php');
  
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


	  <!--
<nav class="teal" role="navigation">
  <div id="nav" name="nav" class="nav-wrapper">
    <a href="#!" class="brand-logo">ABC</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="perm_identity"><i class="material-icons left">perm_identity</i><?php echo $login_session; ?> </a></li>
	  <li><a class="settings"><i class="material-icons left">settings</i>Settings</a></li>
	  <li><a href="logout1.php" target="_top">Logout</a></li>
      
    </ul>
  </div> 
</nav>
-->

  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

 <header>
         <!-- <div class="nav-wrapper"><a class="page-title">SideNav dfjdkf fadifd kdfaifj jkdfji</a></div> -->
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" class="teal" class="brand-logo">ABC</a></li>
		 
		<li class="bold"><a class="waves-effect waves-teal" href="newreg123.php">Add a new record</a></li>
		 <li class="bold">Search BY:</li>
      
		
		<li class="no-padding">
	
        </li>
        
      </ul>
	  
</header>

<main><div class="section" id="index-banner">
 <div class="container">
    <div class="row">
      <div class="col s12 m9">
	  
	  	  <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Class</a>
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
	  
        <h1 class="header center-on-small-only">Jubilant High School</h1>
		 <div class="s12 center">
            <div class="image-container">
              <img src="school1.jpg" style="width:100%;">
            </div>
          </div>
      </div>
	  
	   <!-- Table of Contents -->
    <div class="col hide-on-small-only m3 l2">
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



</main>

</body>

</html>
