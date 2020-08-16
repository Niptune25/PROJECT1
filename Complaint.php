<?php
 if(isset($_POST['submit']))
 {
$Name = $_POST['Name'];
$StaffID=$_POST['StaffID'];
$Complaint=$_POST['Complaint'];
$file=fopen("complaint.txt","a+") or die ("File not opening");
$s=$Name."||".$StaffID."||".$Complaint."\n";

fputs($file,$s) or die ("Data could not be written");
fclose($file);
 }
?>

<h1>REGISTER COMPLAINT</h1>
<br></br>

<centre>
<form action="#" method ="post">
Name:<input type="text" name="Name" ><br>
<br></br>
StaffID:<input type="text" name="StaffID"><br>
<br></br>
Complaint<input type="text" size="60"  name="Complaint"><br>
<br></br>
<input type="submit" name ="submit" value ="Register Complaint"><br>
</form>
</center>




	
