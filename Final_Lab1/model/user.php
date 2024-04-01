<?php
    require_once('db.php');

    function login($username,$password){
        $conn = dbConnection();
        $sql = "select * from user where username ='{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }

    }

    function createUser($user){
        $conn = dbConnection();
        $sql = "insert into user values ('','{$user['empname']}','{$user['contact']}','{$user['username']}','{$user['password']}')";
        
        if(mysqli_query($conn, $sql)) {
            return true;
        }else{
            return false;
        }
    }

    function showUsers($user){
        $conn = dbConnection();
        $sql = "select * from user";
        
        if(mysqli_query($conn, $sql)) {
            return true;
        }else{
            return false;
        }
    }
?>