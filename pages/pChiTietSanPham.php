<?php
    if(isset($_GET['id']))
    {
        $maSanPham = $_GET['id'];
        $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL, SanPham.SoLuongTon, LoaiSanPham.TenLoaiSanPham, HangSanXuat.TenHangSanXuat, SanPham.MoTa
                FROM SanPham, LoaiSanPham, HangSanXuat
                WHERE SanPham.BiXoa = FALSE AND SanPham.MaSanPham = $maSanPham AND SanPham.MaLoaiSanPham = LoaiSanPham.MaLoaiSanPham AND SanPham.MaHangSanXuat = HangSanXuat.MaHangSanXuat;";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $hinhURL = $row["HinhURL"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $tenHangSanXuat = $row["TenHangSanXuat"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            $soLuongTon = $row["SoLuongTon"];
            $moTa = $row["MoTa"];
            include ("templates/tempChiTietSanPham.php");
        }
    }
    else
    {
        DataProvider::ChangeURL("index.php");
    }
?>
