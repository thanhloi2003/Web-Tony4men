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
    <!-- Latest compiled and minified CSS -->
</head>

<body>
    <?php
    require_once("./layout/header.php")
    ?>

    <!-- hết -->

    <div class="container">
        <div class="content">
            <h2>
                <span>hàng mới về</span>
            </h2>
        </div>
        <div class="row">
            <?php
            require_once("./php/connect.php");
      
            $query = "SELECT * FROM products where product_type = 'newshoe'";


            $result = mysqli_query($conn, $query);


            if (!$result) {
                die("Lỗi truy vấn SQL: " . mysqli_error($conn));
            }


            while ($row = mysqli_fetch_assoc($result)) {




            ?>
                <div class="col-md-3">
                    <a href="chitietsp.php?id=<?php echo  $row['id'] ?>" class="thumbnail">
                        <img src=<?php echo $row['image']  ?> alt="">
                    </a>
                    <div>
                        <i></i>
                        <h3>
                            <a href="chitietsp.php?id=<?php echo  $row['id'] ?>"><?php echo  $row['name']  ?></a>
                        </h3>
                        <span><?php echo number_format($row['price'])  ?> vnđ</span>
                    </div>
                </div>
            <?php
            }
            ?>



        </div>
        <div class="content">
            <h2>
                <span>bán chạy nhất tuần</span>
            </h2>
        </div>
        <div class="row">
            <?php

            $query = "SELECT * FROM products where product_type = 'hotshoe'";


            $result = mysqli_query($conn, $query);


            if (!$result) {
                die("Lỗi truy vấn SQL: " . mysqli_error($conn));
            }


            while ($row = mysqli_fetch_assoc($result)) {




            ?>
                <div class="col-md-3">
                    <a href="chitietsp.php?id=<?php echo  $row['id'] ?>" class="thumbnail">
                        <img src=<?php echo $row['image']  ?> alt="">
                    </a>
                    <div>
                        <i></i>
                        <h3>
                            <a href="chitietsp.php?id=<?php echo  $row['id'] ?>"><?php echo  $row['name']  ?></a>
                        </h3>
                        <span><?php echo number_format($row['price'])  ?> vnđ</span>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <?php require_once('./layout/footer.php') ?>


</body>

</html>