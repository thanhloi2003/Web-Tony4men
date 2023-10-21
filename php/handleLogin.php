<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login_username = $_POST["username"];
    $login_password = $_POST["password"];

    require_once('./connect.php');

    // Bảo mật mật khẩu: Sử dụng prepared statements và bcrypt
    $login_sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($login_sql);
    $stmt->bind_param("s", $login_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Bảo mật mật khẩu: So sánh mật khẩu đã mã hóa
        if ($login_password === $user['password']) {

            // Tạo token mới
            $token = bin2hex(random_bytes(32)); // Sử dụng random_bytes để tạo ngẫu nhiên

            // Lưu token vào cơ sở dữ liệu (ví dụ: cột 'tokens' trong bảng 'users')
            $update_token_sql = "UPDATE users SET tokens = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_token_sql);
            $update_stmt->bind_param("si", $token, $user['id']);
            $update_stmt->execute();
            $update_stmt->close();

            // Lưu token vào $_SESSION
            $_SESSION["username"] = $login_username;
            $_SESSION["token"] = $token;

            echo "Đăng nhập thành công!";
            if ($user['decentralization'] == 'user') {
                echo '<script type="text/javascript">window.history.back()</script>';
                exit;
            } elseif ($user['decentralization'] == 'admin') {
                header("Location: /Web%20Tony4men%20-%20Sao%20ch%c3%a9p/admin/AdminLTE-3.2.0/");
                exit;
            }
            exit;
        } else {
            echo '<script type="text/javascript">alert("Lỗi: Tên đăng nhập hoặc mật khẩu không đúng."); window.history.back();</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Lỗi: Tên đăng nhập hoặc mật khẩu không đúng."); window.history.back();</script>';
    }

    $stmt->close();
    $conn->close();
}
