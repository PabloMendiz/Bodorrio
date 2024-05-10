<!DOCTYPE html>
<html lang="es">
<head>
    <title>Boda María y Pablo</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="PHP,HTML,CSS,XML,JavaScript">
    <script src="arch.js"></script>
    <link rel="stylesheet" href="boda.css">

    <meta name="author" content="Pablo Mendizabal">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inria+Serif&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Herr+Von+Muellerhoff&family=Mr+De+Haviland&family=Pinyon+Script&family=Whisper&display=swap" rel="stylesheet">

    <!--styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>

<!-- MENU -->
<nav id="myNav" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#iniciales">Menú</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#iglesia">Ceremonia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#celeb">Celebración</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#hotel">Hoteles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#asistencia">Asistencia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#viaje">Viaje</a>
            </li>

        </ul>
    </div>
</nav>
<!--FECHA1
<section id="fecha">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-light p-0 pb-4 text-center">
                <img id="photo" alt="fotoEllos" src="imgs/mp.png" width="90%">
            </div>
        </div>
    </div>
</section> -->
<!--FECHA2-->
<section id="fecha">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-light p-0 pr-4 text-center">
                <p id="mp3" class="mainMP">MP</p>
            </div>
        </div>
    </div>
</section>
<!-- MONTASTERIO -->
<section id="iglesia">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 title">
                Ceremonia
            </div>
            <div class="col-12 col-md-12 col-lg-12 bg-light text-center subtitle text-dark">
                <a href="https://maps.app.goo.gl/HHhqoZ6FVadnAnuD6">
                    <i class="text-dark">Real monasterio de Santa María</i>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 bg-light p-0 pb-2 text-center">
                <a href="https://maps.app.goo.gl/HHhqoZ6FVadnAnuD6"> 
                    <img src="imgs/monasterio.jpg" width="100%" class="imgCelebracion">
                </a>
            </div>
        </div>
    </div>
    <div id="celeb" class="marLink"></div>
</section>
<!-- CELEBRACIÓN -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 title bg-white">
                Celebración
            </div>
            <div class="col-12 col-md-12 col-lg-12 text-center bg-light subtitle">
                <a href="https://maps.app.goo.gl/hrkhG6CxgGgmmtpr7" >
                    <i class="text-dark"> Huerto de Santa María </i>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-12 bg-light p-0 pb-2 text-center">
                <a href="https://maps.app.goo.gl/hrkhG6CxgGgmmtpr7">
                    <img src="imgs/huerto.jpg" alt="Descripción de la imagen" class="imgCelebracion">
                </a>
            </div>
        </div>
    <div id="hotel" class="marLink"></div>
</section>
<!-- HOTELES -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 title">
                Hoteles
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl text-center bg-light subtitle">
                Aquí teneis la ubicacion del pueblo con las referencias hoteleras, 
                        <br>
                    <a href="https://www.google.es/maps/search/Hoteles/@39.5952318,-0.3048674,13.25z?entry=ttu">                        
                            <u>El Puig de Santa María.</u>
                        <br> 
                    </a>    
                        <p>    
                            <br>
                                Además, utilizando el código 
                            <br>
                                </i> "Enlace M&P" <i>
                            <br>
                                <a href="https://www.hotelronda.es/#"> 
                                    en <u>Olympia Hoteles Ronda</u> 
                                </a> 
                            <br>
                                    podeis reservar 2 noches con desayuno.                                
                </p>
                    <div class="col-12 col-md-12 col-lg-12 bg-light p-0 pb-0 text-center">
                        <a href="https://maps.app.goo.gl/hrkhG6CxgGgmmtpr7">
                            <img src="imgs/hoteles/RONDA2/olymia-ronda-header-2.jpg" alt="Descripción de la imagen" class="imgCelebracion">
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div id="asistencia" class="marLink"></div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 text-center title">
                Asistencia
            </div>
            <div class="col-12 col-md-12 col-lg-12 text-center bg-light subtitle">
                <div class="col-12 col-md-12 col-lg-6 offset-lg-3 text-center">
                    <?php
                    if (isset($_GET["msg"])) {
                        echo '<h5 class="text-danger">
                                 ¡Lo sentimos! <br>
                                  Hemos detectado que alguno de los campos <i><u>Nombre y apellidos</u></i> 
                                  estaba <b>vacío o era demasiado corto</b>, por lo que ninguno de los asistentes que se hubieran
                                  introducido en el intento anterior se han añadido a la lista de invitados, por favor,
                                  asegúrese de introducir nombre y apellidos de todos los asistentes seleccionados. <br>
                                  ¡Gracias!  
                              </h5>';
                    	}
                    ?>
                </div>
                <form action="index.php" method="post" class="mt-4">
                    <div class="row form">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 text-right">
                            Número de asistentes
                        </div>
                        <div class="col-4 col-sm-6 col-md-6 col-lg-6 text-left pb-4">
                            <select id="asistentes" name="asistentes" onchange="numAsis()">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12" id="vacio">
                            <!-- Aquí se agregarán dinámicamente los campos de asistencia -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <hr>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8 offset-lg-2">
                        <p>
                            Además.. <br>¡El viernes nos encantará recibiros!, 
                            <br>
                            ¿Preboda? <br>  
                            <input id="busSi" type="radio" name="bus" value="1"> Sí
                                <span style="margin: 1%;"></span>
                            <input id="busNo" type="radio" name="bus" value="0"> No
                        </p>
                    </div>
                    <div class="my-4">
                        <input id="enviar" name="submit" type="submit" value="Enviar" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="viaje" class="marLink"></div>
</section>

<!-- VIAJE -->
<section>
    <div class="container-fluid">
        <div class="row text-dark">
            <div class="col-sm-12 col-md-12 col-lg-12 title">
                Viaje
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 subtitle text-center text-dark pb-2">
               <p> El mejor regalo es que estéis con nosotros, <br>
                    pero si además queréis, podéis ayudarnos en nuestro viaje de novios a La Patagonia Argentina. <br><br>
                    <span class="text-dark">**NUMERO DE CUENTA** BIZUM?</span> <br>
               </p>
            </div>
            <div class="col-12 col-md-12 col-lg-12 bg-light p-0 pb-2 text-center">
                <a href="https://maps.app.goo.gl/hrkhG6CxgGgmmtpr7">
                    <img src="imgs/patagonia.jpg" alt="Descripción de la imagen" class="imgCelebracion">
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 subtitle text-center text-dark pb-2">
                <p><i>¡Muchas gracias!</i></p>
            </div>        
        </div>
    </div>
</section>

<script>

    //ALergias script
    function changeValue() {

        for (var i = 1; i <= 5; i++) {
            var option = document.getElementById('tiene'.concat(i)).value;

            if (option == "si") {
                document.getElementById('inputAlergia'.concat(i)).classList.remove("invisible");
                document.getElementById('inputAlergia'.concat(i)).classList.add("visible");
            } else {
                document.getElementById('inputAlergia'.concat(i)).classList.remove("visible");
                document.getElementById('inputAlergia'.concat(i)).classList.add("invisible");
            }
        }
    }

    window.onscroll = function () {
        stickyTop()
    };
    var header = document.getElementById("myNav");
    var sticky = header.offsetTop;

    function stickyTop() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky-top");
        } else {
            header.classList.remove("sticky-top");
        }
    }

    //Enviar buton disabled script
    
    $(function () {

        var $join = $("input[name=submit]");
        var processJoin = function (element) {
            if (element.id == "busSi" || element.id == "busNo") {
                $join.removeAttr("disabled")
            }
        };

        $(":radio[name=bus]").click(function () {
            processJoin(this);
        }).filter(":checked").each(function () {
            processJoin(this);
        });
    });


</script>
</body>
</html>





