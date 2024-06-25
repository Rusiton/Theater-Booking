<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>  
    <div class="form-container">
        <h1 style="width: 100%; text-align: center;">Inicio de sesión</h1>
        <?php	

            if(isset($_GET['wrongEmail'])){
                echo "<p style='background-color: red; padding: 1rem; color: white;'>Correo inválido</p>";
            }
            if(isset($_GET['wrongPassword'])){
                echo "<p style='background-color: red; padding: 1rem; color: white;'>Contraseña incorrecta</p>";
            }
            if(isset($_GET['successfulRegister'])){
                echo "<p style='background-color: green; padding: 1rem; color: white;'>Registro exitoso, inicie sesión</p>";
            }

        ?>
        <form action="../controllers/loginController.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Clave" required>
            <input type="submit" name="submit" value="Ingresar">
        </form>
        <a href="register.php">Registrarse</a>
    </div>
</body>
</html>