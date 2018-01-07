<dl>
    <dt class="myfont">HÃNG SẢN XUẤT</dt>
    <?php
        $sql = "SELECT HangSanXuat.MaHangSanXuat, HangSanXuat.TenHangSanXuat
                FROM HangSanXuat
                WHERE HangSanXuat.BiXoa = FALSE";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $name = $row["TenHangSanXuat"];
            $url = "index.php?a=2&idh=".$row["MaHangSanXuat"];
            include "templates/tempMenu.php";
        }
    ?>
   
</dl>