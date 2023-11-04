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

    echo $_POST['eid'];
echo $_POST['toe'];
echo $_POST['ec'];
echo $_POST['w'];
echo $_POST['rl'];
echo $_POST['did'];
 echo  $_POST['operation'];


if(strcmp($_POST['operation'],"update")==0)
{
	
	$sql="UPDATE `equipments` SET `Type_of_equipment`='".$_POST['toe']."',`Equipment_count`=".$_POST['ec'].",`Equpiment_Weight`='".$_POST['w']."',`Required_license`='".$_POST['rl']."',`Dep_id`='".$_POST['did']."' WHERE `Equipment_id`='".$_POST['eid']."'";
        echo $sql;
        //die();
	
}
if(strcmp($_POST['operation'],"delete")==0)
{
	
	$sql="DELETE  FROM `equipments`  WHERE `Equipment_id`='".$_POST['eid']."'";
        echo $sql;
	
}
if ($conn->query($sql) === TRUE) 
	{
			echo "<script>
			alert('update or delete successfully');
			window.location.href='update_deleteE.html';
			</script>";
	} 
	else 
	{	
			
			echo "<script>
			alert('pdate or delete  failed');
			window.location.href='update_deleteE.html';
			</script>";			
	}

		



       	
	
}
?>