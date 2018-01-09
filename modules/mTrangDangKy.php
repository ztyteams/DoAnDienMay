 
 
 </div>
   <h1 style="color:#F03;margin:3% 0 0 40%"><i>ĐĂNG KÝ TÀI KHOẢN CHO KHÁCH HÀNG</i></h1></br>  
      <div style=" margin:1% 0 5% 40%; background-color:#09F; width:450px; height:600px">    
	<form method="post"onsubmit="return KiemTraDangKy()">
        <h2 style="color:#F03; padding:5px 0 0 5px">Thông tin cá nhân:</h2>
    	<div style="margin:0 0 0 15%; width:100%">
    	<p><b>Họ và tên</b></p>
            <input style="width:72%" type ="text" id="txtHoTen" placeholder="Nhập họ và tên" />
            <p><b>Ngày/Tháng/Năm</b></p>
         			<select style="width:17%; height:15%" id="CbxNgay">
                     		<option>[Ngày]</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				 <option>11</option>
				 <option>13</option>
				  <option>14</option>
				  <option>15</option>
				  <option>16</option>
				  <option>17</option>
				   <option>18</option>
				   <option>19</option>
				   <option>25</option>
				   <option>26</option>
				   <option>27</option>
				   <option>28</option>
				   <option>29</option>
				   <option>30</option>
				   <option>31</option>
                	</select>
               		 <select style="width:32%; height:20%" id="CbxThang">
                     		<option>[Tháng]</option>
                			<option>Tháng 1</option>
                   		 	<option>Tháng 2</option>
                   		 	<option>Tháng 3</option>
                   		 	<option>Tháng 4</option>
                   		 	<option>Tháng 5</option>
                   		 	<option>Tháng 6</option>
                    		<option>Tháng 7</option>
                   			<option>Tháng 8</option>
                   			<option>Tháng 9</option>
                   		 	<option>Tháng 10</option>
                   		 	<option>Tháng 11</option>
                    		<option>Tháng 12 </option>
                	</select>
            		<select style="width:23%; height:20%" id="CbxNam">
                     		<option>[Năm]</option>
                			<option>1990</option>
                   		 	<option>1991</option>
                   		 	<option>1992</option>
                   		 	<option>1993</option>
                   		 	<option>1994</option>
                   		 	<option>1995</option>
                    			<option>1996</option>
                   			<option>1997</option>
                   			<option>1998</option>
                   		 	<option>1999</option>
                   		 	<option>2000</option>
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
                <input style="width:72%" type ="text" id="txtSDT" placeholder="Nhập số điện thoại của bạn" />
            </div>
        	<h2 style="color:#F03; padding:5px 0 0 5px">Thông tin tài khoản:</h2>
            <div style="margin:0 0 0 15%; width:100%">
            	<p><b>Tên đăng nhập</b></p>
                <input style="width:52%" type="text" id="txtTenDangNhap"/>  
                <input style="width:20%" type="button" onclick="KiemTra()" value="Kiểm tra"/>
                 <p><b>Mật khẩu</b></p>
                  <input style="width:52%" id="txtMatKhau" type="password"/>
                  <p><b>Xác nhận mật khẩu</b></p>
                	<input style="width:52%" type ="password" id="txtXacNhanMK" placeholder="Xác nhận mật khẩu của bạn"/>
          <div style="margin:5% 0 0 30%">
                  <a href="./index.php"><input style="width:100px ; height:30px" type="button" value="Quay lại"/></a>   	 
                  <input style="width:100px ; height:30px" type="submit" value="Đăng ký"/>
                  </div>
          </div>
   		</form>
</div>
<script type="text/javascript" language="javascript">
		function KiemTra()
		{
			var tenDN = document.getElementById('txtTenDangNhap');
				if(tenDN.value == "")
				{
					tenDN.focus();
					alert("Tên đăng nhập không được rỗng");
				}
		}
</script>
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
