

<HTML>

<HEAD>
<style>
.formc{
    display: inline-block; //Or display: inline; 
}
</style>
</HEAD>

<body bgcolor="#9575cd">




<div>

<form class="formc" action="viewbyclass.php" method="post" target="main">
<label for='standard_name'>Search by:<br>Class:</label>
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

	<input type="submit" name="classval" value="Go" >
	</br>
</form>

<form class="formc" action="viewbyage.php" method="post" target="main">
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

	<input type="submit" name="ageval" value="Go" >
</form>

  



<form class="formc" action="viewbyall.php" method="post" target="main">
<label for='search'>Advanced Search:</label>
<input type = "text"  name="student_id" placeholder = "student ID"  size="13px" />
<input type = "text"  name="Name" placeholder = "Name"  size="13px" />
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

	<input type="submit" name="valall" value="Go" >
</form>

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Advanced Search</div>
      <div class="collapsible-body"><p><form action="viewbyall.php" method="post" target="main">
<input type = "text"  name="student_id" placeholder = "student ID"  size="13px" />
<input type = "text"  name="Name" placeholder = "Name"  size="13px" />
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

	<input type="submit" name="valall" value="Go" >
</form>
	  </p></div>
    </li>
   
  </ul>



</BODY>



</HTML>




