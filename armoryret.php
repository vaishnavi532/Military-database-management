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

		 $sql = "SELECT * FROM `armory`";
        	
		$result=$conn->query($sql);
		
		
if ($result->num_rows > 0)
		{
		echo "more than one row retreived";	
		echo "<br>";
		echo "<table border=1>";
		echo "<tr><th>Number_of_equipments</th><th>Armory_id </th><th>Location </th><th>Security_clearense</th><th>Dep_id</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>";
		echo $row['Number_of_equipments'];echo "</td><td>";
        echo $row['Armory_id'];echo "</td><td>";
        echo $row['Location'];echo "</td><td>";
		echo $row['Security_clearense'];echo "</td><td>";
        echo $row['Dep_id'];echo "</td>";
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