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
                        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm: </a></li>
                        <li class="breadcrumb-item active"></li>
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



            <form method="POST" action="./php/handleAddProduct.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" ">
                </div>
                <div class=" form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" ">
                </div>

                <div class=" form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">




                </div>

                <div class="form-group">
                    <label for="image2">Image:</label>
                    <input type="file" class="form-control-file" id="image2" name="image2">


                </div>

                <div class="form-group">
                    <label for="product_type">Product Type:</label>
                    <select class="form-control" id="product_type" name="product_type">
                        <option value="newshoe">Giầy mới</option>
                        <option value="hotshoe">
                            Giầy hot</option>
                        <option value="accessory">
                            Phụ Kiện</option>
                        <option value="gender">
                            Nam</option>
                        <option value="female">
                            nữ</option>
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