<?php
class SanPham{
    public $conn; // khai báo phương thức

    public function __construct()
    {
        $this-> conn = connectDB();
    }

    // public function getAllProduct(){
    //     try{
    //         $sql = "SELECT * FROM sanpham";
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     }catch(Exception $e){
    //         echo "Loi". $e->getMessage();
    //     }
    // }

    public function getAllSanPham(){
        try{
            $sql = "SELECT sanpham.*, danhmuc.ten_loai 
            FROM sanpham INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
            ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "Loi". $e->getMessage();
        }
    }

    public function getSanPhamHot() {
        try {
            $sql = "SELECT sanpham.*, danhmuc.ten_loai 
                    FROM sanpham 
                    INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
                    WHERE sanpham.is_hot = 1"; // Giả định có cột 'is_hot' để đánh dấu sản phẩm HOT
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
}
?>