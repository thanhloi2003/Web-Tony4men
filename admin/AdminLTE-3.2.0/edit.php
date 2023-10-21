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

        // Truy vấn dữ liệu của sản phẩm cần sửa
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $product = mysqli_fetch_assoc($result);
        } else {
            echo "Lỗi truy vấn: " . mysqli_error($conn);
        }
    }
}




// Đóng kết nối
mysqli_close($conn);
?>
<?php require_once("./layout/header.php") ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách sản phẩm</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Sửa sản phẩm: </a></li>
                        <li class="breadcrumb-item active"><?php echo $product['name']; ?></li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <p><?php echo isset($message) ? $message : ""; ?></p>


            <form method="POST" action="./php/handleEditProduct.php" enctype="multipart/form-data">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?php echo $product['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="<?php echo $product['price']; ?>">
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    <?php
                    // Kiểm tra xem có hình ảnh mới đã tải lên hay không
                    if ($product['image'] != null) {
                        echo '<img src="../../' . $product['image'] . '" alt="Current Image" width="150">';
                    }
                    ?>
                    <input type="hidden" name="image_old" value="<?php echo $product['image'] ?>">

                </div>

                <div class="form-group">
                    <label for="image2">Image:</label>
                    <input type="file" class="form-control-file" id="image2" name="image2">
                    <?php
                    // Kiểm tra xem có hình ảnh mới đã tải lên hay không
                    if ($product['image2'] != null) {
                        echo '<img src="../../' . $product['image2'] . '" alt="Current Image" width="150">';
                    }
                    ?>
                    <input type="hidden" name="image_old2" value="<?php echo $product['image2'] ?>">

                </div>

                <div class="form-group">
                    <label for="product_type">Product Type:</label>
                    <select class="form-control" id="product_type" name="product_type">
                        <option value="newshoe" <?php if ($product['product_type'] == 'newshoe') echo 'selected'; ?>>
                            Giầy mới</option>
                        <option value="hotshoe" <?php if ($product['product_type'] == 'hotshoe') echo 'selected'; ?>>
                            Giầy hot</option>
                        <option value="accessory" <?php if ($product['product_type'] == 'accessory') echo 'selected'; ?>>
                            Phụ Kiện</option>
                        <option value="male" <?php if ($product['product_type'] == 'male') echo 'selected'; ?>>
                            Nam</option>
                        <option value="female" <?php if ($product['product_type'] == 'female') echo 'selected'; ?>>
                            Nữ</option>
                    </select>
                </div>
                <!-- Thêm các trường sửa khác nếu cần -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php require_once("./layout/footer.php") ?>