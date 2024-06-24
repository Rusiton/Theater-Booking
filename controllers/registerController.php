<?php

    if(isset($_POST['submit'])){
            
        session_start();

        if(isset($_SESSION['tb-userID'])){

            header("Location:../views/main.php");
            exit();

        }

        $password = filter_input(INPUT_POST, "password");
        $email = filter_input(INPUT_POST, "email");

        if($password != $_POST['password']){

            header("Location:../views/register.php?unequalPasswords");
            exit();

        }
        
        require('../dbConnection.php');

        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $response = mysqli_query($connection, $query);

        if(mysqli_num_rows($response) < 1){

            $password = md5($password);

            $query = "INSERT INTO usuarios (`email`, `password`) VALUES ('$email', '$password')";
            mysqli_query($connection, $query);

            header("Location:../views/login.php?successfulRegister");

        }
        else{

            header("Location:../views/register.php?usedEmail");
            exit();

        }

    }

?>