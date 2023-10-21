<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bs3</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Latest compiled and minified CSS & JS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php require_once("./layout/header.php");

    ?>

    <div class="container">
        <div class="content">
            <h2>
                <span>hàng mới về</span>
            </h2>
        </div>
        <div class="row">
            <?php
            $category = $_GET["sanpham"];
            require_once("./php/getProducts.php");


            $query = "SELECT * FROM products WHERE product_type = ?";


            $stmt = mysqli_prepare($connection, $query);


            if (!$stmt) {
                die("Lỗi truy vấn SQL: " . mysqli_error($connection));
            }


            mysqli_stmt_bind_param($stmt, "s", $category);


            if (mysqli_stmt_execute($stmt)) {

                $result = mysqli_stmt_get_result($stmt);


                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-3">
                        <a href="chitietsp.php?id=<?php echo  $row['id'] ?>" class="thumbnail">
                            <img src="<?php echo $row['image'] ?>" alt="">
                        </a>
                        <div>
                            <i></i>
                            <h3>
                                <a href="chitietsp.php?id=<?php echo  $row['id'] ?>"><?php echo  $row['name']  ?></a>
                            </h3>
                            <span><?php echo  $row['price']; ?> vnđ</span>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Lỗi khi thực hiện truy vấn: " . mysqli_error($connection);
            }


            mysqli_stmt_close($stmt);


            mysqli_close($connection);
            ?>



        </div>
        <div class="content">
            <h2>
                <span>Gợi ý sản phẩm</span>
            </h2>
        </div>


        <?php require_once('./layout/footer.php') ?>
</body>

</html>