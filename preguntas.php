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

        .navbar2 {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

@media (min-width: 200px) and (max-width: 500px) {

  
   .bajar{
    padding-top: 9%  !important;

} 

} 

@media (min-width: 500px) and (max-width: 1000px) {

  
  .bajar{
    padding-top: 12%  !important;

} 


}

.bajar{
    padding-top: 0%  ;

} 

@media (min-width: 200px) and (max-width: 500px) {

  
   .circulo {
    background: whitesmoke;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    position: absolute;
    margin: -22% 0% 0% 28% !important;
}

} 

 

@media (min-width: 500px) and (max-width: 1000px) {

  
  .circulo {
    background: whitesmoke;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    position: absolute;
    margin: -22% 0% 0% 34% !important;
}

} 




.circulo {
    background: whitesmoke;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    position: absolute;
    margin: -22% 0% 0% 28%;
}



    </style>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
     
    
    <!-- Navbar Start -->
    <nav class="navbar2 fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5" style="display: flex;">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
             <img width="50px" src="img/logo.png">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                <img width="50px" src="img/logo.png">
            </a>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a style="font-family: 'letra2';" href="index.php" class="nav-item nav-link">Inicio</a>
                <a style="font-family: 'letra2';" href="historia.php" class="nav-item nav-link">Nuestra Historia</a>
                
                
            </div>
            
            <div class="navbar-nav mr-auto py-0">
                <a style="font-family: 'letra2';" href="rsvp.php" class=" nav-item nav-link">RSVP</a>
                <a style="font-family: 'letra2';" href="regalos.php" class=" nav-item nav-link">Regalo</a>
                <a style="font-family: 'letra2';" href="preguntas.php" class=" nav-item nav-link">Preguntas</a>
                 <a style="font-family: 'letra2';" href="galeria.php" class=" nav-item nav-link">Galerias</a>
                
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div>
        

        
            
               <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="title-box">

                         <h1 style="font-family: 'letra'; font-size: 80px; color: #876435;" class="font-secondary display-4 title-box">Preguntas</h1> 
                        <p style="font-family: 'letra2';color: #876435;" >Hemos preparado una ceremonia especial, nos gustaría que la puedas disfrutar sin tecnología, solamente en este momento por favor guarda tu celular, luego tendremos tiempo para sacarnos las mejores fotografías.</p>
                    </div>
            
            <div class="row" style="padding-top: 10%;">
                <div class="col-lg-4 col-md-6 mb-4 " style="position: relative;">
                    <div class="position-relative mb-2">
                        <div class="bg-secondary  text-center p-4" style="height: 33vh">
                            <div class="circulo">
                                <h1 style="padding-top: 6%; font-family: letra2; font-size: 60px;">1</h1>
                            </div>
                            <h4 class="mb-3" style="font-family: 'letra2';color: white; padding-top: 15%;">¿HAY CÓDIGO DE VESTIMENTA?</h4>
                            <h4 style="font-family: 'letra2';color: white;">Nuestro código de vestimenta es "Gala". Prepara tu atuendo más elegante.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 bajar">
                    <div class="position-relative mb-2">
                         <div class="bg-secondary  text-center p-4" style="height: 33vh">
                            <div class="circulo">
                                <h1 style="padding-top: 6%; font-family: letra2; font-size: 60px;">2</h1>
                            </div>
                            <h4 class="mb-3" style="font-family: 'letra2';color: white;padding-top: 15%;">¿DÓNDE HACER RESERVA EN VALLE DE ÁNGELES?</h4>
                            <h4 style="font-family: 'letra2';color: white;">Por la ubicación de la recepción, puede hospedarse en el Hotel Posada del Angel, puede llamar al 3180-1971 para reservar.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 bajar" >
                    <div class="position-relative mb-2">   
                        <div class="bg-secondary text-center p-4" style="height: 33vh">
                            <div class="circulo">
                                <h1 style="padding-top: 6%; font-family: letra2; font-size: 60px;">3</h1>
                            </div>
                            <h4 class="mb-3"style="font-family: 'letra2';color: white;padding-top: 15%;">¿PUEDO LLEVAR A MIS HIJOS?</h4>
                            <h4 class="mb-3"style="font-family: 'letra2';color: white;">Amamos a los niños, de verdad que si, pero hemos definido que esta boda sea solo para adultos.</h4>
                        </div>
                    </div>
                </div>
                
            </div>
                   
    <!-- Friends & Family End -->
                
              

    </div>
        


      
    
 
                            
                            
                            
                        
    
    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
</body>

</html>