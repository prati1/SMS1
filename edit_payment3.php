<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$paid,$status,$error)
 {
 ?>
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
<p>STUDENT ACCOUNT INFORMATION</p>
  <strong>Registration Number: *</strong> <input type="text" name="student_id" value="<?php echo $std_id; ?>" /><br/>
 <strong>paid:</strong> <input type="text" name="paid" value="<?php echo $paid; ?>" /><br/>
 <strong>status: *</strong> <input type="text" name="status" value="<?php echo $status; ?>" /><br/>
  
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('config.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 //if (is_numeric($_POST['student_id']))
 //{
 // get form data, making sure it is valid
 $studentid = $_POST['studentid'];
	$paid = $_POST['paid'];
	$status = $_POST['status'];
	
 $studentid = $_GET['student_id'];
 $paid = mysql_real_escape_string($paid);
 $status = mysql_real_escape_string($status);

 
 // check that firstname/lastname fields are both filled in
 if ($status == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($std_id,$paid,$status,$error);
 }
 else
 {
  mysql_query("UPDATE sms.student SET student_id='$studentid', paid='$paid', status=$status' WHERE student_id='$studentid'") 
 or die(mysql_error());
 
 
 // mysql_query("UPDATE sms.standard set student_id='$studentid',standard_name='$standard_name'") or die(mysql_error());
 // once saved, redirect back to the view page
 header("Location: account.php"); 

 }
// }
 //else
 //{
 // if the 'id' isn't valid, display an error
 //echo 'Error!';
 //}
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checking that it is numeric/larger than 0)
 if (isset($_GET['student_id']) && $_GET['student_id'] > 0)
 {
 // query db
 $std_id = $_GET['student_id'];
 $result = mysql_query("SELECT *FROM sms.payment3_status a WHERE a.student_id=$std_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
	$paid = $_POST['paid'];
	$status = $_POST['status'];
 
 // show form
 renderForm($std_id,$paid,$status,'');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>
