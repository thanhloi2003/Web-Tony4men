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

<body>
    <?php require_once("./layout/header.php") ?>
    <div class="container">
        <div class="content">
            <h2>
                <span>Đặt hàng</span>
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
                    <th>Thành Tên</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="tbody">


            </tbody>
        </table>
        <form action="./php/handlePayment.php" method="POST" role="form">

            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" name="username" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Điện thoại liên hệ</label>
                <input type="number" name="phonenumber" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ nhận hàng</label>
                <input type="text" name="address" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="payment">Thanh Toán</label>
                <input name="payment" type="radio" name="payment" id="cash" value="tiền mặt">
                <label for="cash">Tiền mặt</label>
                <input type="radio" name="payment" id="transfer" value="chuyển khoản">
                <label for="transfer">Chuyển khoản</label>
            </div>
            <input style="display: none;" class="dataProduct" name="dataProduct" type="text">
            <div class="form-group">
                <label for="">Nội dung đặt hàng</label>
                <textarea name="text" id="input" class="form-control" rows="3" ></textarea>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-a">Mua ngay</button>
            </div>
        </form>

    </div>
    <!-- footer -->
    <?php require_once('./layout/footer.php') ?>

</body>


</html>