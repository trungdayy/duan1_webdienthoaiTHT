<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/SanPham.php';
require_once './models/TaiKhoan.php';
require_once './models/DanhMuc.php';
require_once './models/GioHang.php';
require_once './models/DonHang.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {

    //route
    '/' => (new HomeController())->home(),
    'trangchu' => (new HomeController())->trangchu(),
    'chi-tiet-san-pham' => (new HomeController())->chiTietSanPham(),
    'san-pham' => (new HomeController())->SanPham(),

    'gio-hang' => (new HomeController())->gioHang(),
    'them-gio-hang' => (new HomeController())->addGioHang(),
    'thanh-toan' => (new HomeController())->thanhToan(),
    'xu-ly-thanh-toan' => (new HomeController())->postThanhToan(),
    //'danhmuc' => (new HomeController())->DanhMuc(),

    // login
    'login' => (new HomeController())->formLogin(),
    'check-login' => (new HomeController())->postLogin(),
};