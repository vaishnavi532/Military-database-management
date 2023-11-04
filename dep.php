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
	

$username=$_POST['dname'];
$depid =  $_POST['did'];
$dtype=   $_POST['deptype'];
$depres = $_POST['depres'];
	
		 $sql = "INSERT INTO `department`(`Department_name`,`Department_id`,`Department_type`,`Department_responsibility`) VALUES ('$username','$depid','$dtype','$depres')";
	echo $sql;  
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='off.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='dep.html';
			</script>";			
	}

	
}
?>