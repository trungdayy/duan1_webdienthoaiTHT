<?php
class SanPham{
    public $conn; // khai báo phương thức

    public function __construct()
    {
        $this-> conn = connectDB();
    }

    public function getAllProduct(){
        try{
            $sql = "SELECT * FROM sanpham";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "Loi". $e->getMessage();
        }
    }
}
?>