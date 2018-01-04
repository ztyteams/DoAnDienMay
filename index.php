<?php 
	session_start();
	if(isset($_GET["a"]) && $_GET["a"] != 0 && $_GET["a"] > 10)
		$_SESSION["curURL"] = $_SERVER["REQUEST_URI"];
	
	include_once ('lib/DataProvider.php'); 
	include_once ('lib/ShoppingCart.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Website Điện máy DT </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="wrapper">
		<?php include ('modules/mHeader.php'); ?>
		<div id="sidebar">
			<?php include ('modules/mMenuHang.php'); ?>
            <?php include ('modules/mMenuLoai.php'); ?>
		</div>
		<div id="content">
			<?php include ('modules/mContent.php'); ?>
		</div>
		<div id="footer">
            <?php include ('modules/mFooter.php'); ?>
		</div>
	</div>	
</body>
</html>