<?php
$db_host = "bxogvd5jlamdrl08azjd-mysql.services.clever-cloud.com";
$db_user = "uudflgtglaj8ynnn";
$db_pass = "tjXUqZ4uWPGt4AkgJic5";
$db_name = "bxogvd5jlamdrl08azjd";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
