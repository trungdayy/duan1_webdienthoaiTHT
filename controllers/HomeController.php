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

    public function chiTietSanPham(){
        $id = $_GET['id_sanpham'];
        $sanPham = $this->modelSanPham->getDetailSanPham($id);
        $listAnhSanPham = $this->modelSanPham->getListAnhSanPham($id);
        $listBinhLuan = $this->modelSanPham->getBinhLuanFromSanPham($id);
        //var_dump($listBinhLuan);die();
        $listSanPhamCungDanhMuc = $this->modelSanPham->getListSanPhamDanhMuc($sanPham['danh_muc_id']);
        //var_dump($listSanPhamCungDanhMuc);die();
        if($sanPham){
            require_once './views/detailSanPham.php';
        }else{
            header("Location: " . BASE_URL);
            exit();
        }

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