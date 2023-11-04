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

   echo $_POST['dname'];
   echo $_POST['did'];
   echo $_POST['deptype'];
   echo $_POST['depres'];
   echo  $_POST['operation'];


if(strcmp($_POST['operation'],"update")==0)
{
	
	$sql="UPDATE `department` SET `Department_name`='".$_POST['dname']."',`Department_type`='".$_POST['deptype']."',`Department_responsibility`='".$_POST['depres']."' WHERE `Department_id`='".$_POST['did']."'";
        echo $sql;
        //die();
	
}
if(strcmp($_POST['operation'],"delete")==0)
{
	
	$sql="DELETE  FROM `department`  WHERE `Department_id`='".$_POST['did']."'";
        echo $sql;
	
}




if ($conn->query($sql) === TRUE) 
{
		echo "<script>
		alert('Delete or Update successfully');
		window.location.href='update_deleteD.html';
		</script>";
} 
else 
{	
		
		echo "<script>
		alert('Update or Delete  failed');
		window.location.href='update_deleteD.html';
		</script>";			
}


       	
	
}
?>