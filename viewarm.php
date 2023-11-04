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

     $sql = "SELECT * FROM `armory`  WHERE `Armory_id`='".$_POST['armid']."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

         $arnoe=$row['Number_of_equipments']; 
        $arid= $row['Armory_id']; 
        $arloc= $row['Location']; 
		 $arsc=$row['Security_clearense']; 
         $ardep=$row['Dep_id'];


    } else {
        echo "0 result";
        die();
    }
}	
?>

<html>
<head>
<center>
<title> Armory information page</title>
<br> <br>
<h2> ARMORY DATA ENTRY FORM  </h2>
</head>
<body>
This is the page contain the detailed information about armory of a department.
<br>
<br> <br>
<br>
<form action ='update_deleteA.php' method='post'>
NUMBER OF EQUIPMENT:<input type='number' name='noe' value=<?php echo $arnoe;?>></input><br><br>
ARMORY ID:<input type='textbox' name='aid' value=<?php echo $arid;?>></input><br><br>
LOCATION:<input type="textbox" name="loc" value=<?php echo $arloc;?>></input><br><br>
SECURITY CLEARENCE:<input type="textbox" name="sc" value=<?php echo $arsc;?>></input><br><br>
Department_ID       :<input type='textbox' name='did' value=<?php echo $ardep;?>></input><br><br>
Operation:<input type=radio name =operation value=delete required>DELETE</input><input type=radio name =operation value=update required>UPDATE</input>
<input type='submit'></input>
<br><br>
<a href='update_deleteA.html'>Back</a>
</form>
</center>

</body>
</html>