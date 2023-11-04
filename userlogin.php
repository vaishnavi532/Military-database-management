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
	echo "These are the values from test table";
	echo "<br>";
	echo $_POST['name'];
	echo "\t";
	echo $_POST['password'];	
	echo "\t";
	echo $_POST['email'];	
	echo "\t";
	echo "<br>";

$username=$_POST['name'];
$passwd=$_POST['password'];
$emailid=$_POST['email'];
	
		 $sql = "INSERT INTO `user_login`(`name`, `email`, `password`) VALUES ('$username','$passwd','$emailid')";
	echo $sql;  
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('Data Registered successfully');
			window.location.href='home.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('Registration failed');
			window.location.href='ulogin.html';
			</script>";			
	}

	
}
?>