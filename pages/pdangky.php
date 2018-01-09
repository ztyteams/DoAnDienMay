<?php
    if(isset($_POST["txtTenDangNhap"]) && isset($_POST["txtMatKhau"]) && isset($_POST["txtHoTen"]))
    {
		$hoten = $_POST["txtHoTen"];
		$ngay = $_POST["CbxNgay"]; $thang = $_POST["CbxThang"]; $nam = $_POST["CbxNam"];
        $us = $_POST["txtTenDangNhap"]; $ps = $_POST["txtMatKhau"];
		$addr = $_POST["CbxThanhPho"];
		$sdt = $_POST["txtSDT"];
        $sql = "INSERT INTO taikhoan(
				taikhoan.TenDangNhap,
				taikhoan.MatKhau,
				taikhoan.TenHienThi,
				taikhoan.DiaChi,
				taikhoan.DienThoai,
				taikhoan.BiXoa,
				taikhoan.MaLoaiTaiKhoan)
				VALUES('".$us."','".$ps."','".$hoten."','".$addr."','".$sdt."',0,1)";
		DataProvider::ExecuteQuery($sql);
		include ("modules/mDKThanhCong.php");
	)
	else
		include ("modules/mDKThatBai.php");
		
?>