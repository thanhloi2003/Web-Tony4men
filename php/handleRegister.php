<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];


    require_once('./connect.php');


    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }


    $check_email_sql = "SELECT * FROM users WHERE email='$email'";
    $result_email = $conn->query($check_email_sql);


    $check_username_sql = "SELECT * FROM users WHERE username='$username'";
    $result_username = $conn->query($check_username_sql);

    if ($result_email->num_rows > 0) {
        echo '<script type="text/javascript">alert("Lỗi: Email đã tồn tại trong hệ thống."); window.history.back();</script>';
    } elseif ($result_username->num_rows > 0) {
        echo '<script type="text/javascript">alert("Lỗi: Username đã tồn tại trong hệ thống."); window.history.back();</script>';
    } else {

        $insert_sql = "INSERT INTO users (username, password, email, phone_number, address,decentralization) 
            VALUES ('$username', '$password', '$email', '$phone_number', '$address','user')";


        if ($conn->query($insert_sql) === TRUE) {
            echo '<script type="text/javascript">alert("Đăng ký thành công!"); window.history.back();</script>';
        } else {
            echo "Lỗi: " . $insert_sql . "<br>" . $conn->error;
        }
    }


    $conn->close();
}
