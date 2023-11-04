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
	

$username=$_POST['eid'];
$oid = $_POST['toe'];
$age=$_POST['ec'];
$rank=$_POST['w'];
$wd= $_POST['rl'];
$did=$_POST['did'];

    $sql = "INSERT INTO `equipments`(`Equipment_id`,`Type_of_equipment`,`Equipment_count`,`Equpiment_Weight`,`Required_license`,`Dep_id`) VALUES ('$username','$oid', $age,'$rank', ' $wd','$did')";
         	echo $sql;  
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='ulogin.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='eqip.html';
			</script>";			
	}

	
}
?>