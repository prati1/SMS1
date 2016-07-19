<?php
   include("config.php");
   session_start();
   $error = NULL;
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from login
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

 
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $start=1;
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
		 	
		/*
		if(isset($_GET['logout']))
		{
			session_unset();
			session_destroy();
		}
         */
        header("location: try4.php");
      }
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
         
     #label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
      #.box {
        
			
         }
      </style>
      
   </head>
   
   <body background="loginback.jpg">
	<div id="header">

WELCOME TO ABC FAMILY
	
</div>

<!--
	
	<h3 style="color:blue;"><p align=" right"></p></h3><br><br><br><br><br><br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" placeholder = "userName" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" placeholder = "Password" class = "box" /><br/><br />
				  <label>Login As : </label><select><option value="null">------</option>
  <option value="admin">Administrator</option>
  <option value="exam">Examiner</option>
  <option value="account">Accountant</option></select><br><br><input type = "submit" value = " Log In "/><br />
                  
               </form>
               
             
					
            </div>
				
         </div>
			
      </div><br><br><br>
	<h6><p align= "center";text-font-family="arial">made by<br>adfsdgfg<br>iehrhehr<br></p></h6>
	
-->

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
	<div>

	Login As
	
</div>
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
	
			<div class="row">         
	          <div class="input-field col s12 m12 l12  login-text">
	              <input type="checkbox" id="remember-me" />
	              <label for="remember-me">Remember me</label>
	          </div>
	        </div>
		
	<input type = "submit" class="btn waves-effect waves-light col s12" value = " Login "/>
		
	              
		</div>
			
	      </form>
		       <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?> </div>
					
            </div>
			</div>
	         
	    </div>
	  </div>
	  
	   <div class="input-field col s6 m6 l6">
             <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
	          </div>


</div>			  
   </body>
</html>
