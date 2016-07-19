

<HTML>

<HEAD><style type =text/css>

#nav {
    line-height:30px;
    background-color:
	;
    
    width:130px;
	
    float:left;
    padding:5px; 
}

#navMenu label{
	box-sizing: border-box;
} 


</style>
</HEAD>

<body bgcolor="#C0C0C0" align="center">




<div id="nav">
<!--
<a href="viewbyclass.php?class=02"target="main" >Two </a><br><br>
<a href="viewbyage.php?Age=21"target="main" >agetwentyone </a><br><br>
-->
<div id ="navMenu">Search by<br><br>
<label for='Age'></label>

<!--
<form action="viewbyage.php" method="post">
-->

<form action="viewbyid.php" target="main" method="post">
<input type = "text"  name="student_id" placeholder = "student ID"  size="13px" />
<input type="submit" name="idval" value="Go" >
</form>

<!--
<form action="viewbyage.php" method="post">
-->

<form action="viewbyname.php" target="main" method="post">
<input type = "text"  name="Name" placeholder = "Name"  size="13px" /><br />
<input type="submit" name="nameval" value="Go" >
</form>

<form action="viewbyclass.php" method="post" target="main">
<label for='standard_name'>Class:</label>
	<select name="standard_name">
<option value="">Nursery</option>
  <option value="">LKG</option>
  <option value="">UKG</option>
    <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
  <option value="9">Ten</option>
  <option value="10">Nine</option>
  <option value="11">Eleven</option>
  <option value="12">Twelve</option></select>
  </select>
	<br>
	<input type="submit" name="classval" value="Go" >
	
</form>

<form action="viewbyage.php" method="post" target="main">
	<label for='Age'>Age:</label>
	<select name="Age">
		<option value="">---</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="21">21</option>
		</select>
	<br>
	<input type="submit" name="ageval" value="Go" >
</form>

  



<form action="viewbyall.php" method="post" target="main">
	<label for='Age'>Age:</label>
	<select name="Age">
		<option value="">---</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="21">21</option>
		</select>
		
		
	<label for='standard_name'>Class:</label>
	<select name="standard_name">
<option value="">Nursery</option>
  <option value="">LKG</option>
  <option value="">UKG</option>
    <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
  <option value="9">Ten</option>
  <option value="10">Nine</option>
  <option value="11">Eleven</option>
  <option value="12">Twelve</option></select>
  </select>
	<br>
	<input type="submit" name="valall" value="Go" >
</form>



</BODY>



</HTML>




