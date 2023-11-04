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
     
  echo  $_POST['aid'];
echo $_POST['noe'];
echo $_POST['sc'];
echo $_POST['loc'];
    echo $_POST['did'];
 echo  $_POST['operation'];


if(strcmp($_POST['operation'],"update")==0)
{
	
	$sql="UPDATE `armory` SET `Number_of_equipments`=".$_POST['noe'].",`Location`='".$_POST['loc']."',`Security_clearense`='".$_POST['sc']."',`Dep_id`='".$_POST['did']."' WHERE `Armory_id`='".$_POST['aid']."'";
        echo $sql;
        //die();
	
}
if(strcmp($_POST['operation'],"delete")==0)
{
	
	$sql="DELETE  FROM `armory`  WHERE `Armory_id`='".$_POST['aid']."'";
        echo $sql;
	
}
if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('update or delete successfully');
			window.location.href='update_deleteA.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('pdate or delete  failed');
			window.location.href='update_deleteA.html';
			</script>";			
	}

		



       	
	
}
?>