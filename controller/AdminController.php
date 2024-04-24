<?php
    class AdminController{

        function __construct(){

        }

        function dashboard(){
            ob_start(); // Bắt đầu bắt đầu bắt đầu lưu đầu ra vào bộ đệm
            require_once './view/admin/content.php'; // Hiển thị nội dung trang thêm
            $content = ob_get_clean(); // Lấy nội dung của insert.php và gán vào biến $content
            require_once './view/dashboard.php'; // Hiển thị trang dashboard với nội dung đã có
        }
    }
?>