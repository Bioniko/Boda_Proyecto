<!DOCTYPE html>
<html lang="en">

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
   <style>
        /* Estilo del fondo oscuro de fondo */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

          .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Proporción 16:9: (9 / 16) * 100% */
            height: 0;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Estilo del modal */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            z-index: 2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        /* Estilo del botón de cerrar */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

         .imagen-container {
            display: flex;
            flex-direction: column; /* Cambia la dirección a columna */
            align-items: center;
            text-align: center;
        }

        /* Estilo de la imagen dentro del modal */
        .imagen {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }
        .boton {
            margin-top: 10px; /* Espacio entre la imagen y el botón */
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contador{
        font-size: 55px;font-weight: bold;color: #000
        }

        .acomodar{
        margin: 0% 15%;
        }
       body {
  margin: 0;
  font-family: "Montserrat", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #818491;
  text-align: left;
  background-color: #FFFFFF;
  background-image: url('img/fondo.png') ;
  background-size: unset;
}
    </style> 

<body data-spy="scroll" data-target=".navbar" data-offset="51">
     
    
    <?php

        include 'menu.php';

      ?>



    <!-- RSVP Start -->
     <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
               
                <h1 class="font-secondary display-4" style="font-family: letra;color: #876435;">Confirma tu Asistencia</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form action="confirmacion.php" method="post" enctype="multipart">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input name="nombre" type="text" class="form-control  py-4 px-3" placeholder="Nombre" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="telefono" class="form-control py-4 px-3" type="text" id="miCampo" placeholder="Telefono" oninput="eliminarGuiones(this)" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select name="invitados" class="form-control " style="height: 52px;" required>
                                        <option>#Invitados</option>
                                        <option>1</option>
                                        <option>2</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select name="asistira" class="form-control " style="height: 52px;" required>
                                        <option>Asistirá</option>
                                        <option>Ceremonia</option>
                                        <option>Todo el Evento</option>
                                        <option>Recepción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="descripcion" class="form-control  py-2 px-3" rows="5" placeholder="Escribenos si tienes dudas" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Enviar</button>
                                <a class="btn btn-primary font-weight-bold py-3 px-5"  href="index.php">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->

</body>
    <!-- Scroll to Bottom -->
    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- ALL JS FILES -->
    
    <script src="2/js/popper.min.js"></script>
    <script src="2/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="2/js/jquery.magnific-popup.min.js"></script>
    <script src="2/js/jquery.pogo-slider.min.js"></script> 
    <script src="2/js/slider-index.js"></script>
    <script src="2/js/smoothscroll.js"></script>
    <script src="2/js/responsiveslides.min.js"></script>
    <script src="2/js/timeLine.min.js"></script>  
    <script src="2/js/form-validator.min.js"></script>
    <script src="2/js/contact-form-script.js"></script>
    <script src="2/js/custom.js"></script>
    


</html>