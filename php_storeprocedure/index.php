<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli("localhost", "root", "", "db_storeprocedure");

if(mysqli_connect_error()) {
    print_r("Error". mysqli_connect_error());
    exit();
}

$insert_query = "CALL inserUserData1('Tisha Doe', 'thisW@gmail.com', 954353454, 1)"; 
if(mysqli_query($connection, $insert_query)) {
    echo "Data has been inserted successfully!";
} else {
    echo "Failed to insert data into database";
}

$name='John'; // Data can be changed.
$query="select * from tbl_user where name=:name";
$step = $connection->prepare($query);
$step->bindParam(':name', $name,PDO::PARAM_STR,10);
$step->execute();
$step = $step->fetchAll();

echo "<table>
<tr><th>ID</th><th>Name</th>
<th>Class</th><th>Mark</th></tr>";
foreach($step as $row) {
    echo "<tr><td>$row[id]</td><td>$row[name]</td>
    <td>$row[class]</td><td>$row[mark]</td></tr>";
}
echo "</table>";