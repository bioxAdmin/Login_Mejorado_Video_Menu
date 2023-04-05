<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Bienvenido a Hospital Quellón</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido al Hospital Quellón</h2>
                <p>Si ya tienes una cuenta por favor inicia sección aqui Administrador</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" method="post" action="">
            <h2 class="create-account">Iniciar Sección Estudiante</h2>
            <?php
            include ("conexion.php");
            include ("controlador_es.php");
            ?>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
        </br>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="password" name="password" placeholder="Contraseña">
            <button name="btningresar_es" class="btn" value="Iniciar Sesion" type="submit">Iniciar Sección</button>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" method="post" action="">
            <h2 class="create-account">Iniciar Sección Administrador</h2>
            <?php
            include ("conexion.php");
            include ("controlador_ad.php");
            ?>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
        </br>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="password" name="password" placeholder="Contraseña">
            <button name="btningresar_ad" class="btn" value="Iniciar Sesion" type="submit">Iniciar Sección</button>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido al Hospital Quellón</h2>
                <p>Si ya tienes una cuenta por favor inicia sección aqui Estudiante</p>
                <button class="sign-in-btn">Iniciar Sección</button>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>