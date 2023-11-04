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

    echo$_POST['oname'];
echo $_POST['oid'];
echo $_POST['oage'];
echo $_POST['orank'];
echo $_POST['wd'];
echo $_POST['yos'];
echo$_POST['did'];
 echo  $_POST['operation'];


if(strcmp($_POST['operation'],"update")==0)
{
	
	$sql="UPDATE `officer` SET `Officer_name`='".$_POST['oname']."',`Age`='".$_POST['oage']."',`O_Rank`='".$_POST['orank']."',`Working_department`='".$_POST['wd']."',`Year_of_service`='".$_POST['yos']."',`Dep_id`='".$_POST['did']."' WHERE `Officer_id`='".$_POST['oid']."'";
        echo $sql;
        //die();
	
}
if(strcmp($_POST['operation'],"delete")==0)
{
	
	$sql="DELETE  FROM `officer`  WHERE `Officer_id`='".$_POST['oid']."'";
        echo $sql;
	
}
if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('update or delete successfully');
			window.location.href='update_delete.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('update or delete  failed');
			window.location.href='update_delete.html';
			</script>";			
	}

		



       	
	
}
?>