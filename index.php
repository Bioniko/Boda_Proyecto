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
    </style>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
     
    
    <?php

        include 'menu.php';

      ?>
     

        

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home" style="margin-bottom: 0% !important; padding-bottom: 0% !important;">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 style="" class="text-white2">¡NOS CASAMOS!</h1>
                            <div class="">
                                <h3 style="font-family: 'letra';" class="text-white"  style="letter-spacing: 2px;">Maria Fernanda & Óscar Orlando</h3>
                            </div>
                            <h1 style="font-family: 'letra2'; " class="text-white2">28 DE OCTUBRE DE 2023 </h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        
                    </div>
                </div>

            </div>
        </div>

        <div style="text-align: center; padding: 5% 0%;">
         <audio controls style="background-color: #fff;">
        <source src="img/audio.mp3" type="audio/mp3">
        Tu navegador no soporta la reproducción de audio.
        </audio>
        </div>
        </div>
        
          <div id="countdown" style="marg">
            <div style="text-align: center;width: 100%;">
                <h1 style="font-family: 'letra2';color: #876435;" >NOS VEMOS EN:</h1>
                <div class="row" style="padding-top: 3%;" class="acomodar">
                    <div class="col">
                        <span style="Color: #876435" id="dias" class="contador">0</span>
                        <div style="Color: #876435">DÌAS</div>
                    </div>
                    <div class="col">
                        <span style="Color: #876435" id="horas" class="contador">0</span>
                        <div style="Color: #876435">HORA</div>
                    </div>
                    <div class="col">
                        <span style="Color: #876435" id="minutos" class="contador">0</span>
                        <div style="Color: #876435">MINUTOS</div>
                    </div>
                    <div class="col">
                        <span id="segundos" style="Color: #876435" class="contador">0</span>
                        <div style="Color: #876435">SEGUNDOS</div>
                    </div>
                </div>
            </div>
            <div id="Prueba"></div>
        </div>   
       
    <!-- Carousel End -->


    <!-- Story Start -->
   
<!-- Gallery Start -->
    <!-- Start Story -->
    <div id="" class="story-box main-timeline-box" style="padding-bottom: 5%; padding-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">

                         <h1 style="font-family: 'letra'; font-size: 80px; color: #876435" class="">Mafer & Oscar</h1>
                        <p style="Color: #876435">Estamos muy felices y emocionados de poder compartir el día más importante de nuestras vidas con nuestra familia, amigos y así seguir construyendo nuestro futuro</p>
                    </div>
                </div>
            </div>
            
            <div class="timeLine">
                <div class="row">
                    <div class="lineHeader hidden-sm hidden-xs"></div>
                    <div class="lineFooter hidden-sm hidden-xs"></div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item" >
                            <div class="caption">
                                
                                <div class="image">
                                    <img src="2/images/time-01.jpg" alt="" />
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                            <div class="caption">
                                
                                <div class="image">
                                    <img src="2/images/time-02.jpg" alt="" />
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                            <div class="caption">
                                
                                <div class="image">
                                    <img src="2/images/time-03.jpg" alt="" />
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                            <div class="caption">
                                
                                <div class="image">
                                    <img src="2/images/time-04.jpg" alt="" />
                                    
                                </div>
                                
                            </div>
                        </div>
                       

                </div>
            </div>
            
        </div>
    </div>
    <!-- End Story -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            
           
            <div class="row m-0">
                <div class="itinerario col-md-12 p-0" onclick="redirigir()" >
                    <div style="text-align: center;padding-top: 38%%;">
                    
                    </div>
                </div>
                <div class="col-md-12 p-0" style="min-height: 50px; margin-top: 10%">

                   <div class="">
        <!--video controls>
            <source src="img/video.mp4" type="video/mp4">
            Tu navegador no admite la etiqueta de video.
        </video-->

        <a href="img/video.mp4" style="font-family: 'letra2';" href="rsvp.php" class="btn btn-primary btn-block" style="Color: white;border-radius: 5px;font-size: 50px;">Ver Video de Ubicación</a>
    </div>
    </div>

    <!--div class="col-md-12 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center  p-5">
                         <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="img/event-2.jpg" alt="">
                        
                        <h4 class="mb-3">Valle de Ángeles, Laguna Lodge</h4>
                        <p class="mb-2">Francisco Morazán</p>
                        <p class="mb-0">Hora: 5pm - 1pm</p>
                        <a class="btn btn-primary" href="https://goo.gl/maps/Zp6z1UUAtA4NeXXZ9" target="blank">Ver Ubicación</a>
                        <p class="mb-0"></p>
                    </div>
                        </div>
                    </div-->
                    <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Reservá</h6>
                <h1 class=""style="font-family: 'letra2'; font-size: 30px; Color: #876435" >¡Prometo bailar si el DJ pone mi canción favorita!</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form action="solicitado.php" method="post" enctype="multipart">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input name="cancion" type="text" class="form-control  py-4 px-3" placeholder="Cancion: Ojitos Lindos" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="artista" type="text" class="form-control  py-4 px-3" placeholder="Artista: Bad Bunny" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="solicita" type="text" class="form-control   py-4 px-3" placeholder="Solitado por: Oscar Garcia" required />
                                </div>
                            </div>
                            
                            
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Enviar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    <!--div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                
                <h1 class=""style="font-family: 'letra'; font-size: 50px">Confirma tu Asistencia</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form action="confirmacion.php" method="post" enctype="multipart">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input name="nombre" type="text" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Nombre" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="telefono" class="form-control bg-secondary border-0 py-4 px-3" value="+504" type="text" id="miCampo" oninput="eliminarGuiones(this)" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select name="invitados" class="form-control bg-secondary border-0" style="height: 52px;" required>
                                        <option>#Invitados</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select name="asistira" class="form-control bg-secondary border-0" style="height: 52px;" required>
                                        <option>Asistirá</option>
                                        <option>Ceremonia</option>
                                        <option>Todo el Evento</option>
                                        <option>Recepción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="descripcion" class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Escribenos si tienes dudas" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Enviar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!-- RSVP End -->

                </div>
                
                </div>
            </div>
        </div>
        

    <!-- Footer Start -->
    
    <!-- Footer End -->
    </div>
    <!-- About End -->
   


    <!-- Event Start -->
    
<!-- RSVP Start -->
     


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script>
        function eliminarGuiones(input) {
            // Reemplazar guiones con una cadena vacía
            input.value = input.value.replace(/-/g, '');
        }
    </script>
<script>
const targetDate = new Date('2023-10-28T23:59:59').getTime(); // Fecha objetivo en milisegundos
function updateCountdown() {
    const currentDate = new Date().getTime(); // Fecha y hora actual en milisegundos
    const timeDifference = targetDate - currentDate;

    if (timeDifference <= 0) {
        // La fecha objetivo ha pasado
        document.getElementById('countdown').innerHTML = '¡Tiempo cumplido!';
        return;
    }

    const seconds = Math.floor((timeDifference / 1000) % 60);
    const minutes = Math.floor((timeDifference / 1000 / 60) % 60);
    const hours = Math.floor((timeDifference / (1000 * 60 * 60)) % 24);
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

   

    document.getElementById('dias').textContent = days;
    document.getElementById('horas').textContent = hours;
    document.getElementById('minutos').textContent = minutes;
    document.getElementById('segundos').textContent = seconds;
}

// Actualiza el contador cada segundo
setInterval(updateCountdown, 1000);

// Llama a la función de actualización para que comience de inmediato
updateCountdown();
    </script>

    <!--script type="text/javascript">
            // Obtén una referencia al elemento de audio
var miAudio = document.getElementById("miAudio");

// Reproduce el archivo MP3 automáticamente cuando se carga la página
miAudio.play();

        </script-->
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
    <script>
            function redirigir(ir) {
                window.location.href = 'https://goo.gl/maps/Zp6z1UUAtA4NeXXZ9';
            }
        </script>
</body>

</html>