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
        <h1 style="width: 100%; text-align: center;">Registro de usuario</h1>
        <?php	

            if(isset($_GET['usedEmail'])){
                echo "<p style='background-color: red; padding: 1rem; color: white;'>Correo ya en uso</p>";
            }
            if(isset($_GET['unequalPasswords'])){
                echo "<p style='background-color: red; padding: 1rem; color: white;'>Las claves no coinciden</p>";
            }

        ?>
        <form action="../controllers/registerController.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Clave" required>
            <input type="password" name="passwordConfirm" placeholder="Confirmar Clave" required>
            <input type="submit" name="submit" value="Ingresar">
        </form>
        <a href="login.php">Iniciar Sesión</a>
    </div>
</body>
</html>