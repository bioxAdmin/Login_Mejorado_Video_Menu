<?php
if(!empty($_POST["btningresar_ad"])){
    if (empty($_POST["nombre"]) and empty($_POST["apellido"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from administrador where clave_ad='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
            $sql=$conexion->query("insert into usuarios(nombre, apellido)values('$nombre','$apellido')");
            if ($sql==1) {
                echo('<div class="access">guardado exitosamente</div>');

            } else {
                echo('<div class="error">fallo al guardar</div>');
            }
            
        } else {
            echo('<div class="alert">ACCESSO DENEGADO</div>');
        }
        
    }
    
}
?>