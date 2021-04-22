<?php
    header("Access-Control-Allow-Origin: *");

    session_start();
    
    if(isset($_SESSION["email"])){
        echo $_SESSION["email"];
    }else{
        echo -1;
    }

    session_write_close();
?>