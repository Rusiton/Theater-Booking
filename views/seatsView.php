<?php

    require('../dbConnection.php');
    include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/seatsView.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <?php

            if(!isset($_GET['floor'])){

                echo "<h1>Empecemos a reservar tu asiento!</h1>";
                echo "<p style='width: 100%;'>Primero consultaremos los asientos disponibles del piso que gustes.</p>";
                echo "<a href='?floor=1'>Piso 1</a><a href='?floor=2'>Piso 2</a>";

            }
            else{
                
                $floor = filter_input(INPUT_GET, "floor");

                
                echo "<div class='stage'><h2 style='width: 100%; text-align: center;'>PISO $floor</h2>";
                echo "<hr style='width: 80%; height: 80%; background-color: gray;'>";
                echo "<h3 style=' margin: 0; width: 100%; text-align: center;'>ESCENARIO</h3></div>";

                echo "<div class='seats'>";
                
                
                $query = "SELECT * FROM asientos WHERE num_piso = '$floor'";
                $response = mysqli_query($connection, $query);

                if(mysqli_num_rows($response) > 0){

                    while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){

                        $seatID = $row['id_asiento'];

                        if($row['booked'] == "false"){

                            echo "<a style='background-color: green;' href='booking.php?bookingID=$seatID&floor=$floor'>$seatID</a>";

                        }
                        else{

                            echo "<p style='background-color: red;'>$seatID</p>";

                        }

                    }   

                }

                echo "</div>";
                echo "<p style='width: 100%; color: green'>Asientos Disponibles</p>";
                echo "<p style='width: 100%; color: red'>Asientos Reservados</p>";
            }
        ?>
    </div>
</body>
</html>