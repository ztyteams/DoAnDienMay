<?php
    if(isset($_POST["txtSL"]) && isset($_POST["hdMaSanPham"]))
    {
        $sl = $_POST["txtSL"];
        $id = $_POST["hdMaSanPham"];

        if(is_numeric($sl)) {
            $gioHang = unserialize($_SESSION["gioHang"]);
            if ($sl == 0)
                $gioHang->delete($id);
            else
                if($sl > 0)
                    $gioHang->update($id, $sl);
            $_SESSION["gioHang"] = serialize($gioHang);
        }
    }
    DataProvider::ChangeURL('index.php?a=6');
?>