<?php 

class AdminTaiKhoan{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllTaiKhoan($role)
    {
        try {
            $sql = "SELECT * FROM tai_khoan WHERE role = :role";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':role' => $role]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }

    public function insertTaiKhoan($hoten, $email, $password, $role){
        try {
            $sql = "INSERT INTO tai_khoan (hoten, email, mat_khau, role) 
            VALUES (:hoten, :email, :password, :role)";
            $stmt = $this->conn->prepare($sql);
            //var_dump($stmt);die();
            $stmt->execute([
            ':hoten' => $hoten, 
            ':email' => $email, 
            ':password' => $password, 
            ':role' => $role
        ]);
            return true;
        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }
    public function getDetailTaiKhoan($id){
        try{
            $sql = "SELECT * FROM tai_khoan WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        }catch(Exception $e){
            echo "Loi" . $e->getMessage();
        }
    }
    
    public function updateTaiKhoan($id, $hoten, $email, $dienthoai, $trang_thai){
        try {
            $sql = "UPDATE tai_khoan SET 
            hoten = :hoten, 
            email = :email, 
            dienthoai = :dienthoai, 
            trang_thai = :trang_thai 
            WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':hoten' => $hoten,
                ':email' => $email,
                ':dienthoai' => $dienthoai,
                ':trang_thai' => $trang_thai,
                ':id' => $id
            ]);

            return true;

        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }
    public function deletePassword($id, $mat_khau){
        try {
            $sql = "UPDATE tai_khoan 
            SET 
            mat_khau = :mat_khau 
            WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            //var_dump($stmt); die();
            $stmt->execute([
                ':mat_khau' => $mat_khau,
                
                ':id' => $id
            ]);

            return true;

        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }

    public function updateKhachHang($id, $hoten, $email, $dienthoai, $ngay_sinh, $gioi_tinh, $diachi, $trang_thai)
    {
        try {
            $sql = "UPDATE tai_khoan SET 
            hoten = :hoten, 
            email = :email, 
            dienthoai = :dienthoai, 
            ngay_sinh = :ngay_sinh, 
            gioi_tinh = :gioi_tinh, 
            diachi = :diachi, 
            trang_thai = :trang_thai 
            WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':hoten' => $hoten,
                ':email' => $email,
                ':dienthoai' => $dienthoai,
                ':ngay_sinh' => $ngay_sinh,
                ':gioi_tinh' => $gioi_tinh,
                ':diachi' => $diachi,
                ':trang_thai' => $trang_thai,
                ':id' => $id
            ]);

            return true;

        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }
}
?>