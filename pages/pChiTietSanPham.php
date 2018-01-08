<?php
    if(isset($_GET['id']))
    {
        $maSanPham = $_GET['id'];
        $sql = "SELECT sanpham.MaSanPham, sanpham.TenSanPham, sanpham.GiaSanPham, sanpham.HinhURL, sanpham.SoLuongTon, loaisanpham.TenLoaiSanPham, hangsanxuat.TenHangSanXuat, sanpham.MoTa,sanpham.SoLuocXem
                FROM sanpham, loaisanpham, hangsanxuat
                WHERE sanpham.BiXoa = FALSE AND sanpham.MaSanPham = $maSanPham AND sanpham.MaLoaiSanPham = loaisanpham.MaLoaiSanPham AND sanpham.MaHangSanXuat = hangsanxuat.MaHangSanXuat;";
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
			$soLuocXem=$row["SoLuocXem"];
            include ("templates/tempChiTietSanPham.php");
        }
    }
    else
    {
        DataProvider::ChangeURL("index.php");
    }
?>
