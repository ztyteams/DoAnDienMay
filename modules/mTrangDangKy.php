  <?php
 	include_once('lib/DataProvider.php');
 	$tendn = '';
	$hoten ='';
	$sdt='';
	$err='';
	
 	if(isset($_POST['btnkiemtra']))
	{
		$tendn = $_POST['txtTenDangNhap'];
		$hoten =$_POST['txtHoTen'];
		$sdt=$_POST['txtSDT'];
		$sql="select TenDangNhap from taikhoan where TenDangNhap='$tendn'";
		$result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_row($result);
			if($tendn == $row[0])
			{
				$err='Tên đăng nhập của bạn đã tồn tại';	
			}
			else
			{
				$err='Tên đăng nhập có thể sử dụng';	
			}
	}
	
 ?>
 </div>
   <h1 style="color:#F03;margin:3% 0 0 40%"><i>ĐĂNG KÝ TÀI KHOẢN CHO KHÁCH HÀNG</i></h1></br>  
      <div style=" margin:1% 0 5% 40%; background-color:#09F; width:450px; height:600px">    
		<form method="post" onsubmit="return KiemTraDangKy()">
        <h2 style="color:#F03; padding:5px 0 0 5px">Thông tin cá nhân:</h2>
    	<div style="margin:0 0 0 15%; width:100%">
    	<p><b>Họ và tên</b></p>
            <input style="width:72%" type ="text" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ và tên" value="<?php echo $hoten?>"/>
            <p><b>Ngày/Tháng/Năm</b></p>
         			<select style="width:17%; height:15%" id="CbxNgay">
                     		<option>[Ngày]</option>
                            <?php
								for($i=1;$i<31;$i++)
								{
									echo '<option>'.$i.'</option>';	
								}
							?>
                	</select>
               		 <select style="width:32%; height:20%" id="CbxThang">
                     		<option>[Tháng]</option>
                			<?php
								for($i=1;$i<=12;$i++)
								{
									echo '<option>'.$i.'</option>';	
								}
							?>
                	</select>
            		<select style="width:23%; height:20%" id="CbxNam">
                     		<option>[Năm]</option>
                			<?php
								for($i=1990;$i<=2000;$i++)
								{
									echo '<option>'.$i.'</option>';	
								}
							?>
                	</select>
            	<p><b>Bạn ở đâu</b></p>
                	<select style="width:73%" id="CbxThanhPho">
                     		<option>--Chọn thành phố--</option>
                			<option>TPHCM</option>
                   		 	<option>Long An</option>
                   		 	<option>TP Cần Thơ</option>
                   		 	<option>Tiền Giang</option>
                   		 	<option>Kiên Giang</option>
                   		 	<option>Bạc Liêu</option>
                    		<option>Bến Tre</option>
                   			<option>Cà Mau</option>
                   			<option>Sóc Trăng</option>
                   		 	<option>Vĩnh Long</option>
                   		 	<option>Hậu Giang</option>
                	</select>
              	<p><b>Số điện thoại của bạn</b></p>
                <input style="width:72%" type ="text" id="txtSDT" name="txtSDT"placeholder="Nhập số điện thoại của bạn" value="<?php echo $sdt?>"/>
            </div>
        	<h2 style="color:#F03; padding:5px 0 0 5px">Thông tin tài khoản:</h2>
            <div style="margin:0 0 0 15%; width:100%">
            	<p><b>Tên đăng nhập</b></p>
                <input style="width:52%" type="text" id="txtTenDangNhap" name="txtTenDangNhap" value="<?php echo $tendn?>"/>  
                <input style="width:20%" type="submit" name="btnkiemtra" value="Kiểm tra"/>
                <?php
					echo '<h4>'.$err.'</h4>';
				?>
                 <p><b>Mật khẩu</b></p>
                  <input style="width:52%" id="txtMatKhau" type="password"/>
                  <p><b>Xác nhận mật khẩu</b></p>
                	<input style="width:52%" type ="password" id="txtXacNhanMK" placeholder="Xác nhận mật khẩu của bạn"/>
          <div style="margin:5% 0 0 30%">
                  <a href="./index.php"><input style="width:100px ; height:30px" type="button" value="Quay lại"/></a>   	 
                  <a href="index.php?a=21"><input style="width:100px ; height:30px" type="submit" value="Đăng ký"/></a>
           </div>
          </div>
   		</form>
</div>
<script type="text/javascript" language="javascript">
	function KiemTraDangKy()
		{
			var txthoten=document.getElementById('txtHoTen');
			if(txthoten.value=="")
			{
				txthoten.focus();
				alert ("bạn vui lòng điền đầy đủ họ tên");
				return false;
			}
			var cbxNgay=document.getElementById('CbxNgay');
			if(cbxNgay.value=="[Ngày]")
			{
				cbxNgay.focus();
				alert("bạn vui lòng chọn ngày");
				return false;
			}
			var cbxThang=document.getElementById('CbxThang');
			if(cbxThang.value=="[Tháng]")
			{
				cbxThang.focus();
				alert("bạn vui lòng chọn Tháng");
				return false;
			}
			var cbxNam=document.getElementById('CbxNam');
			if(cbxNam.value=="[Năm]")
			{
				cbxNam.focus();
				alert("bạn vui lòng chọn Năm");
				return false;
			}
			var cbxThanhPho=document.getElementById('CbxThanhPho');
			if(cbxThanhPho.value=="--Chọn thành phố--")
			{
				cbxThanhPho.focus();
				alert("bạn vui lòng chọn thành phố");
				return false;
			}
			var txtsdt=document.getElementById('txtSDT');			
			if(txtsdt.value=="")
			{
				txtsdt.focus();
				alert ("bạn vui lòng điền số điện thoại");
				return false;
			}
			var kiemtrasdt=isNaN(txtsdt.value);
			if(kiemtrasdt==true)
			{
				alert("số điện thoại phải ở dạng số");
				return false;
			}
			var txtmatkhau= document.getElementById('txtMatKhau');
			var txtxacnhanMK=document.getElementById('txtXacNhanMK');
			var tenDN = document.getElementById('txtTenDangNhap');
			if(tenDN.value == "")
			{
				tenDN.focus();
				alert("Tên đăng nhập không được rỗng");
			}
			if(txtmatkhau.value=="")
			{
				txtmatkhau.focus();
				alert("mật khẩu không được rỗng");
				return false;
			}
			if (txtmatkhau.value != txtxacnhanMK.value)
			{
				alert("Bạn vui lòng nhập lại mật khẩu");
				return false;
			}
		}
</script>
