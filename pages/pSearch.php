<div>
	<?php $search =$_POST["searchtext"];?> 
	<span class="label1">Kết quả tìm kiếm của: <?php echo $search; ?> </span>
</div>	
<?php
        if(isset($_POST["searchtext"]))
    {
        $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL, SanPham.SoLuongTon, LoaiSanPham.TenLoaiSanPham, HangSanXuat.TenHangSanXuat, SanPham.MoTa
                FROM SanPham, LoaiSanPham, HangSanXuat
                WHERE SanPham.TenSanPham like N'%".$search."%' and SanPham.BiXoa=FALSE";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $hinhURL = $row["HinhURL"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $tenHangSanXuat = $row["TenHangSanXuat"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            $soLuongTon = $row["SoLuongTon"];
			$maSanPham =$row["MaSanPham"];
            $moTa = $row["MoTa"];
            include ("templates/tempThumbProduct.php");
        }
    }
?>