<?php
    function Doanh_Thu(){
        $sql ="SELECT SUM(tong_gia) AS doanh_thu FROM hoa_don WHERE `trang_thai` = 2;";
        return pdo_query($sql);
    }

    function So_Luong_Nguoi_Dung(){
        $sql ="SELECT COUNT(id_kh) as so_luong_kh FROM khach_hang";
        return pdo_query($sql);
    }

    function So_Luong_San_Pham(){
        $sql ="SELECT COUNT(id_sp) as so_luong_sp FROM san_pham";
        return pdo_query($sql);
    }

    function So_Luong_Don_Hang_Hoan_Thanh(){
        $sql ="SELECT COUNT(id_hoa_don) as so_luong_hd FROM hoa_don WHERE `trang_thai` = 2";
        return pdo_query($sql);
    }

    function So_Luong_Don_Hang_Huy(){
        $sql ="SELECT COUNT(id_hoa_don) as so_luong_hd FROM hoa_don WHERE `trang_thai` = 3";
        return pdo_query($sql);
    }

    function So_Luong_Binh_Luan(){
        $sql ="SELECT COUNT(id_bl) as so_luong_bl FROM binh_luan";
        return pdo_query($sql);
    }
    function Top_5_User(){
        $sql ="SELECT khach_hang.ho_ten, khach_hang.sdt, COUNT(hoa_don.id_hoa_don) AS so_lan_mua, SUM(hoa_don.tong_gia) AS tong_gia_tri FROM hoa_don JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE `trang_thai` = 2 GROUP BY hoa_don.id_kh ORDER BY tong_gia_tri DESC LIMIT 5";
        return pdo_query($sql);
    }

    function Doanh_Thu_Theo_Ngay(){
        $sql ="SELECT ngay_tao, SUM(tong_gia) AS doanh_thu FROM hoa_don WHERE `trang_thai` = 2 GROUP BY ngay_tao;";
        return pdo_query($sql);
    }

    function Doanh_Thu_Theo_Tuan(){
        $sql ="SELECT CONCAT('Tuần ',WEEK(ngay_tao)) AS tuan, SUM(tong_gia) AS doanh_thu FROM hoa_don WHERE YEAR(ngay_tao) = YEAR(CURDATE()) AND `trang_thai` = 2 GROUP BY tuan";
        return pdo_query($sql);
    }

    function Doanh_Thu_Theo_Thang(){
        $sql ="SELECT CONCAT('Tháng ', MONTH(ngay_tao)) AS thang, SUM(tong_gia) AS doanh_thu FROM hoa_don WHERE YEAR(ngay_tao) = YEAR(CURDATE()) AND `trang_thai` = 2 GROUP BY thang;";
        return pdo_query($sql);
    }

    function Bieu_Do_Danh_Muc(){
        $sql = "SELECT dm.ten_dm, COUNT(sp.id_sp) AS so_luong_san_pham FROM san_pham sp JOIN danh_muc dm ON sp.id_dm = dm.id_dm GROUP BY dm.ten_dm";
        return pdo_query($sql);
    }

    function Top_3_San_Pham_Ban_Chay(){
        $sql ="SELECT hdct.ten_sp, SUM(hdct.quantity) AS quantity, SUM(hdct.quantity * hdct.gia) AS tong_gia FROM hoa_don_chi_tiet hdct JOIN hoa_don hd ON hd.id_hoa_don = hdct.id_hoa_don WHERE hd.trang_thai = 2 GROUP BY hdct.ten_sp ORDER BY tong_gia DESC LIMIT 3";
        return pdo_query($sql);
    }

?>