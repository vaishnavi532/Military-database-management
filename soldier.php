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
	

$sname=$_POST['sname'];
$sage = $_POST['sage'];
$sgender=$_POST['sgender'];
$sh=$_POST['sh'];
$sw= $_POST['sw'];
$srank=$_POST['srank'];
$edu=$_POST['edu'];
$stu=$_POST['stu'];
$sid=$_POST['sid'];
$yos= $_POST['yos'];
$did=$_POST['did'];
$oid=$_POST['oid'];

    $sql = "INSERT INTO `soldier`(`Soldier_name`,`Soldier_Age`,`Gender`,`Height`,`Weight`,`Soldier_rank`,`Eduaction`,`Training_undergone`,`Soldier_id`,`Year_of_service`,`Dep_id`,`Officer_id`) VALUES ('$sname','$sage',' $sgender','$sh', '$sw',' $srank','$edu','$stu','$sid','$yos','$did','$oid')";
         	echo $sql;  
	
	 if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='armory.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='soldier.html';
			</script>";			
	}
	

	
	
	
			
	
}
?>