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

    echo $_POST['sname'];
    echo $_POST['sage'];
   echo $_POST['sgender'];
   echo $_POST['sh'];
    echo  $_POST['sw'];
    echo $_POST['srank'];
   echo $_POST['edu'];
    echo $_POST['stu'];
     echo $_POST['sid'];
   echo $_POST['yos'];
   echo $_POST['did'];
     echo $_POST['oid'];
 echo  $_POST['operation'];


if(strcmp($_POST['operation'],"update")==0)
{
	
	$sql="UPDATE `soldier` SET `Soldier_name`='".$_POST['sname']."',`Soldier_age`='".$_POST['sage']."',`Gender`='".$_POST['sgender']."',`Height`='".$_POST['sh']."',`Weight`='".$_POST['sw']."',`Soldier_Rank`='".$_POST['srank']."',`Eduaction`='".$_POST['edu']."',`Training_undergone`='".$_POST['stu']."',`Year_of_service`='".$_POST['yos']."',`Dep_id`='".$_POST['did']."',`Officer_id`='".$_POST['oid']."' WHERE `Soldier_id`='".$_POST['sid']."'";
        echo $sql;
        //die();
	
}
if(strcmp($_POST['operation'],"delete")==0)
{
	
	$sql="DELETE  FROM `soldier`  WHERE `Soldier_id`='".$_POST['sid']."'";
        echo $sql;
	
}

if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('update or delete successfully');
			window.location.href='update_deleteS.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('update or delete  failed');
			window.location.href='update_deleteS.html';
			</script>";			
	}

		



       	
	
}
?>