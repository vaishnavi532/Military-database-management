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

     $sql = "SELECT * FROM `officer`  WHERE `Officer_id`='".$_POST['offid']."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
         $ofname=$row['Officer_name'];echo "</td><td>";
         $ofid=$row['Officer_id'];echo "</td><td>";
         $ofage=$row['Age'];echo "</td><td>";
		 $ofrank=$row['O_Rank'];echo "</td><td>";
         $ofwd=$row['Working_department'];echo "</td><td>";
         $ofyos=$row['Year_of_service'];echo "</td><td>";
         $ofdep=$row['Dep_id'];



    } else {
        echo "0 result";
        die();
    }
}	
?>
<html>
<head>
<center>
<title> Officer  Information page</title>
<br> <br>
<h2> Offier Detail ENTRY FORM  </h2>
</head>
<body>
This is the page  accepts the  information about Officer.
<br>
<br> <br>
<br>
<form action ='update_deleteO.php' method='post'>
OFFICER_NAME:<input type='textbox' name='oname'  value=<?php echo $ofname;?>></input><br><br>
OFFICER_ID:<input type='textbox' name='oid'  value=<?php echo $ofid;?>></input><br><br>
AGE:<input type='number' name='oage'  value=<?php echo $ofage;?>></input><br><br>
OFFICER_RANK:<input type='textbox' name='orank' value=<?php echo $ofrank;?>></input><br> <br>
WORKING-DEPARTMENT:<input type='textbox' name='wd'  value=<?php echo $ofwd;?>></input><br><br>
YEAR OF SERVICE:<input type='number' name='yos' value=<?php echo $ofyos;?>></input><br><br>
DEPARTMENT_ID:<input type='textbox' name='did' value=<?php echo $ofdep;?>></input><br><br>
Operation:<input type=radio name =operation value=delete required>DELETE</input><input type=radio name =operation value=update required>UPDATE</input>
<input type='submit'></input>
<br><br>
<a href='update_deleteO.html'>Back</a>
</form>
</center>

</body>
</html>