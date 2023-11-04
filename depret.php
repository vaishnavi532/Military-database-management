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
		echo "<br>";

		 $sql = "SELECT * FROM `department`";
        	
		$result=$conn->query($sql);
		
		
if ($result->num_rows > 0)
		{
		echo "more than one row retreived";	
		echo "<br>";
		echo "<table border=1>";
		echo "<tr><th>Department_name</th><th>Department_id</th><th>Department_type</th><th>Department_responsibility</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>";
		echo $row['Department_name'];echo "</td><td>";
        echo $row['Department_id'];echo "</td><td>";
        echo $row['Department_type'];echo "</td><td>";
		echo $row['Department_responsibility'];echo "</td>";
		echo "</tr>";
		}
		echo "</table>";
		} 
		else 
		{	
		 echo "0 rows returned";				
		}
	
}
?>