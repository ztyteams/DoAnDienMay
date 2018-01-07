<div id="header">
    <a href="index.php">
        <div style="width:1000px; height:110px; background-color:#0CF">
        	<h1 style="color:#FC0; padding:30px 0px 0px 20px; font-size:30px; font-style:italic; text-shadow:1px 1px #FF0000"> ĐIỆN MÁY DT </h1>
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
        	<div style="float:right; margin-top:5px">
        			<input type="text" id="searchfor" name="searchtext" size="30" />
            		<input type="submit" id="searchbtn" value="Search" placeholder="Search" />
       		</div>
	</div>