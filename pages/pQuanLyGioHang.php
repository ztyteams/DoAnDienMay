<div id="quanlygiohang">
    <h1>Quản lý giỏ hàng</h1>
    <table align="center" width="1000px">
        <tr>
            <th width="20">STT</th>
            <th>Tên sản phẩm</th>
            <th width="60">Hình</th>
            <th width="50">Giá</th>
            <th width="50">Số lượng</th>
            <th width="50">Thao tác</th>
        </tr>
        <?php
            $tongTien = 0;
            if(isset($_SESSION["gioHang"]))
            {
                $gioHang = unserialize($_SESSION["gioHang"]);
                $i = 1;

                foreach($gioHang->listProduct as $p)
                {
                    $sql = "SELECT TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE MaSanPham = $p->id";
                    $result = DataProvider::ExecuteQuery($sql);
                    $row = mysqli_fetch_array($result);

                    $tenSanPham = $row['TenSanPham'];
                    $maSanPham = $p->id;
                    $hinhURL = $row['HinhURL'];
                    $giaSanPham = $row['GiaSanPham'];

                    include("templates/tempGioHang.php");
                    $tongTien += $p->num * $giaSanPham;
                }
            }
        ?>

    </table>
    <div class="pprice">
        Tổng thành tiền: <?php echo number_format($tongTien); ?> đ
        <?php
            $_SESSION["TongTien"] = $tongTien;
        ?>
    </div>
    <a href="pages/qlGioHang/exDatHang.php">
        <img src="img/dathang.png" width="100">
    </a>
</div>