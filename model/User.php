<?php
    require_once './model/Database.php';
    class User extends Database{
        function __construct()
        {

        }

        function insertUser($data){
            $db = new Database();
            if($db->insert('user',$data)){
                return true;
            }else{
                return false;
            }
        }
    }
?>