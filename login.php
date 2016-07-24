<?php
   include("config.php");
   session_start();
   

   


   
   $error = NULL;
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from login
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  
	    if (isset($_POST['remember-me']) && $_POST['remember-me'] == 'on') {
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("username", $myusername);
    setcookie("password", $mypassword);  /* expire in 1 hour */
  } else {
    /**
     * Following code will unset the cookie
     * it set cookie 1 sec back to current Unix time
     * so that it will invalid
     * */
    //setcookie("username", $username, time()-1);
    //setcookie("password", $password, time()-1);
  }

 
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $start=1;
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $role=$row['role'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
	        if($count==1) {
		//session_register("myusername");
        // $_SESSION['CurrentUser'] = $myusername;
		 $_SESSION['CurrentUser'] = $role;
		 $_POST['role'] = $role;
         echo $_SESSION["CurrentUser"];
         //header('Location:welcome.php');
		 
		 if($role=='administrator')
         header("location: administration.php");
         	
			elseif($role=='examiner')
				header("location: exam.php");
				
				elseif($role=='account')
					header("location: account.php");
					
					else
						echo "Please define your role.";
	
        
      }
		/*
      if($count==1) {
//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
		 	
	
         
        header("location: administration.php");
      }
	  
	  */
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   <head>
      <title>ABC school login</title>
	  
	    <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>   
	      
      
  
	  <style type = "text/css">
	  
	#header {

    color:white;
    text-align:center;
  
	 font-family: "	Impact", Times, serif;
	 font-size:50px;
	font-weight: bold;
	}
     #body {
			
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;

			
         }
		 
html { 
  background: url(background2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
         
     #label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
   
		 
		 #bg {
  position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
      </style>
      
   </head>
   
   <body>
 
	<div id="header">

JUBILANT HIGH SCHOOL
	
</div>
<div class="row">

<div class="box">
<div id="login-page" class="row" style = "width:350px " align = "left">
	    <div class="col s12 z-depth-6 card-panel">
	      <form class="login-form" method="post"> 
	        <div class="row">
	          <div class="input-field col s12 center">
			  <!--
	            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
				-->
	            <p class="center login-form-text">Login</p>
	          </div>
	        </div>
	        <div class="row margin">
	          <div class="input-field col s12">
	            <i class="mdi-social-person-outline prefix"></i>
	            <input class="validate" name="username" type="text">
	            <label for="username" class="center-align">Username</label>
	          </div>
	        </div>
	        <div class="row margin">
	          <div class="input-field col s12">
	            <i class="mdi-action-lock-outline prefix"></i>
	            <input name="password" type="password">
	            <label for="password">Password</label>
	          </div>
	        </div>
	        
 <div class="row">

<!--
               <div class="input-field col s12">
                     <input id="admin" type="radio" name="loginas" value="admin" checked>
                     <label for="admin">Administrator</label>
                  <p>
                     <input id="exam" type="radio" name="loginas" value="exam" checked>
                     <label for="exam">Examiner</label>
                  </p>
                  <p>
                     <input id="account" type="radio" name="loginas" value="account" checked>                  
                     <label for="account">Account</label>
	-->
			        
	          <div class="input-field col s12 m12 l12  login-text">
	              <input type="checkbox" id="remember-me" />
	              <label for="remember-me">Remember me</label>
	          </div>
			  </div>
	        
		<div class="row">
	<input type = "submit" class="btn waves-effect waves-light col s12" value = " Login "/>
		
	              
		</div>
			
	      </form>
		       <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?> </div>
					
            </div>
			</div>
	        
	    </div>
	 
	  
	   <div class="input-field col s6 m6 l6">
             <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
	          </div>


</div>
		  
   </body>
</html>
