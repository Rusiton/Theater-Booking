<?php

    session_start();

    if(!isset($_SESSION['tb-userID'])){

        header("Location:../views/login.php");
        exit();

    }

    require('../dbConnection.php');


    $seatID = filter_input(INPUT_POST, "seatID");
    $floor = filter_input(INPUT_POST, "floor");

    $query = "SELECT * FROM asientos WHERE id_asiento = '$seatID'";
    $response = mysqli_query($connection, $query);

    if(mysqli_num_rows($response) > 0){

        $row = mysqli_fetch_array($response, MYSQLI_ASSOC);

        if($row['booked'] == "false"){

            $userID = $_SESSION['tb-userID'];

            $query = "UPDATE asientos SET booked = 'true', id_usuario = '$userID' WHERE id_asiento = '$seatID' AND num_piso = '$floor'";
            $response = mysqli_query($connection, $query);

            header("Location:../views/seatsView.php?floor=$floor&successfulBooking");

        }
        else{

            header("Location:../views/seatsView.php?takenSeat");

        }

    }

?>