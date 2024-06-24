<?php

    session_start();

    if(!isset($_SESSION['tb-userID'])){
        header("Location:views/login.php");
    }
    else{
        header("Location:views/landing.html");
    }

?>