<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="clientes";

$enlace=mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$enlace){
     echo "Error en el servidor";
}
?>

<?php

if (isset($_POST['enviar'])){

    $celular=$_POST["celular"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $cumpleaños=$_POST["cumpleaños"];
    $insertardatos= "INSERT INTO clientes VALUES(
        
        '$celular',
        '$nombre',
        '$apellido',
        '$email',
        '$cumpleaños')";
        $ejecutarinsertar=mysqli_query($enlace,$insertardatos);
        if(!$ejecutarinsertar){
            echo "Error en la linea sql";
        }
        header("Location: formulario.html");       
}
?>

