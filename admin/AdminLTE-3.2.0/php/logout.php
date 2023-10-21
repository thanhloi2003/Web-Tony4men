<?php
session_start();

// Hủy tất cả các biến session
$_SESSION = array();

// Hủy phiên session
session_destroy();

// Chuyển hướng về trang đăng nhập hoặc trang chính
header("Location: http://localhost/Web%20Tony4men%20-%20Sao%20ch%C3%A9p/");
exit;
