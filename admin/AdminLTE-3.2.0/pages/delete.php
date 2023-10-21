<?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "sellshoe");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Kiểm tra xem có tham số id trong URL hay không
    if (isset($_GET["id"])) {
        $product_id = $_GET["id"];

        // Thực hiện xóa sản phẩm với id tương ứng
        $sql = "DELETE FROM products WHERE id = $product_id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Sản phẩm đã được xóa thành công.";
            echo "<script>
                alert('da xoa thanh cong');
                window.location.assign('http://localhost/Web%20Tony4men%20-%20Sao%20ch%c3%a9p/admin/AdminLTE-3.2.0/index.php')
            </script>";
        } else {
            echo "Lỗi xóa sản phẩm: " . mysqli_error($conn);
        }
    }
}

// Đóng kết nối
mysqli_close($conn);
