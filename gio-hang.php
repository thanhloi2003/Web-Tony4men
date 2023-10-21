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
    <script src="./js/handleCart.js"></script>
    <!-- Latest compiled and minified CSS -->
</head>
<?php

?>

<body>
    <?php require_once("./layout/header.php") ?>
    <div class="container">
        <div class="content">
            <h2>
                <span>Giỏ hàng</span>
            </h2>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Thành Tiền</th>
                    <th>active</th>
                </tr>
            </thead>
            <tbody class="tbody">



            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-primary btn-a " href="dat-hang.php">Đặt hàng</a>
        </div>
    </div>
    <!-- footer -->
    <?php require_once('./layout/footer.php') ?>

</body>

</html>