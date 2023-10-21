<?php
session_start()
?>
<div class="container">
    <div class="head">
        <div class="seach">
            <form action="" method="post">
                <input type="text" id="textSeach" placeholder="Tìm kiếm">
            </form>
        </div>
        <div class="account">
            <?php
           
        
            if (isset($_SESSION["username"])) {
                // If the username session variable is set (user is logged in)
                echo '<span>Xin chào, ' . $_SESSION["username"] . '</span>';
                echo '<a href="/Web%20Tony4men%20-%20Sao%20chép/php/handleLogout.php">Đăng xuất</a>';
            } else {
                // If the username session variable is not set (user is not logged in)
                echo '<a href="#modal-dang-ky" data-toggle="modal">Đăng ký</a>';
                echo '<a href="#modal-login" data-toggle="modal">Đăng Nhập</a>';
            }
            ?>
        </div>
    </div>
</div>
<div class="container">
    <header class="header1">
        <div style="position: relative; border-bottom: 1px solid #dbdbdb; padding-bottom: 15px">
            <div class="logo">
                <a href="index.php" title="">
                    <img src="images/icon/logo.jpg" alt="">
                </a>
            </div>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown-toggle">TRANG CHỦ <b></b></a>
                    </li>
                    <li class="">
                        <a href="product.php?sanpham=male">NAM</a>

                    </li>
                    <li>
                        <a href="product.php?sanpham=female">NỮ
                            <b></b></a>

                    </li>
                    <li>
                        <a href="product.php?sanpham=accessory">PHỤ KIỆN
                            <b></b></a>

                    </li>
                    <li>
                        <a href="product.php?sanpham=newshoe">HÀNG MỚI <b></b></a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHÍNH SÁCH <b></b></a>
                        <ul class="dropdown-menu" id="text8">
                            <li><a href="chinhsachgiaohang.php">Chính Sách Giao Hàng</a></li>
                            <li><a href="chinhsachbaomat.php">Chính Sách Bảo Mật</a></li>
                            <li><a href="chinhsachdoitra.php">Chính Sách Đổi Trả</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </header>

</div>
<div class="modal fade" id="modal-login">
    <!-- /.phone đăng nhập-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Đăng nhập hệ thống</h4>
            </div>
            <div class="modal-body">
                </form>
                <form action="./php/handleLogin.php" name="login-from" method="POST" role="form">

                    <div class="form-group">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Input field">
                    </div>

                    <button type="submit" onclick="return checkbox()" class="btn btn-success btn-block">Đăng
                        nhập</button>

                    <a href="" class="btn btn-danger btn-block">G+ google</a>
                    <a href="" class="btn btn-primary btn-block">F Facebook</a>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-dang-ky">
    <!-- /.phone đăng kí-->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Đăng ký tài khoản</h4>
            </div>
            <div class="modal-body" style="overflow: hidden;">
                <form action="./php/handleRegister.php" method="POST" name="login-froma" role="form">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" id="meta" onkeypress="return add(event)" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="meta1" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="meta2" placeholder="Input field">
                        </div>
                        <a href="" class="btn btn-danger btn-block">G+ google</a>
                        <a href="" class="btn btn-primary btn-block">F Facebook</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id="meta3" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for="">Điện thoại</label>
                            <input type="text" name="phone_number" class="form-control" id="meta4" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="meta5" placeholder="Input field">
                        </div>
                        <button type="submit" class="btn btn-success btn-block" onclick="checkboxa()">Đăng
                            ký</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#zoom1').bind('click', function() {
            var cloudZoom = $(this).data('CloudZoom');
            cloudZoom.closeZoom();
            $.fancybox.open(cloudZoom.getGalleryList());
            return false;
        });
    });

    CloudZoom.quickStart();
    JetZoom.quickStart();
    StarZoom.quickStart();

    function checkbox() {
        var my_form = document.forms['login-from'];

        if (my_form.username.value == '') {
            alert("Vui lòng nhập tên tài khoản");
            document.getElementById("username").focus();
            return false;
        }
        if (my_form.password.value == '') {
            alert("Vui lòng nhập mật khẩu");
            document.getElementById("password").focus();
            return false;
        }

    }
    //end

    function checkboxa() {
        var my_form = document.forms['login-froma'];
        if (my_form.meta.value == '') {
            alert("Vui lòng nhập tên đăng nhập");
            document.getElementById("meta").focus();
            return false;
        }
        if (my_form.meta1.value == '') {
            alert("Vui lòng nhập mật khẩu");
            document.getElementById("meta1").focus();
            return false;
        }
        if (my_form.meta2.value == '') {
            alert("Vui lòng nhập lại mật khẩu");
            document.getElementById("meta2").focus();
            return false;
        }
        if (my_form.meta3.value == '') {
            alert("Vui lòng nhập email");
            document.getElementById("meta3").focus();
            return false;
        }
        if (my_form.meta4.value == '') {
            alert("Vui lòng nhập số điện thoại");
            document.getElementById("meta4").focus();
            return false;
        }
        if (my_form.meta5.value == '') {
            alert("Vui lòng nhập địa chỉ");
            document.getElementById("meta5").focus();
            return false;
        }
        return true;
    }


    function add(event) {
        var charCode = event.keyCode;
        if ((charCode <= 90 && charCode >= 65) || charCode == 32) {
            return charCode;
        }
    }
    //kiểm tra đăng nhập liên hệ
    function checkboxx() {
        var my_form = document.forms['login-formb'];

        if (my_form.hoten.value == '') {
            alert("Vui lòng nhập họ tên");
            document.getElementById("hoten").focus();
            return false;
        }
        if (my_form.emaill.value == '') {
            alert("Vui lòng nhập email");
            document.getElementById("emaill").focus();
            return false;
        }
    }
</script>