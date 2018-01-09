<?php
	include("modules/mSearchAdv.php");
?>
<div>
	<?php  if(isset($_POST["txtInfo"])&& isset($_POST["txtMinPrice"]) && isset($_POST["txtMaxPrice"]))
			{			
				$search =$_POST["txtInfo"];
				$min=$_POST["txtMinPrice"];
				$max=$_POST["txtMaxPrice"];
			}
			else{
				$search="";
				$min=0;
				$max=0;
			}
	?> 
	<span class="label2">Kết quả tìm kiếm theo giá sản phẩm: "<b style="font-size: 18px;color: #ff1a1a"><?php echo $search; ?></b>" </span>
</div>	
<?php
		if($search==" ")
		{
?>
			<b style="color: red;font-size: 32px"><?php echo "Không có thông tin từ sản phẩm.... :("; ?></b>
<?php
		}
		else
		{
        if(isset($_POST["txtInfo"])&& isset($_POST["txtMinPrice"]) && isset($_POST["txtMaxPrice"]))
			{
				$sql = "Select sanpham.maSP,sanpham.tenSP,sanpham.giaSP,sanpham.HinhURL,sanpham.SoLuocXem,sanpham.XuatXu
						FROM sanpham,loaisanpham,hangxanxuat
						Where sanpham.BiXoa=Flase and (sanpham.giaSP BETWEEN ".$min." and ".$max.") and sanpham.TenSanPham=N'%".$search."%'
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
					$soLuocXem= $row["SoLuocXem"];
					$xuatXu=$row["XuatXu"];
					$moTa = $row["MoTa"];
					include ("templates/tempThumbProduct.php");
				}
			}
		}
?>