<?php
    if(isset($_GET['id']))
    {
        $maSanPham = $_GET['id'];
        $gioHang = new ShoppingCart();
        if(isset($_SESSION['gioHang']))
            $gioHang = unserialize($_SESSION['gioHang']);
        $gioHang->Add($maSanPham);
        $_SESSION['gioHang'] = serialize($gioHang);

        DataProvider::ChangeURL('index.php?a=6');
    }
    else
    {
        DataProvider::ChangeURL('index.php?a=0&id=3');
    }

?>