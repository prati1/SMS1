<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($std_id,$Standard_name,$English,$Nepali,$Social,$Maths,$Computer, $ENVE,$Science,$error)
 {
 ?>
 <html>
 <head>
 <title>Edit Marks</title>
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
<p>STUDENT MARKS INFORMATION</p>
  <strong>Registration Number: *</strong> <input type="text" name="studentid" value="<?php echo $std_id; ?>" /><br/>
  <strong>Standard_name: *</strong> <input type="text" name="standard_name" value="<?php echo $Standard_name; ?>" /><br/>
   <strong>English: </strong> <input type="date" name="English" value="<?php echo $English; ?>" /><br/>
    <strong>Nepali: *</strong> <input type="date" name="Nepali" value="<?php echo $Nepali; ?>" /><br/>
	 <strong>Social: </strong> <input type="text" name="Social" value="<?php echo $Social; ?>" /><br/>
	  <strong>Maths: </strong> <input type="text" name="Maths" value="<?php echo $Maths; ?>" /><br/>
	<strong>Computer: *</strong> <input type="text" name="Computer" value="<?php echo $Computer; ?>" /><br/>
	  <strong>ENVE: </strong> <input type="text" name="ENVE" value="<?php echo $ENVE; ?>" /><br/>
	 <strong>Science: *</strong> <input type="text" name="Science" value="<?php echo $Science; ?>" /><br/>
	
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

	$Standard_name = $_POST['standard_name'];
	$English = $_POST['English'];
	$Nepali = $_POST['Nepali'];
	$Maths = $_POST['Maths'];
	$Science = $_POST['Science'];
	$Social = $_POST['Social'];
	$Computer = $_POST['Computer'];
	$ENVE = $_POST['ENVE'];
	
 $studentid = $_GET['student_id'];


 $Standard_name = mysql_real_escape_string($Standard_name);
 $English = mysql_real_escape_string($English);
 $Nepali = mysql_real_escape_string($Nepali);
 $Maths = mysql_real_escape_string($Maths);
 $Science = mysql_real_escape_string($Science);
 $Social = mysql_real_escape_string($Social);
 	$Computer = mysql_real_escape_string($Computer);
 $ENVE = mysql_real_escape_string($ENVE);
 
 // check that firstname/lastname fields are both filled in
 if ($standard_name == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($std_id,$Standard_name,$English,$Nepali,$Social,$Maths,$Computer, $ENVE,$Science,$error);
 }
 else
 {
 // save the data to the database
  mysql_query("UPDATE sms.marks3 SET student_id='$studentid',standard_name='$Standard_name', English='$English', Nepali='$Nepali' Maths='$Maths', Science='$Science', Social='$Social', Computer='$Computer', ENVE='$ENVE' WHERE student_id='$studentid'") 
 or die(mysql_error());
 // mysql_query("UPDATE sms.standard set student_id='$studentid',standard_name='$standard_name'") or die(mysql_error());
 // once saved, redirect back to the view page
 header("Location: exam.php"); 

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
 $result = mysql_query("SELECT * FROM sms.marks3  s WHERE s.student_id=$std_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
  

	$Standard_name = $row['standard_name'];
	$English = $row['English'];
	$Nepali = $row['Nepali'];
	$Maths = $row['Maths'];
	$Science = $row['Science'];
	$Social = $row['Social'];
	$Computer = $row['Computer'];
	$ENVE = $row['ENVE'];
 // show form
 renderForm($std_id,$Standard_name,$English,$Nepali,$Social,$Maths,$Computer, $ENVE,$Science,'');
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
