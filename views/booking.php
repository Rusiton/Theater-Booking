<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/booking.css">
    <title>Document</title>
</head>
<body>
    <?php

        include('header.php');

        echo "<div class='content'>";

        if(isset($_GET['bookingID']) && isset($_GET['floor'])){

            $seatID = filter_input(INPUT_GET, "bookingID");
            $floor = filter_input(INPUT_GET, "floor");

            echo "<h2>Reservar asiento $seatID</h2><br><h2>En el piso $floor</h2>";
            echo "<br><p>Ya casi estamos, solo queda que nos proporciones tu forma de pago</p>";
            echo "<h5>Aclaración: El pago se realiza de forma presencial el dia de la función</h5>";

            echo "<form action='../controllers/bookingController.php' method='post'>";
            echo "<br><select name='method'><option value='efectivo'>Efectivo</option><option value='Tarjeta'>Tarjeta</option></select>";
            echo "<br><br><input type='hidden' name='seatID' value='$seatID'>";
            echo "<input type='hidden' name='floor' value='$floor'>";
            echo "<input type='submit' name='submit' value='Listo'>";

        }
        else{

            header("Location:seatsView.php");
            exit();

        }

        echo "</div>";

    ?>
</body>
</html>