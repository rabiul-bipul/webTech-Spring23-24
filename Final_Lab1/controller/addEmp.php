<?php

    require_once('../Model/user.php');

    $id = $_REQUEST['id'];
    $name=$_REQUEST['empname'];
    $contactNo=$_REQUEST['contact'];
    $username=$_REQUEST['username'];
    $password = $_REQUEST["password"];

  
        $user=['empname'=>$name,'contact'=>$contactNo,'username'=>$username,'password'=>$password];
        $status=createUser($user);
        if($status){
            header('location:../View/dash.php');
            echo " User INserted!";
            
    
    }
?>