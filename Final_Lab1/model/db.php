<?php
    $host="localhost";
    $dbname="eshop";
    $dbuser="root";
    $dbpass="";
    
 
    function dbConnection(){
        global $host;
        global $dbname;
        global $dbuser;
        global $dbpass;

        $conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
        return $conn;
    }

?>