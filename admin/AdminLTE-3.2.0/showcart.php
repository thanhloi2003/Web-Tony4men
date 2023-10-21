<?php require_once("./layout/header.php") ?>
<!-- Content Wrapper. Contains page content -->

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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
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
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Contact Phone</th>
                        <th>Email</th>
                        <th>Order Details</th>
                        <th>Payment Method</th>
                        <th>Data Product</th>
                    </tr>
                </thead>

                <?php
                // Kết nối đến cơ sở dữ liệu
                $conn = mysqli_connect("localhost", "root", "", "sellshoe");

                // Kiểm tra kết nối
                if (!$conn) {
                    die("Kết nối không thành công: " . mysqli_connect_error());
                }

                // Truy vấn dữ liệu từ bảng products
                $sql = "SELECT * FROM payment";
                $result = mysqli_query($conn, $sql);

                // Lặp qua kết quả truy vấn và hiển thị dữ liệu
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>{$row['customer_name']}</td>";
                    echo "<td>{$row['contact_phone']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['order_details']}</td>";
                    echo "<td>{$row['payment']}</td>";
                    $dataProduct = json_decode($row['data_product'], true);
                    echo "<td>";

                    foreach ($dataProduct as $key => $value) {

                ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?php echo  "Tên hàng: " . $value['name']  ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo  "số lượng: " . $value['quantity']  ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo  "Tông tiền: " . number_format($value['total'])  ?>
                    </li>
                </ul>
                <?php
                    }

                    echo "</td>";
                    echo "</tr>";
                }

                // Đóng kết nối
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php require_once("./layout/footer.php") ?>