﻿<h2><img src="img/NEW.png" width="50">SẢN PHẨM MỚI NHẤT</h2>
<?php
    $sql = "SELECT sanPham.MaSanPham, SanPham.TenSanPham, sanpham.GiaSanPham, sanpham.HinhURL
            FROM sanpham           ORDER BY sanpham.NgayNhap DESC
            LIMIT 0, 10";
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        $hinhURL = $row["HinhURL"];
        $tenSanPham = $row["TenSanPham"];
        $giaSanPham = $row["GiaSanPham"];
        $maSanPham = $row["MaSanPham"];
        include ("templates/tempThumbProduct.php");
    }
?>