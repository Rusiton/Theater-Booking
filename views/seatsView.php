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
                echo "<p>Primero consultaremos los asientos disponibles del piso que gustes.</p>";
                echo "<a href='?floor=1'>Planta baja</a><a href='?floor=2'>Primer piso</a><a href='?floor=3'>Segundo piso</a>";

            }
            else{

                echo "<div class='stage'><hr style='width: 80%; height: 5rem; background-color: gray;'>";
                echo "<h3 style=' margin: 0; width: 100%; text-align: center;'>ESCENARIO</h3></div>";


                $floor = filter_input(INPUT_GET, "floor");
                
                $query = "SELECT * FROM asientos WHERE num_piso = '$floor'";
                $response = mysqli_query($connection, $query);

                if(mysqli_num_rows($response) > 0){

                    while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){

                        if($row['booked'] == "false"){

                            echo "<a style='background-color: green;' href=''>".$row['id_asiento']."</p>";

                        }

                    }   

                }

            }
        ?>
    </div>
</body>
</html>