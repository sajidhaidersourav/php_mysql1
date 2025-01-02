<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $data = "news618";

    $conn = new mysqli($host, $user, $pass, $data);

    if($conn -> connect_errno){
        die($conn -> error);
    }else{
        // echo "GOOD";
    }

?>