<?php
	$idh = $_GET['idh'];
	$sqlhang = "Select TenHangSanXuat from hangsanxuat where MaHangSanXuat=".$idh;
	$resulthang = DataProvider::ExecuteQuery($sqlhang);
	$row = mysqli_fetch_row($resulthang);
?>
<h2>Danh sách sản phẩm hãng <span style="color:#900"><?php echo $row[0]?></span></h2>
<?php
    if(isset($_GET["idh"]) == false)
        DataProvider::ChangeURL("index.php?a=0&idh=1");

    $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL
            FROM SanPham
            WHERE SanPham.BiXoa = FALSE AND SanPham.MaHangSanXuat = ".$_GET["idh"];
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