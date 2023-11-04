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

     $sql = "SELECT * FROM `department`  WHERE `Department_id`='" .$_POST['depid']."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $dname = $row['Department_name'];
        $did = $row['Department_id'];
        $dtype= $row['Department_type'];
        $dresp = $row['Department_responsibility'];

    } else {
        echo "0 result";
        die();
    }
}	
?>
<html>
<head>
<center>
<title> Department Detail </title>
</head>
<body>
<hr>
DEPARTMENT DETAILS
<form action ='update_deleteD.php' method=POST>

DEPARTMENT_NAME:<input type='textbox' name='dname' value=<?php echo $dname;?> ></input><br><br>
DEPARTMENT_ID:<input type='textbox' name='did' value=<?php echo $did;?> readonly ></input><br><br>
DEPARTMENT_TYPE:<input type='textbox' name='deptype' value=<?php echo $dtype;?> ></input><br><br>
DEPARTMENT_respmsibility:<input type='textbox' name='depres' value=<?php echo $dresp;?> ></input><br> <br>
Operation:<input type=radio name =operation value=delete required>DELETE</input><input type=radio name =operation value=update required>UPDATE</input>
<input type='submit'></input>
<br><br>
<a href='update_deleteD.html'>Back</a>
</form>
</center>

</body>
</html>