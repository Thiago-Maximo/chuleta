<?php
    $host = "localhost";
    $database ="tincphpdb01";
    $user = "root";
    $pass = "";
    $charset = "utf8";
    $port = "3306";

    try{
        $conn = new mysqli($host,$user,$pass,$database,$charset,$port);
        mysqli_set_charset($conn,$charset);
    } catch(Throwable $th){
        die("Atenção rolou ERRO!!, Cara!".$th);
    }
?>