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
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Image2</th>
            <th>Product type</th>
            <th>Action</th>
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
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        // Lặp qua kết quả truy vấn và hiển thị dữ liệu
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          $price = $row['price'];
          echo "<tr>";
          echo "<td>" . $i++ . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . number_format($price)  . "</td>";
          echo "<td><img src='../../" . $row['image'] . "' alt='Image 1' width='50'></td>";
          echo "<td><img src='../../" . $row['image2'] . "' alt='Image 2' width='50'></td>";

          echo "<td>" . $row['product_type'] . "</td>";

          echo "<td>";
          echo "<a href='./edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>";
          echo "<a href='./pages/delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
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