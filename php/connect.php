<?php
     $conn = mysqli_connect("localhost", "root", "", "sellshoe");

if (!$conn) {
    die("Kết nối đến MySQL thất bại: " . mysqli_connect_error());
}