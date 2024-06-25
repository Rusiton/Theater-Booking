<?php

    session_start();

    if(!isset($_SESSION['tb-userID'])){

        header("Location:login.php");
        exit();

    }

?>
<header>
    <link rel="stylesheet" href="../css/header.css">

    <div class="hero">
        <img src="">
    </div>
    <div class="header-options">
        <a href="../controllers/logout.php">Cerrar Sesión</a>
    </div>
</header>