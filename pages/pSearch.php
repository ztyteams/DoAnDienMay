<div>
	<?php $search =$_POST["searchtext"];?> 
	<span class="label2">Kết quả tìm kiếm từ: "<b style="font-size: 18px;color: #ff1a1a"><?php echo $search; ?></b>" </span>
</div>	
<?php
		if($search=="" or $search==" ")
		{
?>
			<b style="color: red;font-size: 32px"><?php echo "Không có thông tin từ sản phẩm.... :("; ?></b>
<?php
		}
		else
		{
        if(isset($_POST["searchtext"]))
			{
				$sql = "SELECT sanpham.SoLuocXem,sanpham.XuatXu,sanpham.MaSanPham, sanpham.TenSanPham, sanpham.GiaSanPham, sanpham.HinhURL, sanpham.SoLuongTon, loaisanpham.TenLoaiSanPham, hangsanxuat.TenHangSanXuat, sanpham.MoTa
						FROM sanpham, loaisanpham, hangsanxuat
						WHERE sanpham.TenSanPham LIKE N'%".$search."%' and sanpham.BiXoa=FALSE
						GROUP BY sanpham.MaSanPham";
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
					$soLuocXem= $row["SoLuocXem"];
					$xuatXu=$row["XuatXu"];
					include ("templates/tempThumbProduct.php");
				}
			}
		}
?>