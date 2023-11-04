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

		 $sql = "SELECT * FROM `officer`";
        	
		$result=$conn->query($sql);
		
		
if ($result->num_rows > 0)
		{
		echo "more than one row retreived";	
		echo "<br>";
		echo "<table border=1>";
		echo "<tr><th>Officer_name</th><th> Officer_id</th><th> Age</th><th>O_Rank</th><th>Working_department</th><th>Year_of_service</th><th>Dep_id</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>";
		echo $row['Officer_name'];echo "</td><td>";
        echo $row['Officer_id'];echo "</td><td>";
        echo $row['Age'];echo "</td><td>";
		echo $row['O_Rank'];echo "</td><td>";
        echo $row['Working_department'];echo "</td><td>";
        echo $row['Year_of_service'];echo "</td><td>";
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