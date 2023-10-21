<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $json_data = $_POST["dataProduct"];
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $payment = $_POST["payment"];
    $text = $_POST["text"];
    require_once('./connect.php');


    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }


    $sql = "INSERT INTO payment (customer_name, contact_phone, email, order_details, payment, data_product) VALUES (?, ?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $phonenumber, $email, $text, $payment, $json_data);


    if ($stmt->execute()) {
        echo '<script>';
        echo 'localStorage.clear();';
        echo 'alert("Bạn đã đặt hàng thành công!")';
        echo 'window.location.href = "http://localhost/Web%20Tony4men%20-%20Sao%20ch%C3%A9p"';
        echo '</script>';
    } else {
        echo "Lỗi khi thêm dữ liệu: " . $stmt->error;
    }

    $conn->close();
}
