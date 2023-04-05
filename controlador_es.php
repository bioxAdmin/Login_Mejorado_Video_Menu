<?php

if(!empty($_POST["btningresar_es"])){
    if (empty($_POST["nombre"]) and empty($_POST["apellido"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from estudiante where clave_es='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio_Es.php");
        } else {
            echo('<div class="alert alert-danger">ACCESSO DENEGADO</div>');
        }
        
    }
    
}

?>