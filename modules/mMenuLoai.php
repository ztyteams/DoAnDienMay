<dl>
    <dt>Loại sản phẩm</dt>
    <?php
        $sql = "SELECT LoaiSanPham.MaLoaiSanPham, LoaiSanPham.TenLoaiSanPham
                FROM LoaiSanPham
                WHERE LoaiSanPham.BiXoa = FALSE";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $name = $row["TenLoaiSanPham"];
            $url = "index.php?a=3&ids=".$row["MaLoaiSanPham"];
            include "templates/tempMenu.php";
        }
    ?>
</dl> 