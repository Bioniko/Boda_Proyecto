<head>
    <meta charset="utf-8">
    <title>Boda Garcia Cruz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ingresa para reservar tu invitación" name="keywords">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="2/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="2/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="2/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="2/css/responsive.css">
     <!-- Site Icons -->
    <link rel="shortcut icon" href="2/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="2/images/apple-touch-icon.png">
</head>
<?php 

require_once "../conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT * from invitados;  ";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Codigo</td>
				<td>Nombre</td>
				<td>Telefono</td>
				<td>Invitados</td>
				<td>Asistira</td>
				<td>Descripcion</td>
				<td>Estado</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Codigo</td>
				<td>Nombre</td>
				<td>Telefono</td>
				<td>Invitados</td>
				<td>Asistira</td>
				<td>Descripcion</td>
				<td>Estado</td>
	
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>					
					<td ><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					<td><?php echo $mostrar[7] ?></td>
					

					
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>