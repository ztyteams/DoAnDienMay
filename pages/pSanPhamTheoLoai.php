<?php
	$ids = $_GET['ids'];
	$sqlloai = "Select TenLoaiSanPham from loaisanpham where MaLoaiSanPham=".$ids;
	$resultloai = DataProvider::ExecuteQuery($sqlloai);
	$row = mysqli_fetch_row($resultloai);
?>
<h2>Danh sách sản phẩm theo loại <span style="color:#900"><?php echo $row[0]?></span></h2>
<?php
    if(isset($_GET["ids"]) == false)
        DataProvider::ChangeURL("index.php?a=0&ids=1");

    $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL
            FROM SanPham
            WHERE SanPham.BiXoa = FALSE AND SanPham.MaLoaiSanPham = ".$_GET["ids"];
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