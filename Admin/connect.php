<?php
/* Local Database*/
$servername_db = "localhost";
$username_db = "root";
$password_db = "";
$dbname_db = "landbank";

// Create connection
$conn = mysqli_connect($servername_db, $username_db, $password_db, $dbname_db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?> 