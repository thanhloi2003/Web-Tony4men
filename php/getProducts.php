<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "sellshoe";

$connection = new mysqli($db_host, $db_username, $db_password, $db_name);



if (!$connection) {
    die("Kết nối đến MySQL thất bại: " . mysqli_connect_error());
}
