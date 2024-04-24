<?php
    require_once './model/User.php';
    class UserController{

        function __construct(){

        }

        function insertForm(){
            ob_start(); // bắt đầu lưu đầu ra vào bộ đệm
            require_once './view/admin/insert.php'; // Hiển thị nội dung trang thêm
            $content = ob_get_clean(); // Lấy nội dung của insert.php và gán vào biến $content
            require_once './view/dashboard.php'; // Hiển thị trang dashboard với nội dung đã có
        }

        function insert($data){
            $user = new User();
            $arr = [
                'fullname' => $data['fullname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password'],
            ];
            $insert = $user->insertUser($arr);
            if($insert){
                $noti = 'Thêm thành công!';
            }
            ob_start(); // bắt đầu lưu đầu ra vào bộ đệm
            require_once './view/admin/insert.php'; // Hiển thị nội dung trang thêm
            $content = ob_get_clean(); // Lấy nội dung của insert.php và gán vào biến $content
            require_once './view/dashboard.php'; // Hiển thị trang dashboard với nội dung đã có
        }
    }
?>