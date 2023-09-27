<?php
 require 'conexion.php';

    date_default_timezone_set('America/El_Salvador');
    $date = new \DateTime();

 @$estado= 'Confirmo';
 @$nombre  = $_POST['nombre']; 
 @$telefono  = $_POST['telefono']; 
 @$fecha= $date;
 @$invitados= $_POST['invitados'];
 @$asistira= $_POST['asistira'];
 @$descripcion= $_POST['descripcion'];


$sql = "select * from invitados where telefono='$telefono'" ;
$result = mysqli_query($conexion, $sql);
if(mysqli_num_rows($result)>0)
 {
    // Si es mayor a cero imprimimos que ya existe el usuario
   echo "<SCRIPT >
alert('Aviso!,  Ya existe una reserva de este numero');
document.location=('index.php');
</SCRIPT>";
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$insertar = "INSERT INTO invitados values('','$nombre','$telefono','$invitados','$asistira','$descripcion','$estado')";

$query = mysqli_query($conexion, $insertar);

if($query){

echo "<SCRIPT >
alert('Aviso!, Te esperamos en nuestra boda soñada');
document.location=('index.php');
</SCRIPT>";
}
 else {
echo "<SCRIPT >
alert('Aviso!, Error los verifique los datos');
document.location=('rsvp.php');
</SCRIPT>";
}


}





?>

