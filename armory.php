<?php
$servername='localhost';
$username='root';
$password='';
$dbname='militarydb';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
	echo "connected to db";
	

$aid=$_POST['aid'];
$noe = $_POST['noe'];
$sc=$_POST['sc'];
$loc=$_POST['loc'];
$did= $_POST['did'];
	
		 $sql = "INSERT INTO `armory`(`Number_of_equipments`,`Armory_id`,`Location`,`Security_clearense`,`Dep_id`) VALUES ($noe,'$aid','$loc','$sc','$did')";
	echo $sql;  

    if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='eqip.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='armory.html';
			</script>";			
	}

	
}
?>