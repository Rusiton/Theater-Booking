<?php
    if(isset($_POST['submit'])){
        
        session_start();

        if(isset($_SESSION['tb-userID'])){
            header("Location:../views/main.php");
            exit();
        }

        require('../dbConnection.php');

        $email = filter_input(INPUT_POST, "email");

        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $response = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($response) > 0){

            $data = mysqli_fetch_array($response, MYSQLI_ASSOC);
            
            $password = md5(filter_input(INPUT_POST, "password"));

            if($data['password'] == $password){

                $_SESSION['tb-userID'] = $data['id_usuario'];
                header("Location:../views/main.php");
                exit();
                
            }
            else{
                header("Location:../views/login.php?wrongPassword");
                exit();
            }

        }
        else{
            header("Location:../views/login.php?wrongEmail");
            exit();
        }

    }
    else{
        header("Location:../views/login.php");
        exit();
    }

?>