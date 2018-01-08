<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPS"]))
    {
        $us = $_POST["txtUS"];
        $ps = $_POST["txtPS"];

        $sql = "SELECT MaTaiKhoan, TenHienThi, MaLoaiTaiKhoan
                FROM TaiKhoan
                WHERE BiXoa = 0 AND TenDangNhap = '$us'
                                AND MatKhau = '$ps'";

        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row != null)
        {
            $_SESSION["maTaiKhoan"] = $row["MaTaiKhoan"];
            $_SESSION["tenHienThi"] = $row["TenHienThi"];
            $_SESSION["maLoaiTaiKhoan"] = $row["MaLoaiTaiKhoan"];

            if($_SESSION["maLoaiTaiKhoan"] == 2) {
                DataProvider::ChangeURL("admin/index.php");
            }
            else {
                 DataProvider::ChangeURL("index.php");
            }
        }
        else
            DataProvider::ChangeURL("index.php?a=0&id=4");
    }
    else
        DataProvider::ChangeURL("index.php?a=0&id=4");

?>