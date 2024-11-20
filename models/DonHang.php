<?php 

class DonHang{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function addDonHang($tai_khoan_id, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $ghi_chu, $tong_tien, $phuong_thuc_thanh_toan_id, $ngay_dat, $ma_don_hang, $trang_thai_id){
        try{
            $sql = "INSERT INTO don_hang (tai_khoan_id, ten_nguoi_nhan, email_nguoi_nhan, sdt_nguoi_nhan, dia_chi_nguoi_nhan, ghi_chu, tong_tien, phuong_thuc_thanh_toan_id, ngay_dat, ma_don_hang, trang_thai_id) 
            VALUES (:tai_khoan_id, :ten_nguoi_nhan, :email_nguoi_nhan, :sdt_nguoi_nhan, :dia_chi_nguoi_nhan, :ghi_chu, :tong_tien, :phuong_thuc_thanh_toan_id, :ngay_dat, :ma_don_hang, :trang_thai_id)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':tai_khoan_id' => $tai_khoan_id, 
                ':ten_nguoi_nhan' => $ten_nguoi_nhan, 
                ':email_nguoi_nhan' => $email_nguoi_nhan, 
                ':sdt_nguoi_nhan' => $sdt_nguoi_nhan, 
                ':dia_chi_nguoi_nhan' => $dia_chi_nguoi_nhan, 
                ':ghi_chu' => $ghi_chu, 
                ':tong_tien' => $tong_tien, 
                ':phuong_thuc_thanh_toan_id' => $phuong_thuc_thanh_toan_id, 
                ':ngay_dat' => $ngay_dat,
                ':ma_don_hang' => $ma_don_hang,
                ':trang_thai_id' => $trang_thai_id
            ]);
            return $this->conn->lastInsertId();
        }catch(PDOException $e){
            echo "Loi: ". $e->getMessage();
        }
    }

    public function addChiTietDonHang($donHangId, $sanPhamId, $donGia, $soLuong, $thanhTien){
        try{
            $sql = "INSERT INTO chi_tiet_don_hang (don_hang_id, san_pham_id, don_gia, so_luong, thanh_tien) 
            VALUES (:don_hang_id, :san_pham_id, :don_gia, :so_luong, :thanh_tien)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':don_hang_id' => $donHangId, 
                ':san_pham_id' => $sanPhamId, 
                ':don_gia' => $donGia, 
                ':so_luong' => $soLuong,
                ':thanh_tien' => $thanhTien
            ]);
        }catch(PDOException $e){
            echo "Loi: ". $e->getMessage();
        }
    }
}