<?php
$servername='localhost';
$username='root';
$password='';
$dbname='militarydb';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else {
    echo "connected to db";
    echo "<br>";

     $sql = "SELECT * FROM `equipments`  WHERE `Equipment_id`='".$_POST['eqipid']."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       $epid= $row['Equipment_id'];
        $eptoe= $row['Type_of_equipment']; 
         $epec=$row['Equipment_count']; 
		 $epw=$row['Equpiment_Weight']; 
         $eprl=$row['Required_license']; 
         $epdid=$row['Dep_id'];


    } else {
        echo "0 result";
        die();
    }
}	
?>

<html>
<head>
<center>
<title> Equipment information page</title>
<br> <br>
<h2> EQUIPMENT DATA ENTRY FORM  </h2>
</head>
<body>
This is the page contain the detailed information about equipment of a department.
<br>
<br> <br>
<br>
<form action ='update_deleteE.php' method='post'>
EQUIPMENT ID:<input type='textbox' name='eid' value=<?php echo $epid;?>></input><br><br>
TYPE OF EQUIPMENT:<input type='textbox' name='toe' value=<?php echo $eptoe;?>></input><br><br>
EQUIPMENT COUNT:<input type='number' name='ec' value=<?php echo $epec;?>></input><br><br>
WEIGHT:<input type='textbox' name='w' value=<?php echo $epw;?>></input><br> <br>
REQUIRED LICENSE:<input type="textbox" name="rl" value=<?php echo $eprl;?>></input><br><br>
DEPRTMENT_ID:<input type="textbox" name="did" value=<?php echo $epdid;?>></input><br><br>
Operation:<input type=radio name =operation value=delete required>DELETE</input><input type=radio name =operation value=update required>UPDATE</input>
<input type='submit'></input>
<br><br>
<a href='update_deleteE.html'>Back</a>
</form>
</center>

</body>
</html>