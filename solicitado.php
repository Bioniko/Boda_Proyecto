<?php
 require 'conexion.php';

    date_default_timezone_set('America/El_Salvador');
    $date = new \DateTime();

 
 @$cancion  = $_POST['cancion']; 
 @$artista  = $_POST['artista']; 
 @$solicita= $_POST['solicita'];
 






$insertar = "INSERT INTO cancion values('','$cancion','$artista','$solicita')";

$query = mysqli_query($conexion, $insertar);

if($query){

echo "<SCRIPT >
alert('Aviso!, Te esperamos en la pista de baile!');
document.location=('index.php');
</SCRIPT>";
}
 else {
echo "<SCRIPT >
alert('Aviso!, Error verifique los datos');
document.location=('index.php');
</SCRIPT>";
}







?>

