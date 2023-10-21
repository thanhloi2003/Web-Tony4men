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
    <link rel="stylesheet" href="./css/chitietsp.css">
    <!-- Latest compiled and minified CSS -->
</head>

<?php
require_once('./php/connect.php');

$product_id = $_GET['id'];


$query = "SELECT * FROM products WHERE id = $product_id";


$result = mysqli_query($conn, $query);


if (!$result) {
    die("Lỗi truy vấn SQL: " . mysqli_error($conn));
}


$product = mysqli_fetch_assoc($result);


if ($product) {
} else {;
}


mysqli_close($conn);
?>

<body>
    <?php
    require_once("./layout/header.php")
    ?>

    </div>
    <div class="container">
        <div class="hidden-xs">
            <div class="text5">
                <ul class="breadcrumb textmenu">
                    <li>
                        <a href="">Trang Chủ</a>
                    </li>
                    <li>
                        <a href=""><?php echo  $product['product_type']  ?></a>
                    </li>
                    <li>
                        <a href=""><?php echo  $product['name']  ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="product-detail">
                <div class="col-md-4 anh-chi-tiet">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-10">
                                <img style="width:100%;" class="cloudzoom" alt="Cloud Zoom small image" id="zoom1"
                                    src="<?php echo $product['image']  ?>" title="Cloud Zoom " data-cloudzoom='
                     zoomImage:<?php echo  $product['image'] ?>,
                     zoomSizeMode: "image",
                     tintColor:"#000",
                     tintOpacity:0.25,
                     captionPosition:"bottom",
                     maxMagnification:4,
                     autoInside:750,
                     '>
                            </div>
                            <div class="col-md-2" style="padding-left:0px">
                                <a href="images/Pro_A6T014_1-500x500.jpeg" class="thumb-link">
                                    <img class="cloudzoom-gallery" width="64" src="<?php echo  $product['image'] ?>"
                                        title="Cloud Zoom has many configuration options to match the look and feel of your website"
                                        alt="Cloud Zoom thumb image" data-cloudzoom='
                        useZoom:"#zoom1",
                        image:"<?php echo  $product['image'] ?>",
                        zoomImage:""<?php echo  $product['image'] ?>""
                        '>
                                </a>
                                <a href="<?php echo  $product['image2'] ?>" class="thumb-link">
                                    <img class="cloudzoom-gallery" width="64" src="<?php echo  $product['image2'] ?>"
                                        title="Cloud Zoom has many configuration options to match the look and feel of your website"
                                        alt="Cloud Zoom thumb image" data-cloudzoom='
                        useZoom:"#zoom1",
                        image:<?php echo  $product['image3'] ?>,
                        zoomImage:"<?php echo  $product['image2'] ?>"
                        '>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 chitiet-phai">
                    <div class="id" style="display: none;"><?php echo $product['id']; ?></div>
                    <h1 class="name_data"><?php echo $product['name']; ?></h1>
                    <div class="psCode" style="color: #999;font-weight: 300">Mã sản phẩm: AL<?php echo $product_id ?>
                    </div>

                    <div class="price" style="font-size: 24px;">
                        <p>
                            <span class="price_data" style="display: none;"><?php echo $product['price'] ?></span>
                            <span><?php echo  number_format($product['price'], 0, ',', '.'); ?></span>
                            <span> vnđ</span>
                        </p>
                    </div>
                    <div class="sp">
                        <br>
                        <p>Free size</p>
                        <div class="quantity">
                            <p class="qty" style="display:block; padding:5px 0">
                                <b>
                                    <i id="psQttDown">-</i>
                                    <i id="psQtt">1</i>
                                    <i id="psQttUp">+</i>
                                </b>
                                <span class="addCart" style="display: inline-block;cursor: pointer;">Thêm vào yêu
                                    thích</span>
                            </p>
                        </div>
                        <br>
                        <a class="addCart btn" href="gio-hang.php">MUA NGAY</a>
                    </div>
                </div>
                <div>
                    <h2 class=" text-orange">THÔNG TIN SẢN PHẨM </h2>
                    <div class="nav-divider"></div>
                    <p style="font-size: 20px; padding-left:60px"><b>Gender</b>: Unisex</p>
                    <p style="font-size: 20px; padding-left:60px"><b>Size</b> run: 35 – 46</p>
                    <p style="font-size: 20px; padding-left:60px"><b>Upper</b>: Eco Nylon Fabric</p>
                    <p style="font-size: 20px; padding-left:60px"><b>Outsole</b>: Rubber</p>
                    <div style="text-align: center;"><img
                            src="	https://ananas.vn/wp-content/uploads/Ananas_SizeChart.jpg" alt=""></div>
                    <h2 class="text-orange"> QUY ĐỊNH ĐỔI SẢN PHẨM </h2>
                    <ul class="list-qd">
                        <li>-Chỉ đổi hàng 1 lần duy nhất, mong bạn cân nhắc kĩ trước khi quyết định.</li>
                        <li>-Thời hạn đổi sản phẩm khi mua trực tiếp tại cửa hàng là 07 ngày, kể từ ngày mua. Đổi
                            sản
                            phẩm khi mua online là 14 ngày, kể từ ngày nhận hàng.</li>
                        <li>-Sản phẩm đổi phải kèm hóa đơn. Bắt buộc phải còn nguyên tem, hộp, nhãn mác.</li>
                        <li>-Sản phẩm đổi không có dấu hiệu đã qua sử dụng, không giặt tẩy, bám bẩn, biến dạng.</li>
                        <li>-Ananas chỉ ưu tiên hỗ trợ đổi size. Trong trường hợp sản phẩm hết size cần đổi, bạn có
                            thể đổi sang 01 sản phẩm khác:
                            - Nếu sản phẩm muốn đổi ngang giá trị hoặc có giá trị cao hơn, bạn sẽ cần bù khoảng
                            chênh lệch tại thời điểm đổi (nếu có).
                            - Nếu bạn mong muốn đổi sản phẩm có giá trị
                        </li>
                        <li>-Trong trường hợp sản phẩm - size bạn muốn đổi không còn hàng trong hệ thống. Vui lòng
                            chọn sản phẩm khác.</li>
                        <li>-Không hoàn trả bằng tiền mặt dù bất cứ trong trường hợp nào. Mong bạn thông cảm.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <?php require_once('./layout/footer.php') ?>



    <!-- Modal đăng nhập -->
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" role="form">
                        <legend>Form title</legend>
                        <div class="form-group">
                            <label for="">Tài Khoản</label>
                            <input type="text" class="form-control" id="" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Mật Khẩu</label>
                            <input type="text" class="form-control" id="" placeholder="Input field">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal đăng nhập -->
    <script type="text/javascript" src="js/cloudzoom.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/handleProductDetails.js"></script>

</body>

</html>