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

		 $sql = "SELECT * FROM `equipments`";
        	
		$result=$conn->query($sql);
		
		
if ($result->num_rows > 0)
		{
		echo "more than one row retreived";	
		echo "<br>";
		echo "<table border=1>";
		echo "<tr><th>Equipment_id</th><th>Type_of_equipment</th><th>Equipment_count</th><th>Equpiment_Weight</th><th>Required_license</th><th>Dep_id</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>";
		echo $row['Equipment_id'];echo "</td><td>";
        echo $row['Type_of_equipment'];echo "</td><td>";
        echo $row['Equipment_count'];echo "</td><td>";
		echo $row['Equpiment_Weight'];echo "</td><td>";
        echo $row['Required_license'];echo "</td><td>";
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