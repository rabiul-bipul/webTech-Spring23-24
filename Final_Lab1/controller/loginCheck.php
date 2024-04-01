<?php

    session_start();

    require_once('../model/user.php');

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    if($username ==" " || $password ==" " || $username == "" || $password == ""){
        echo "required username or password";
    }else{

        $status=login($username,$password);
        if($status){
            setcookie('flag','true',time()+3600,'/');
            header('location:../view/dash.php');
        } else{
            echo "invalid user";
        }
    }
?>