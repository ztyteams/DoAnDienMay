<h1>
    <?php
        $id = 1;
        if(isset($_GET['id']))
            $id = $_GET['id'];
        switch ($id)
        {
            case 1:
                echo "Sorry...! Chức năng không hỗ trợ :(";
                break;
            case 2:
                echo "Warning... Bạn không có quyền truy cập chức năng này!";
                break;
            case 3:
                echo "Thiếu thông tin để thực hiện chức năng này";
                break;
            case 4:
                echo "Tên đăng nhập hoặc mật khẩu bị sai";
                break;
            default:
                echo "Error....Waiting....Loading... :3";
        }
    ?>
</h1>
<img src='images/error.jpg' width="98%" />