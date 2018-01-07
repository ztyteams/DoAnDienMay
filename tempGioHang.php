<form name="frmGioHang" action="index.php?a=13" method="post">
    <tr>
        <td>
            <?php echo $i++; ?>
        </td>
        <td>
            <?php echo $tenSanPham; ?>
        </td>
        <td align="center">
            <img src="images/<?php echo $hinhURL; ?>" width="50" />
        </td>
        <td>
            <?php echo $giaSanPham; ?>
        </td>
        <td>
            <input type="text" name="txtSL" value="<?php echo $p->num; ?>" width="45" size="5" />
            <input type="hidden" name="hdMaSanPham" value="<?php echo $p->id; ?>" />
        </td>
        <td>
            <input type="submit" value="Cập nhật số lượng" />
        </td>
    </tr> 
</form>
