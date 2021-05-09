<?php
session_start();
/**
 * logout.php
 * Xử lý logout tài khoản
 * Xóa tất cả các session sinh ra lúc đăng nhập thành công
*/
unset($_SESSION['email']);
$_SESSION['success'] = "Đăng xuất thành công";
// Chuyển hướng về trang đăng nhập
header('Location:login.php');
exit();
?>