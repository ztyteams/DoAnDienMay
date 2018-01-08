<div id="chitietsp">
    <div id="chitietleft">
        <img src="images/<?php echo $hinhURL; ?>">
    </div>
    <div id="chitietright">
        <div>
            <span class="label">Tên sản phẩm:</span>
            <span class="productname"><?php echo $tenSanPham; ?></span>
        </div>
        <div>
            <span class="label">Giá:</span>
            <span class="price"><?php echo number_format($giaSanPham) ?> đ</span>
        </div>
        <div>
            <span class="label">Hãng sản xuất:</span>
            <span class="factory"><?php echo $tenHangSanXuat; ?></span>
        </div>
        <div>
            <span class="label">Loại sản phẩm:</span>
            <span class="data"><?php echo $tenLoaiSanPham; ?></span>
        </div>
        <div>
            <span class="label">Số lượng tồn:</span>
            <span class="data"><?php echo $soLuongTon; ?> sản phẩm</span>
        </div>
		<div>
			<span class="label">Số lượt xem: </span>
			<span class="data"><?php echo $soLuocXem; ?></span>
		</div>
        <div class="giohang">
            <?php 
                if(isset($_SESSION["maTaiKhoan"]))
                {
                    ?>
                        <a href="index.php?a=12&id=<?php echo $maSanPham; ?>">
                            <img src="img/shopping_cart01.png" width="200">
                        </a>
                    <?php
                }
            ?>
        </div>
		
    </div>
    <div id="mota"><?php echo $moTa; ?></div>
</div>