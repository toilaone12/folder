<?php
    require_once './controller/AdminController.php';
    require_once './controller/UserController.php';
    $act = isset($_GET['act']) && $_GET['act'] ? $_GET['act'] : '';
    $mod = isset($_GET['mod']) && $_GET['mod'] ? $_GET['mod'] : '';
    if($act == 'user'){
        $userController = new UserController();
        if($mod == 'insert'){
            if(isset($_POST['themtaikhoan'])){
                $userController->insert($_POST);
            }
            $userController->insertForm();
        }
    }else{
        $adminController = new AdminController();
        $adminController->dashboard();
    }
?>