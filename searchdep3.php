<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "militarydb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the search button was clicked
if (isset($_POST['search'])) {
    // Get the search keyword
    $search_keyword = mysqli_real_escape_string($conn, $_POST['search_keyword']);

    // Create the SQL query
    $sql = "SELECT * FROM department
            JOIN officer ON department.Department_id = officer.Dep_id
            JOIN soldier ON department.Department_id = soldier.Dep_id
            WHERE department.Department_id LIKE '%$search_keyword%' OR
            officer.Officer_id LIKE '%$search_keyword%' OR
            soldier.Soldier_id LIKE '%$search_keyword%'";

    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);

    // Fetch the data from the result
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "To know who is serving for which department we have this page: ";
        echo "<br>";
        echo"<br>";
        echo "Department name:     ";
        echo $row['Department_name'];
        echo "<br>";
         echo "Department ID:     ";
        echo $row['Department_id'];
        echo "<br>";
        echo "Officer name:    ";
        echo $row['Officer_name'];
        echo "<br>";
        echo "Officer Rank:    ";
        echo $row['O_Rank'];
        echo "<br>";
         echo "Officer ID:    ";
        echo $row['Officer_id'];
        echo "<br>";
        echo "Soldier ID:    ";
        echo   $row['Soldier_id']; 
        echo "<br>";
        echo "Soldier name:    ";
        echo   $row['Soldier_name'];
        echo "<br>";
        echo "<br>";

    }
}

mysqli_close($conn);
?>

<!-- The search form -->
<form action="" method="post">
    Enter any ID (Department / Officer / Soldier) to get their info.<br><br>
    <input type="text" name="search_keyword">
    <input type="submit" name="search" value="Search"><br><br>

    <a href='home.html'>Back to home </a>
</form>
