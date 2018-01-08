<h2><img src="img/HOT.png" width="50">SẢN PHẨM BÁN CHẠY</h2>
<?php
    $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL
            FROM SanPham
            WHERE SanPham.BiXoa = FALSE
            ORDER BY SanPham.SoLuongBan DESC
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