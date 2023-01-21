<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli("localhost", "root", "", "db_storeprocedure");

if(mysqli_connect_error()) {
    print_r("Error". mysqli_connect_error());
    exit();
}

$update_query = "CALL Update_userInfo(1, 'JohnDoe',  '35345344', 'johndoe@gmail.com', 1)"; 
if(mysqli_query($connection, $update_query)) {
     echo "<h3>Updated successfully! </h3>";
} else {
    echo "Failed to update data";
}
 