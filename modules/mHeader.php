<div id="header">
    <a href="index.php">
        <div style="width:1000px; height:100px; background-color:#00004d;top: 0px;">
        	<h1 class="myfont" style="color: #33adff; padding:30px 0px 0px 20px; font-size:32px; text-shadow:2px 1px #0033cc"> ĐIỆN MÁY ZTYSHOP </h1>
        </div>
    </a>
    <div id="login_nav">
        <?php
            if(isset($_SESSION['maTaiKhoan']))
            {
                include ("modules/mThongTinTaiKhoan.php");
            }
            else
            {
                include ("modules/mDangNhapTaiKhoan.php");
            }
        ?>
        
    </div>
    <img src="img/banner.png" width="1000px" height="200px">
	<!-- them thu vien mSearch.php vo -->
	<?php 
		include ("modules/mSearch.php");
	?>
	</div>