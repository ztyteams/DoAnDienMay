<?php
    $sql="UPDATE sanpham
		SET sanpham.SoLuocXem=sanpham.SoLuocXem+1
		WHERE sanpham.MaSanPham=".$maSanPham;
		DataProvider::ExecuteQuery($sql);
?>