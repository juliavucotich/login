<?php

    include "conexion_pe.php";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacionalidad = $_POST["nacionalidad"];
    $mail = $_POST["mail"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $query = "INSERT INTO usuario(nombre, apellido, nacionalidad, mail, usuario, clave)
            VALUES("$nombre", "$apellido", "$nacionalidad", "$mail", "$usuario", "$clave")";

    $ejecutar = mysqli_query($conexion, $query);

    /*
//verificar q el nombre d usuario no se repita
$verificar_usuario = mysqli_query($obj_conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya esta registrado, intente con otro");
    window.location = "../index.php";
    </script>
    ';
    exit(); 
}
*/

    IF($ejecutar){
        echo "
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ";
    }else{
        echo "
            <script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location = "../index.php"; 
            </script>
        ";
    }

    mysqli_close($conexion);

?>