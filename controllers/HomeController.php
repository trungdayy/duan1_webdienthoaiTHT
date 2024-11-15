<?php 

class HomeController
{
    public $modelSanPham;

    public function __construct(){
        $this->modelSanPham = new SanPham();

    }

    public function home(){
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listSanPhamHot = $this->modelSanPham->getSanPhamHot();
        require_once './views/home.php';
        
    }

    public function getSanPhamHot(){
        $listSanPhamHot = $this->modelSanPham->getSanPhamHot();
        return $listSanPhamHot;
    }

    public function trangchu(){
        echo "Đây là trang chủ của tôi";
    }

    // public function danhSachSanPham(){
    //     //echo "Đây là danh sách sản phẩm của tôi";
    //     $listProduct = $this->modelSanPham->getAllProduct();
    //     //var_dump($listProduct);
    //     require_once './views/listProduct.php';
    // }
}