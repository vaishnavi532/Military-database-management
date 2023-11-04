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

     $sql = "SELECT * FROM `soldier`  WHERE `Soldier_id`='".$_POST['solid']."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

         $slname=$row['Soldier_name']; 
        $slage= $row['Soldier_age']; 
         $slgen=$row['Gender']; 
		 $slh=$row['Height']; 
        $slw= $row['Weight']; 
         $slr=$row['Soldier_Rank']; 
         $sledu=$row['Eduaction']; 
        $sltu= $row['Training_undergone']; 
        $slid= $row['Soldier_id']; 
        $slyos= $row['Year_of_service']; 
         $sldid=$row['Dep_id'];
        $sloid = $row['Officer_id'];
    }else {
        echo "0 result";
        die();
    }
}	
?>

<html>
<head>
<center> 
<title> Soldier Information page</title>
<br> <br>
<h2> Soldier Detail ENTRY FORM  </h2>
</head>
<body>
<table>
This is the page  accepts the  information about Soldier.
<br>
<br> <br>
<br>
<form action ='update_deleteS.php' method='post'>
SOLDIER_NAME    :<input type='textbox' name='sname'value=<?php echo $slname;?>></input><br><br>
AGE              :<input type='number' name='sage'value=<?php echo $slage;?>></input><br><br>
HEIGHT             :<input type='textbox' name='sh'value=<?php echo $slh;?>></input><br><br>
WEIGHT:<input type='textbox' name='sw'value=<?php echo $slw;?>></input><br><br>
GENDER:<input type='textbox' name='sgender' value=<?php echo $slgen;?>></input><br><br>

SOLDIER_RANK:<input type='textbox' name='srank' value=<?php echo $slr;?>></input><br> <br>
EDUCATION:<input type='textbox' name='edu'  value=<?php echo $sledu;?>></input><br> <br>

TRANING UNDERGONE:<input type='textbox' name='stu'value=<?php echo $sltu;?>></input><br> <br>

SOLDIER_ID       :<input type='textbox' name='sid'value=<?php echo $slid;?>></input><br><br>

YEAR OF SERVICE:<input type='number' name='yos'value=<?php echo $slyos;?>></input><br><br>

DEPARTMENT_ID:<input type='textbox' name='did'value=<?php echo $sldid;?>></input><br><br>

OFFICER_ID:<input type='textbox' name='oid'value=<?php echo $sloid;?>></input><br><br>
Operation:<input type=radio name =operation value=delete required>DELETE</input><input type=radio name =operation value=update required>UPDATE</input>

<input type='submit'></input>
<br><br>
<a href='update_deleteS.html'>Back</a>

</form>
</center>
</table>
</body>
</html>