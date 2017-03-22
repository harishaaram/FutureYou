<?php
require("constants.php");
    
    // 1. Create a database db
    //      (Use your own servername, username and password if they are different.)
    //      $db allows us to keep refering to this db after it is established
    $db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 
    if (!$db) {
        die("Database db failed: " . mysqli_connect_error());
    }

?>