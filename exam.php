

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
<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
</HEAD>
<p>Entry for exam marks:</p>
<body bgcolor="#C0C0C0" align="center">

<select name="list" id="list" accesskey="target">

<option value='none' selected>---</option>
    <option value="marks_entry1.php">First Term</option>
    <option value="marks_entry2.php">Second Term</option>
    <option value="marks_entry3.php">Third Term</option>
<select>
<input type=button value="Go" onclick="goToNewPage()" />



</BODY>



</HTML>
