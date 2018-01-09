<h2><img src="img/HOT.png" width="50">SẢN PHẨM BÁN CHẠY</h2>
<?php
    $sql = "SELECT sanpham.MaSanPham, sanpham.TenSanPham, sanpham.GiaSanPham, sanpham.HinhURL
            FROM sanpham
            WHERE sanpham.BiXoa = FALSE
            ORDER BY sanpham.SoLuongBan DESC
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