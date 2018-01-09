<form class="frmAdv1" onsubmit="return KTNhapLieuGia()">
			<input type="radio" id="rbName" name="search" value="nameSP" checked><span>Tìm kiếm theo tên sản phẩm </span>
			<input type="radio" id="rbHSX" name="search" value="hsx"><span>Tìm kiếm theo nhà sản xuất </span>
			<input type="radio" id="rbLoai" name="search" value="LoaiSP"<span>Tìm kiếm theo loại sản phẩm </span>
		<form class="frmAdv1" name="frminfosearch"  method="post">
			<span class="label3">Nhập thông tin cần tìm: </span>
			<input type="text" id="txtInfo" name="txtInfo" size="50"></br>
			<span class="label3">Giá: </span>
			<input type="text" id="txtMinPrice" name="txtMinPrice" size="10"> - <input type="text" id="txtMaxPrice" name="txtMaxPrice" size="10"></br>
		</form>
			<a href="javascript:Result()"><input id="btnSearchadv" type="submit" name="SearchSP" value="Tìm kiếm"></a>
</form >
 <script type="text/javascript">
	function KTNhapLieuGia()
	{
		var gia = document.getElementById("txtMinPrice");
		if(isNaN(gia.value) && gia.value!="")
		{
			alert("Giá nhập vào không hợp lệ");
			return false;
		}
		
		var gia = document.getElementById("txtMaxPrice");
		if(isNaN(gia.value) && gia.value!="")
		{
			alert("Giá nhập vào không hợp lệ");
			return false;
		}

		return true;
	}
	
	function KTcheck()
	{
		if(document.getElementById("rbName").checked==true && document.getElementById("txtMinPrice").value=="" && document.getElementById("txtMaxPrice").value=="")
		{
			window.location = 'http://127.0.0.1/index.php?a=17';
		}
		if(document.getElementById("rbHSX").checked==true && document.getElementById("txtMinPrice").value=="" && document.getElementById("txtMaxPrice").value=="")
		{
			window.location = 'http://127.0.0.1/index.php?a=19';
		}
		if(document.getElementById("rbLoai").checked==true && document.getElementById("txtMinPrice").value=="" && document.getElementById("txtMaxPrice").value=="")
		{
			window.location = 'http://127.0.0.1/index.php?a=18';
		}
		if(document.getElementById("txtMinPrice").value!="" && document.getElementById("txtMaxPrice").value!="")
		{
			window.location = 'http://127.0.0.1/index.php?a=20';
		}
	}
	function Result()
	{
		if(KTNhapLieuGia()==true)
		{
			KTcheck();
		}
		else
			window.location ='http://127.0.0.1/index.php?a=16';
	}
 </script>