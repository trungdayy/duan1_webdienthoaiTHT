<?php 

class TaiKhoan{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function checkLogin($email, $mat_khau){
        try{
            $sql="SELECT * FROM tai_khoan WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $user = $stmt->fetch();

            if($user && password_verify($mat_khau,$user['mat_khau'])){
                if($user['role'] == 0){
                    if($user['trang_thai'] == 1){
                        return $user['email']; //dang nhap thanh cong
                    }else{
                        return "Tài khoản bị cấm!";
                    }
                  }else{
                return "Tài khoản không có quyền đăng nhập!"; 
            }
            }else{
                return "Bạn nhập sai tài khoản hoặc mật khẩu!";
            }
        }catch(\Exception $e){
            echo "Lỗi!" . $e->getMessage();
            return false;
        }
    }

    public function getTaiKhoanFromEmail($email){
        try{
            $sql = 'SELECT * FROM tai_khoan WHERE email = :email';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            return $stmt->fetch();
        }catch(Exception $e){
            echo "Loi" . $e->getMessage();
        }
    }

}