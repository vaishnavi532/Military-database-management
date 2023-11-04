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

		 $sql = "SELECT * FROM `soldier`";
        	
		$result=$conn->query($sql);
		
		
if ($result->num_rows > 0)
		{
		echo "more than one row retreived";	
		echo "<br>";
		echo "<table border=1>";
		echo "<tr><th>Soldier_name</th><th> Soldier_age</th><th>Gender</th><th>Height</th><th>Weight</th><th>Soldier_Rank</th><th>Eduaction</th><th>Training_undergone</th><th>Soldier_id</th><th>Year_of_service</th><th>Dep_id</th><th>Officer_id</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>";
		echo $row['Soldier_name'];echo "</td><td>";
        echo $row['Soldier_age'];echo "</td><td>";
        echo $row['Gender'];echo "</td><td>";
		echo $row['Height'];echo "</td><td>";
        echo $row['Weight'];echo "</td><td>";
        echo $row['Soldier_Rank'];echo "</td><td>";
        echo $row['Eduaction'];echo "</td><td>";
        echo $row['Training_undergone'];echo "</td><td>";
        echo $row['Soldier_id'];echo "</td><td>";
        echo $row['Year_of_service'];echo "</td><td>";
        echo $row['Dep_id'];echo "</td><td>";
        echo $row['Officer_id'];echo "</td>";
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