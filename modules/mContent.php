
<?php
    $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 
    
    switch ($a) {
        case 1:
            include ("pages/pHome.php");
            break;
        case 2: 
            include ("pages/pSanPhamTheoHang.php");
            break;
        case 3: 
            include ("pages/pSanPhamTheoLoai.php");
            break;
        case 4:
            include ("pages/pChiTietSanPham.php");
            break;
        case 6:
            include ("pages/pQuanLyGioHang.php");
            break;
        case 10:
            include ("pages/exDangNhap.php");
            break;
        case 11:
            include ("pages/exDangXuat.php");
            break;
        case 12:
            include ("pages/exThemSanPhamVaoGioHang.php");
            break;
        case 13:
            include ("pages/exCapNhatGioHang.php");
            break;
		case 14:
            include ("modules/mTrangDangKy.php");
            break;
		case 15:
			include ("pages/pSearch.php");
			break;
		case 16:
			include ("modules/mSearchAdv.php");
			break;
		case 17:
			include ("pages/pSearchName.php");
			break;
		case 18:
			include ("pages/pSearchLoaiSP.php");
			break;
		case 19:
			include ("pages/pSearchHSX.php");
			break;
		case 20:
			include ("pages/pSearchGia.php");
			break;
		case 21:
			include ("pages/pdangky.php");
			break;
        default:
            include "pages/pError.php";
            break;
    }
?>