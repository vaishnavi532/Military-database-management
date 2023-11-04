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
	

$username=$_POST['oname'];
$oid = $_POST['oid'];
$age=$_POST['oage'];
$rank=$_POST['orank'];
$wd= $_POST['wd'];
$year=$_POST['yos'];
$did=$_POST['did'];

    $sql = "INSERT INTO `officer`(`Officer_name`,`Officer_id`,`Age`,`O_rank`,`Working_department`,`Year_of_service`,`Dep_id`) VALUES ('$username','$oid', $age,'$rank',' $wd',' $year','$did')";
         	echo $sql;  
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='soldier.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='off.html';
			</script>";			
	}

	
}
?>