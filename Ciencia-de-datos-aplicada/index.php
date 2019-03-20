<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Script's for Tag Manager -->

    <!-- Google Tag Manager INTOConsultancy-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KTMJG7J');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager Admazing-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5LNX736');</script>
    <!-- End Google Tag Manager -->

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CIENCIA DE DATOS APLICADA</title>
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/emfavicon.png" />


    <!-- Javascript Files -->
    <script type="text/javascript" src="../assets/libs/jquery-3.3.1.min.js"></script> <!-- jQuery -->
    <script src="../assets/libs/mdl/material.min.js"></script> <!-- Material Design -->
    <script src="../assets/js/main.js"></script> <!-- Custom Functionality -->
    <script src="../assets/js/materialize.js"></script> <!-- Materialize Libraries -->
    <script src="../assets/js/materialize.min.js"></script> <!-- Materialize Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!-- Modals -->
    <script type="text/javascript" src="../assets/libs/slick/slick.js"></script> <!-- Slick JS -->
    <script src="../assets/js/onkeypress.js"></script> <!-- Input number JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <!-- AOS Animations Libraries -->
    <script type="text/javascript" src="https://latam.emeritus.org/programas/../assets/js/countries-latam.js"></script>
    <!-- Countries Script provided by Ruchira's Team -->
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <!-- Script for register the UTM parameters in Logs -->

    <!-- Styling -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css"> <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/libs/mdl/material.min.css"> <!-- Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Modals -->
    <link rel="stylesheet" href="../assets/libs/slick/slick.css"> <!-- Slick Slider -->
    <link rel="stylesheet" href="../assets/libs/slick/slick-theme.css"> <!-- Slick Slider -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!-- AOS Animations -->


</head>

<body>


    <?php
        //If the HTTPS is not found to be "on"
        //if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
        //{
            //Tell the browser to redirect to the HTTPS URL.
            //header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
            //Prevent the rest of the script from executing.
            //exit;
        //}
        ?>


    <!-- Getting the querystring -->
    <?php
        $queryStringArray = array();
        foreach($_GET as $key=>$value){
            $parameter = $key."=".$value;
            array_push($queryStringArray, $parameter);
        }
        $queryString = implode("&", $queryStringArray);
        ?>


    <!-- Google Tag Manager (noscript) INTOConsultancy-->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTMJG7J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Google Tag Manager (noscript) Admazing -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LNX736" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
        <div class="header-container">
            <a href="https://latam.emeritus.org/" target="_blank" rel="noopener noreferrer">
                <img class="Logo-one" src="../assets/img/svg/emeritus-logo-light.svg" alt="Emeritus-Latam">
            </a>

            <div class="dinamic">
                <div class="header-button">
                    <a class="openRe fs18 blanco">
                        Más información
                    </a>
                </div> <!-- Header Button -->
            </div><!-- Dynamic -->
        </div><!-- Header Container -->
    </header>


    <!-- Dummy blank space to prevent content from hiding behind the header -->
    <div class="space"></div>


    <!-- Section no. 1: Hero Section -->
    <div class="hero-container">
        <div class="hero-data hero_DC">
            <div class="hero-data-cont">
                <div class="hero-title">
                    <div class="CBS-back openRe fs16 blanco">
                        <span class="openBo">NUEVO</span> programa <i>online</i>
                    </div>
                    <div class="robotoRE fs26 blanco">
                        CIENCIA DE <span class="robotoBo">DATOS APLICADA</span>
                    </div>
                </div>
            </div>
        </div><!-- hero-data -->

        <!-- University Logo -->
        <div class="movil logo-universidad-container">
            <div class="logo-universidad-title fs12 robotoRe gris6E">
                <i>En colaboración con</i>
            </div>
            <img src="../assets/img/svg/Columbia-Engineering.svg" alt="Columbia Engineering">
        </div>

        <div class="precio-container">
            <div class="precio-cont">
                <div class="precio">
                    <div class="subtitle-duracion fs16 robotoBo gris6E">
                        Duración
                    </div>

                    <div class="duracion-cont">
                        <img src="../assets/img/svg/calendar.svg" alt="calendario">
                        <div class="duracion-desc fs16 robotoRe negro">10 semanas, en línea</div>
                    </div>

                    <div class="duracion-cont">
                        <img src="../assets/img/svg/clock.svg" alt="reloj">
                        <div class="duracion-desc fs16 robotoRe negro">2-4 horas por semana</div>
                    </div>

                    <div class="fechas-cont">
                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Comienza</div>
                            <div class="fecha fs18 robotoRe negro">20/05/2019</div>
                        </div>

                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Termina</div>
                            <div class="fecha fs18 robotoRe negro">12/08/2019</div>
                        </div>
                    </div>

                    <div class="cuota-cont">
                        <div class="cuota-subtitle fs16 robotoBo gris6E">CUOTA DEL PROGRAMA</div>
                        <div class="cuota fs20 robotoRe verde37">$ <span class="robotoBo"> 1,295 </span> USD</div>
                    </div>

                </div>
            </div>
        </div> <!-- precio-container -->
    </div> <!-- hero-container -->


    <!-- Section no. 2: University's logo -->
    <div class="desktop logo-universidad-container">
        <div class="logo-universidad-title fs12 robotoRe gris6E">
            <i>En colaboración con</i>
        </div>
        <img src="../assets/img/svg/Columbia-Engineering.svg" alt="Columbia Engineering">
    </div>


    <!-- Section no. 3: Information & Form Section -->
    <div class="informacion-formulario-container">

        <div class="informacion-container">

            <div class="informacion robotoRe fs16" style="margin: 0;">
            Actualmente a los datos se les considera como la nueva moneda a nivel global, y su 
            espectacular crecimiento está transformando a todas las industrias y requiriendo de 
            profesionales que puedan explotar todo su potencial. Desde la industria de la salud hasta 
            finanzas y entretenimiento <a class="button-enable robotoBo fs16 rosa51">...más</a>

                <span class="enable">
                    , ciberseguridad y más, la necesidad de científicos de datos 
                    continúa creciendo, así como las oportunidades de avanzar profesionalmente en esa 
                    área. 
                    <br>
                    <br>
                    Con el objetivo de llenar esta brecha profesional y, aún más, utilizar la ciencia de datos 
                    para resolver problemas del mundo real, Columbia Engineering Executive Education se 
                    asoció con EMERITUS para crear el curso de Ciencia de Datos Aplicada. 
                    <br>
                    <br>
                    El enfoque del curso se centra en enseñar los conceptos y estadísticas de 
                    la Ciencia de datos. 
                    <br>
                    <br>
                    Pretendemos ir más allá de la teoría. Nuestra dinámica de aprendizaje invita a los 
                    participantes a iniciar una conversación de la mano de expertos y enriquecida con 
                    profesionales en el campo de la ciencia de datos. Esperamos que los estudiantes 
                    dediquen entre 6 a 8 horas a la semana. 
                    <br>
                    <br>
                    Una vez completado el curso de forma exitosa, cada participante recibirá un certificado 
                    digital de EMERITUS en colaboración con Columbia Engineering Executive Education.
                </span>
            </div> <!-- informacion -->
        </div> <!-- informacion-container -->

        <!--
            This is the form container with action: 'https://www2.emeritus.org/l/134351/2018-07-05/3zgtr6'
            This action (webservice) was provided by Ruchira's team. Each of the landing pages has a different endpoint in the action param.
        -->
        <div class="fomulario-container">
            <div class="form" id="form">
                <div class="form-title robotoBo fs18 blanco">Obtén información del programa</div>
                <form class="form-cont" method="POST" action="https://www2.emeritus.org/l/134351/2018-07-05/3zgtr6">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe mdl-textfield__input" type="text" id="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                            required>
                        <label class="robotoRe mdl-textfield__label" for="first_name">Nombre(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe mdl-textfield__input" type="text" id="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                            required>
                        <label class="robotoRe mdl-textfield__label" for="last_name">Apellido(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe mdl-textfield__input" type="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                            required>
                        <label class="robotoRe mdl-textfield__label" for="email">Email</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="country" name="Country" class="mdl-textfield__input Country mov-input-class"
                            required>
                        </select>
                        <label class="robotoRe mdl-textfield__label" for="country">País</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="work_experience" name="work_experience" class="robotoRe mdl-textfield__input work_experience mov-input-class"
                            required>
                            <option value=""></option>
                            <option value="Less than 5 Years">Menos de 5 años</option>
                            <option value="5-10 Years">5-10 años</option>
                            <option value="10-15 Years">10-15 años</option>
                            <option value="15-20 Years">15-20 años</option>
                            <option value="> 20 Years">&gt; 20 años</option>
                        </select>
                        <label class="mdl-textfield__label" for="work_experience">Experiencia Profesional</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe mdl-textfield__input" type="tel" id="mobile" maxlength="15" minlength="5"
                            onkeypress="return valida(event)" pattern="[0-9]+" required>
                        <label class="robotoRe mdl-textfield__label" for="mobile">Número de celular</label>
                    </div>

                    <div class="button-container">
                        <input type="hidden" name="lead_source" id="lead_source" value="Web">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="browser" value="">
                        <input type="hidden" name="course" id="course" value="Marketing Digital">
                        <!--This value is different in each in the pages-->
                        <input type="hidden" name="retURL" value="https://latam.emeritus.org/programas/Thank-you-page-MD.php?<?php echo $queryString; ?>">
                        <button class="robotoRe fs18 blanco" type="submit">
                            Descarga el folleto
                            <img src="../assets/img/svg/icon-descargar.svg" alt="Download">
                        </button>
                    </div> <!-- button-container -->

                </form>



                <div class="private-data">
                    <div class="data robotoRe fs14 blanco">
                        Tus datos personales no serán compartidos con terceros.
                    </div>
                    <div>
                        <a class="robotoBo fs14 blanco" href="https://latam.emeritus.org/politica-de-privacidad.php"
                            target="_blank" rel="noopener noreferrer">
                            Política de Privacidad
                        </a>
                    </div>
                </div> <!-- private-data -->

            </div>
            <div class="pagos-flexibles-container">
                <img src="../assets/img/svg/flexible-payments-icon.svg" alt="Precio">
                <div class="fs20 azulBC openRe">
                    Están disponibles
                    <br>
                    <span class="openBo">opciones flexibles de pago. </span>
                </div>
                <a class="fs20 rosa51 openBo" href="#ex1" rel="modal:open">
                    Obtén más información aquí
                </a>
            </div>
        </div> <!-- fomulario-container -->


    </div> <!-- informacion-formulario-container -->


    <!-- Section no. 4: Flexible payments modal container -->
    <div id="ex1" class="modal modal-pagos-flexibles">
        <div class="modal-pagos-title fs20 openBo negro28">
            Plan de pagos flexibles
        </div>
        <div class="modal-pagos-descripcion fs14 robotoRe negro23">
            La opción de pagos flexible permite al alumno pagar la cuota del curso en parcialidades.
            <br>
            Esta opción está disponible en la solicitud de inscripción y deberá seleccionarse antes de realizar el
            pago.
        </div>
        <div class="modal-pagos-subtitle robotoRe fs16 negro46">
            Las siguientes opciones de pago están disponibles para el
            <span class="robotoBo">Curso de Marketing Digital:</span>
        </div>
        <div class="pagos">
            <div class="pagos-title fs18 openBo gris70">
                Pago total
            </div>
            <div class="precio-pago fs14 robotoRe negro23">
                <div class="dot-pagos"></div>La cuota completa del curso <span class="robotoBo">$1,295 USD</span> .
            </div>
        </div>
        <div class="pagos">
            <div class="pagos-title fs18 openBo gris70">
                Pago en 2 parcialidades
            </div>
            <div class="precio-pago fs14 robotoRe negro23">
                <div class="dot-pagos"></div>La primera parcialidad de <span class="robotoBo">$726 USD</span> se paga
                al inicio.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$594 USD</span> a pagar
                del 7 de junio de 2019.
            </div>
        </div>
        <div class="pagos no-border">
            <div class="pagos-title fs18 openBo gris70">
                Pago en 3 parcialidades
            </div>
            <div class="precio-pago fs14 robotoRe negro23">
                <div class="dot-pagos"></div>La primera parcialidad de <span class="robotoBo">$490 USD</span> se paga
                al inicio.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La segunda parcialidad de <span class="robotoBo">$435 USD</span> a pagar
                del 7 de junio de 2019.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$435 USD</span> a pagar
                del 22 de junio de 2019.
            </div>
        </div>
    </div> <!-- modal-pagos-flexibles -->


    <!-- Section no. 5: Professor -->
    <div class="tutores-expertos-container" style="border-top: 3px solid #efefef;">
        <div class="tutores-expertos-title crimsonBo fs32 negro28">
            PROFESORADO
        </div>
        <div class="tutor-container">
            <div class="tutor-cont tutor-cont-v2" style="box-shadow: 0 2px 10px -2px white;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/professor-Vineet-Goyal.jpg" alt="Vineet-Goyal">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Vineet Goyal</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description">
                    <img src="../assets/img/svg/Columbia-Engineering.svg" alt="Columbia Engineering" style="width: 230px; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="tutor-cont tutor-cont-v2" style="box-shadow: 0 2px 10px -2px white;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/professor-Costis-Maglaras.jpg" alt="Costis-Maglaras">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Costis Maglaras</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description">
                    <img src="../assets/img/svg/Columbia-Engineering.svg" alt="Columbia Engineering" style="width: 230px; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="tutor-cont tutor-cont-v2" style="box-shadow: 0 2px 10px -2px white;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/Hardeep-Johar.jpg" alt="Hardeep-Johar">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Hardeep Johar</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description">
                    <img src="../assets/img/svg/Columbia-Engineering.svg" alt="Columbia Engineering" style="width: 230px; display: block; margin: 0 auto;">
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 6: Journey -->
    <div class="tu-viaje-container">
        <div class="tu-viaje-title crimsonBo fs24 negro28">LO MÁS DESTACADO DEL CURSO</div>
        <div class="tu-viaje-cont" style="max-width: 810px;">

            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/video-lectures.svg" alt="Clases-en-video">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    120
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Clases en video
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/tareas.svg" alt="Cuestionarios-Tareas">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    12
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Cuestionarios / Tareas
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/discussions.svg" alt="Discusiones">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    9
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Sesiones de preguntas y respuestas con líderes del curso
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/simulations.svg" alt="Foros-de-discusión">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    3
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Foros de discusión
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/proyecto-final.svg" alt="Proyectos de aplicación">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    1
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Proyectos de aplicación
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/sesiones-online.svg" alt="sesiones-online">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    9
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Enseñanza en línea en vivo
                </div>
            </div>

        </div>
    </div>


    <!-- Section no. 9: Study Plan -->
    <div class="plan-de-estudios-container">
        <div class="plan-de-estudios-title crimsonBo fs30 negro19">
            Plan de estudios
        </div>
        <div class="modulos-container">
            <ul class="collapsible">
                <li class="desactive modulo-cont">
                    <div class="robotoBo fs18 negro19" style="margin: 18px auto 0;">HERRAMIENTAS Y GESTIÓN DE DATOS</div>
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 1</div>
                        <div class="module-title robotoBo negro23">
                            Conocimientos básicos de Python. 
                            <div class="robotoRe negro23" style="margin-left: 0!important;">
                            Traducir procedimientos a códigos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 2</div>
                        <div class="module-title robotoBo negro23">
                            Python intermedio
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                            Introducción a estructura de datos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 3</div>
                        <div class="module-title robotoBo negro23">
                            Bases de datos relacionales
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Donde están almacenados los datos (la mayoría)
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 4</div>
                        <div class="module-title robotoBo negro23">
                            SQL
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Formatos de bases de datos ubicuos/lenguajes
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="robotoBo fs18 negro19" style="margin: 18px auto 0;">ESTADÍSTICAS Y ANÁLISIS EXPLORATORIO DE DATOS</div>
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 5</div>
                        <div class="module-title robotoBo negro23">
                            Distribuciones estadísticas
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                La forma de los datos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 6</div>
                        <div class="module-title robotoBo negro23">
                            Muestreo
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Cuando no tienes todos los datos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 7</div>
                        <div class="module-title robotoBo negro23">
                            Prueba de hipótesis
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Responder preguntas sobre tus datos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 8</div>
                        <div class="module-title robotoBo negro23">
                            Análisis de datos y visualización
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Utilizar NumPy de Python para el análisis
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 9</div>
                        <div class="module-title robotoBo negro23">
                            Análisis de datos y visualización
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Utilizar Pandas de Python para la manipulación de datos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="robotoBo fs18 negro19" style="margin: 18px auto 0;">LOS CONOCIMIENTOS BÁSICOS DE MACHINE LEARNING (APRENDIZAJE AUTOMÁTICO)</div>
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 10</div>
                        <div class="module-title robotoBo negro23">
                            Minería de textos
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Entendimiento automático de textos
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 11</div>
                        <div class="module-title robotoBo negro23">
                            Regresión y clasificación
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Métodos de aprendizaje automático para predicción
                            </div>
                        </div>
                    </div>
                </li>
                <li class="desactive modulo-cont">
                    <div class="collapsible-header desactive robotoBo fs16">
                        <div class="No negro46">Módulo 12</div>
                        <div class="module-title robotoBo negro23">
                            Agrupación y árboles de decisión
                            <div class="module-title robotoRe negro23" style="margin-left: 0!important; width: 100%">
                                Métodos de representación para aprendizaje automático
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="prerrequisitos robotoRe fs16 negro46">
                <span class="robotoBo">PRERREQUISITOS:</span> Este curso requiere de conocimientos básicos de estadística de nivel licenciatura.
            </div>
        </div>
    </div>


    <!-- Section no.10: Apply Projects -->
    <div class="proyectos-container">
        <div class="proyectos-title crimsonBo fs24 negro28">
            PROYECTOS DE APLICACIÓN
        </div>
        <div class="proyectos-cont">

            <div class="proyecto">
                <div class="proyecto-img">
                    <img src="../assets/img/svg/icono-proyecto-1.svg" alt="Administración-de-datos">
                </div>
                <div class="proyecto-title robotoBo fs18 negro23">
                    Administración de datos utilizando CNC Mill Tool Wear Data
                </div>
                <div class="proyecto-descripcion robotoRe fs16 negro23">
                    Practica utilizando la estructura de Python para procesar y
                    manipular datos con CNC Mill Tool Weat dataset. 
                    <br>
                    <br>
                    Perfecciona la forma en la que manipulas los datos, así como tus 
                    habilidades para hacer data munging (cambiar los datos de un 
                    formato a otro) utilizando las librerías de Pandas y NumPy de 
                    Python con CNC Mill Tool Wear dataset
                </div>
            </div>
            <div class="proyecto">
                <div class="proyecto-img">
                    <img src="../assets/img/svg/icono-proyecto-2.svg" alt="Administración-de-datos">
                </div>
                <div class="proyecto-title robotoBo fs18 negro23">
                    Prueba de hipótesis utilizando CancerAtlas Data
                </div>
                <div class="proyecto-descripcion robotoRe fs16 negro23">
                    Prueba estadísticamente el impacto de factores de salud en 
                    relación con las tasas de cáncer alrededor del mundo.
                </div>
            </div>
            <div class="proyecto">
                <div class="proyecto-img">
                    <img src="../assets/img/svg/icono-proyecto-3.svg" alt="Administración-de-datos">
                </div>
                <div class="proyecto-title robotoBo fs18 negro23">
                    Exploración de datos utilizando Lending Club Loan Data
                </div>
                <div class="proyecto-descripcion robotoRe fs16 negro23">
                    Utiliza la librería NumPy de Python para explorar y descubrir 
                    insights en Lending Clubs Loan Data. 
                    <br>
                    <br>
                    Utiliza la potente librería de Pandas para manipular (wrangle) y 
                    munch Lending Club Loan Data.
                </div>
            </div>
            <div class="proyecto">
                <div class="proyecto-img">
                    <img src="../assets/img/svg/icono-proyecto-0.svg" alt="Administración-de-datos">
                </div>
                <div class="proyecto-title robotoBo fs18 negro23">
                    Implementación de Natural Language Processin (NLP) 
                    utilizando reseñas de productos de Amazon
                </div>
                <div class="proyecto-descripcion robotoRe fs16 negro23">
                    Implementa técnicas de Natural Language Processing (NLP) 
                    para automatizar la comprensión de las reseñas de producto de 
                    Amazon.
                </div>
            </div>

        </div>
    </div>


    <!-- Section no. 10: Benefits -->
    <div class="beneficios-container">
        <div class="beneficios-title crimsonBo fs32 negro28">Beneficios para el alumno</div>
        <div class="beneficios-cont">
            <div class="beneficio">
                <div class="beneficio-cont-title">
                    <div class="beneficio-img">
                        <img src="../assets/img/svg/intellectual-capital.svg" alt="Capital intelectual">
                    </div>
                    <div class="beneficio-title robotoBo fs20 negro46">
                        Capital intelectual
                    </div>
                </div>
                <div class="beneficio-desc grapRe fs14">
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Educacion globalmente.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Plan de estudios riguroso y empírico.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Profesorado mundialmente reconocido.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Aula globalmente conectada: círculos de aprendizaje
                            entre pares.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Aprendizaje para la acción: aprender haciendo.</div>
                    </div>
                </div>
            </div>
            <div class="beneficio">
                <div class="beneficio-cont-title">
                    <div class="beneficio-img">
                        <img src="../assets/img/svg/brand-capital.svg" alt="Capital de marca">
                    </div>
                    <div class="beneficio-title robotoBo fs20 negro46">
                        Capital de marca
                    </div>
                </div>
                <div class="beneficio-desc grapRe fs14">
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">
                            Certificado de estudios expedido por Emeritus y la Columbia Business School, Executive
                            Education.
                        </div>
                    </div>
                </div>
            </div>
            <div class="beneficio">
                <div class="beneficio-cont-title">
                    <div class="beneficio-img">
                        <img src="../assets/img/svg/social-capital.svg" alt="Capital social">
                    </div>
                    <div class="beneficio-title robotoBo fs20 negro46">
                        Capital social
                    </div>
                </div>
                <div class="beneficio-desc grapRe fs14">
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Creación de nuevas redes y relaciones a través de la
                            interacción entre
                            pares de distintos países de habla hispana.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Enriquecimiento de la experiencia de aprendizaje por la
                            interacción
                            con participantes de diversos perfiles y trayectorias profesionales.</div>
                    </div>
                </div>
            </div>
            <div class="beneficio">
                <div class="beneficio-cont-title">
                    <div class="beneficio-img">
                        <img src="../assets/img/svg/career-capital.svg" alt="Capital de carrera">
                    </div>
                    <div class="beneficio-title robotoBo fs20 negro46">
                        Capital de carrera
                    </div>
                </div>
                <div class="beneficio-desc grapRe fs14">
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Aceleramiento del crecimiento profesional a través de
                            nuestro
                            perfeccionado juego de herramientas para el liderazgo.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Aprende mientras trabajas.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Destaca, toma la delantera.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 11: Q&A -->
    <div class="plan-de-estudios-container">
        <div class="plan-de-estudios-title crimsonBo fs30 negro19">
            PREGUNTAS FRECUENTES
        </div>
        <div class="modulos-container">
            <ul class="collapsible">
                <li class="active modulo-cont">
                    <div class="robotoBo fs18 negro19">¿PARA QUIÉN ESTÁ DISEÑADO EL CURSO?</div>
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">¿De qué se trata el curso?</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso de Ciencia de Datos Aplicada es un curso certificado en línea con duración de tres 
                        meses diseñado para profesionales que trabajan y que quieren adquirir habilidades y 
                        conocimientos prácticos, establecer una red profesional de contactos y acelerar su acceso 
                        a carreras relacionadas con Ciencia de Datos.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">¿Por qué debería tomar este curso?</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        La proliferación de la Ciencia de Datos está cambiando a las industrias. Todos, 
                        desde biólogos y productores de películas hasta los que hacen coches y restauranteros 
                        empiezan a darse cuenta de que la Ciencia de Datos está transformando sus profesiones. 
                        Esto ha traído consigo un aumento en la demanda de profesionales en Ciencia de Datos 
                        que se espera continúe por varios años. El objetivo de este curso es proveer de conocimientos 
                        fundamentales de la Ciencia de Datos, incluyendo herramientas y términos relevantes, 
                        así como la capacidad de entendimiento de los algoritmos más populares y sus aplicaciones.
                        <br>
                        <br>
                        Con los conocimientos obtenidos en este curso serás capaz de introducir estas técnicas 
                        en organizaciones que todavía no utilizan la Ciencia de Datos. Los analistas de negocios 
                        y los profesionales de datos que buscan desempeñarse como científicos de datos se 
                        beneficiarán particularmente de este curso.

                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">¿Para qué tipo de trabajos me preparará este curso?</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Este curso certificado te preparará para una variedad de roles profesionales como 
                        Científico de Datos, Ingeniero en Ciencia de Datos, Analista de Negocios – Ciencia de 
                        Datos, Líder de Proyecto en Ciencia de Datos, Director de Data y Analíticas, entre otras.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">¿A quién va dirigido el curso?</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Analista de datos</p>
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Analista de negocios</p>
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Trabajar con estadísticas/matemáticas</p>
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Ingeniero de datos</p>
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Ingeniero de Big Data</p>
                        <p class="padding-text-modulos">
                            <strong> - &nbsp;&nbsp;&nbsp;</strong>Desarrollador de software</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            Mi actual posición en mi empresa no amerita contacto con Ciencia de Datos. Tomando en cuenta eso, ¿tiene sentido que tome el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        ¡Por supuesto! Saber de Ciencia de Datos se ha convertido en un requisito en muchas 
                        industrias y todos los negocios necesitarán, eventualmente, utilizar estas técnicas para 
                        progresar. Aun cuando en tu actual puesto no se requiera de conocimiento en Ciencia de 
                        Datos, es casi un hecho que las habilidades relacionadas con Ciencia de Datos estarán 
                        altamente demandadas en casi todas las industrias del futuro.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué debo esperar del curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso está diseñado para profesionales que trabajan y que buscan obtener habilidades 
                        referentes a conceptos avanzados en Ciencia de Datos. El curso requiere de trabajo 
                        constante y del compromiso de dedicar entre seis y ocho horas a la semana durante un 
                        lapso de tres meses.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué no debo esperar del curso de Ciencia de Datos Aplicada?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Este curso NO fue diseñado para proveer conceptos básicos en Ciencia de Datos. Por el 
                        contrario, el curso profundiza en los conceptos y tiene como objetivo desarrollar 
                        profesionales que puedan evolucionar para convertirse en científicos de datos. 
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué conceptos se explicarán en el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso de Ciencia de Datos Aplicada está diseñado para profesionales con algo de 
                        experiencia en el análisis de datos y poca experiencia en programación. Los estudiantes 
                        aprenderán a analizar datos utilizando Python y SQL y a manipular y limpiar los datos, 
                        además, podrán aplicar estadísticas para probar hipótesis y crear visualizaciones de datos. 
                        Los estudiantes también aprenderán técnicas de minería de textos y modelos de machine 
                        learning (aprendizaje automático) de regresión, clasificación, árboles de decisión y 
                        agrupaciones.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cuál es la diferencia entre este curso y el curso de Learning Machine 
                            Applied (aprendizaje automático aplicado)?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                    El curso de Ciencia de Datos Aplicada está diseñado para profesionales con algo de 
                    experiencia en el análisis de datos y poca experiencia en programación. Los estudiantes 
                    aprenderán a analizar datos utilizando Python y SQL y a manipular y limpiar los datos, 
                    además, podrán aplicar estadísticas para probar hipótesis y crear visualizaciones de datos. 
                    Los estudiantes también aprenderán técnicas de minería de textos y modelos de machine 
                    Learning (aprendizaje automático) de regresión, clasificación, árboles de decisión y 
                    agrupaciones. Todo esto preparará a los estudiantes para desempeñarse como científicos 
                    de datos.
                    <br>
                    <br>
                    El curso de Applied Machine Learning prepara a los estudiantes para profesiones 
                    relacionadas con el aprendizaje automático. Tanto los trabajos de ciencia de datos como
                    los de machine learning requieren de conocimientos básicos de machine learning, por lo 
                    que los programas tienen módulos en común; sin embargo, conforme se ahonda en los 
                    temas se tocan temas específicos como herramientas, habilidades y técnicas. 
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué tipo de experiencia de aprendizaje tendré durante el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso es una combinación de clases interactivas y tareas individuales y en equipo. 
                        También incluye sesiones en vivo con los líderes del curso hechas para a guiarte durante 
                        tu experiencia de aprendizaje. 
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cuál es la estructura del curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso certificado de Ciencia de Datos Aplicada se compone de 12 módulos que se 
                        cursan a lo largo de tres meses. El curso tiene fechas fijas de inicio y final. Para terminar el 
                        curso los estudiantes deben completar todos los módulos, haber visto los videos y haber 
                        entregado las tareas y los proyectos. Los proyectos requieren que los estudiantes apliquen 
                        los conceptos de Ciencia de Datos a conjuntos de datos y hacer inferencias a partir de 
                        ellos. Además, los estudiantes podrán participar en foros de discusión y asistir a webinars 
                        en vivo de la mano de expertos en la materia y profesionales con experiencia en el campo 
                        de la Ciencia de Datos. 
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cómo puedo aplicar los conceptos y las ideas aprendidas en el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso es una mezcla de teoría, herramientas y casos de estudio (conjunto de datos) que 
                        son fáciles de entender e implementar. Por ejemplo, los estudiantes trabajan en proyectos 
                        que requieren la aplicación de conceptos de Ciencia de Datos a conjuntos de datos y 
                        deben poder hacer inferencias a partir de ellos. De forma intencionada, los proyectos 
                        pretenden ser todo un reto, por lo que los estudiantes deben pasar un tiempo 
                        considerable tratando de resolverlos: más o menos de seis a ocho horas a la semana. Para 
                        el final del curso los estudiantes serán capaces de aplicar conceptos de Ciencia de Datos 
                        que les permitan resolver muchos de los problemas que se presentan en los negocios.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Hay becas disponibles para este curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Sí, EMERITUS cuenta con becas para un número limitado de participantes. Toma en 
                        cuenta que se necesita que presentes una solicitud completa y en forma para poder ser 
                        considerado para una beca. Una vez que la aplicación sea revisada, se te notificará si eres 
                        acreedor a alguna de las becas el curso.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué relación tienen EMERITUS y Columbia Engineering Executive Education?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Columbia Engineering Executive Education colabora con el proveedor de educación en 
                        línea, EMERITUS Institute of Management para ofrecer un portafolio de cursos en línea de 
                        alto impacto. Estos cursos ayudan a Columbia a posicionarse como uno de los líderes en 
                        gestión de proyectos, liderazgo obtenido después de años de investigación, enseñanza y 
                        práctica.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cuáles son los prerrequisitos para poder inscribirme?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        El curso requiere cierto conocimiento previo de estadística, así como estar familiarizado 
                        con Python o, por lo menos, con otro lenguaje de programación y cierto entendimiento de 
                        álgebra lineal y probabilidad.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="robotoBo fs18 negro19" style="margin-top: 30px;">ADMISIONES</div>
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Debo mandar una solicitud? ¿Cuáles son los criterios de admisión?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Sí, debes mandar una solicitud para inscribirte al curso. Debes llenar un corto formulario. 
                        Este curso certificado acepta todas las aplicaciones sin importar la experiencia o el 
                        entorno del que provengas.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿La solicitud tiene algún costo?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        No, no tiene ningún costo.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Existe algún requisito de grado académico para tomar el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        No, este curso certificado acepta todas las aplicaciones sin importar la experiencia o 
                        el entorno del que provengas.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Debo tener cierta experiencia profesional para tomar el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        No, este curso certificado acepta todas las aplicaciones sin importar la experiencia o el entorno del que provengas.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Estudiar este curso me dará créditos profesionales para futuros estudios 
                            en la Universidad de Columbia?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                    El curso no da créditos ni puntos académicos para ningún curso de la 
                    Universidad de Columbia.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cuentan con alguna política de aplazamiento o reembolso para este curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Por favor, consulta el siguiente link sobre nuestra política de reembolsos:
                        <br>
                        <br>
                        <a href="https://sg.EMERITUS.org/academic-policies/#1451347666327-6b5f3fe0-cfca" target="_blank" rel="noopener noreferrer">
                            https://sg.EMERITUS.org/academic-policies/#1451347666327-6b5f3fe0-cfca
                        </a>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Cómo pago el curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Puedes pagar el curso con una tarjeta de débito o crédito internacional. También puedes 
                        pagar el programa utilizando una transferencia bancaria o telegráfica. A continuación, los 
                        detalles para hacer transferencias (por favor, incluye el número de la factura):
                        <br>
                        <br>
                        <p class="padding-text-modulos">
                            Nombre de la cuenta: Emeritus Institute of Management Pte Ltd
                        </p>
                        <p class="padding-text-modulos">
                            Nombre del banco: The Hongkong and Shanghai Banking Corporation Limited
                        </p>
                        <p class="padding-text-modulos">
                            Dirección del banco: 21 Collyer Quay, #07-01 HSBC Building, Singapore 049320
                        </p>
                        <p class="padding-text-modulos">
                            Número de cuenta en dólares: 260-816558-178
                        </p>
                        <p class="padding-text-modulos">
                            Código del banco: 7232
                        </p>
                        <p class="padding-text-modulos">
                            Código de sucursal: 260
                        </p>
                        <p class="padding-text-modulos">
                            Código SWIFT: HSBCSGSG
                        </p>
                        <br>
                        <br>
                        Una vez que hayas enviado la solicitud para el curso recibirás una factura. Se requiere del 
                        pago del curso para tener acceso al mismo. Una vez aplicado el pago recibirás un recibo 
                        para tu archivo o para asuntos relacionados con impuestos.
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="robotoBo fs18 negro19" style="margin-top: 30px;">
                        APRENDIZAJE / ENSEÑANZA / EVALUACIÓN / CERTIFICADO
                    </div>
                    <div class="collapsible-header robotoBo fs16">
                        <div class="module-title robotoRe negro23" style="margin: 0!important;">
                            ¿Qué software y qué versiones necesito para tomar este curso?
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body robotoRe fs16 negro23">
                        Sí, debes mandar una solicitud para inscribirte al curso. Debes llenar un corto formulario. 
                        Este curso certificado acepta todas las aplicaciones sin importar la experiencia o el 
                        entorno del que provengas.
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <!-- Section no. 12: How it works -->
    <div class="como-funciona-container">
        <div class="como-funciona-title crimsonBo fs24 negro28">Cómo funciona</div>
        <div class="como-funciona-cont">
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">1</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Ingresa a la plataforma
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    Canvas es la plataforma de
                    aprendizaje que elegimos por su
                    facilidad de uso, accesibilidad,
                    confiabilidad, movilidad y por
                    albergar el contenido en la nube.
                    Después de inscribirte y efectuar el
                    pago del curso, recibirás un correo
                    de bienvenida para comenzar tu
                    certificado.
                </div>
            </div>
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">2</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Toma los cursos en línea
                    donde te encuentres
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    El tablero muestra tus cursos, tareas
                    y webinars. Todos los materiales de
                    los módulos están en un solo lugar y
                    puedes acceder a ellos desde
                    cualquier dispositivo.
                </div>
            </div>
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">3</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Completa el programa
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    Con la ayuda de nuestros anuncios y
                    recordatorios, aprueba las
                    asignaciones y el proyecto final
                    satisfactoriamente.
                    Únete al Emeritus Network para
                    intercambiar conocimientos y
                    experiencias y ampliar tus
                    oportunidades profesionales.
                </div>
            </div>
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">4</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Logra tu meta: obtén el
                    certificado digital del
                    programa
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    Al terminar con éxito el plan de
                    estudios, recibirás un certificado
                    electrónico que avala los
                    conocimientos que has adquirido en
                    el programa.
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 13: Certificate Image -->
    <div class="certificado-container">
        <div class="certificado-cont">
            <!-- Link to open the modal -->
            <a class="certificado-img" href="#ex2" rel="modal:open">
                <div>
                    <img src="../assets/img/png/certificado.png" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex2" class="modal modal-certificado">
                <img src="../assets/img/jpg/big-ceritificate-1.jpg" alt="Certificado">
            </div>
            <div class="certificado-datos">
                <div class="certificado-title crimsonBo fs24 blanco">
                    Certificado
                </div>
                <div class="certificado-subtitle robotoRe fs20 blanco">
                    Al concluir satisfactoriamente el programa,
                    los participantes son reconocidos con un
                    certificado oficial de conclusión de estudios
                    respaldado por Emeritus y Columbia Business
                    School.
                </div>
                <div class="certificado-button">
                    <a class="robotoRe fs16 blanco" href="http://bit.ly/2ubwV9V" target="_blank" rel="noopener noreferrer">
                        Inscríbete
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 14: Testimonials -->
    <div class="testimonios-main-container">
        <div class="testimonios-title crimsonRe fs24 negro28">
            TESTIMONIOS <span class="crimsonBo"> DE ESTUDIANTES</span>
        </div>
        <div class="slick-items">
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                    "Los ejemplos que se usaron para ilustrar los diferentes aspectos 
                    del desarrollo de productos fueron extremadamente útiles".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Jenny Brown
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Especialista en desarrollo de productos de UX, Centro de Incubación digital.
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Qatar
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/jennyellenbrown/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “Una experiencia única. El curso no solo abarcó clases interesantes
                        y estudios de caso, ¡sino también simulaciones que nos permitieron
                        implementar lo aprendido!”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Héctor Iván Lira Hevia
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director de Administración, F1rstcomm
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            México
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/hectorlira/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “La mejor parte fue la mezcla de diferentes medios educativos (clases
                        en video, tareas, proyectos grupales, discusiones y webinarios), que
                        hicieron del curso una experiencia interesante, didáctica y atractiva”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        France Pizenberg
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Compradora de Medios Senior, Carat
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Estados Unidos
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/france-pizenberg-69200336/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “Este curso me dio una ruta clara y sencilla del marketing digital; las
                        simulaciones; la confianza para manejar campañas publicitarias en el
                        mundo real.”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Shikhar Goel
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Gerente de Marketing y Desarrollo de Negocios,
                        Manhattan Wellness Psychiatry
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/shikhar-goel/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “Las clases en video del profesor y las simulaciones en
                        línea fueron una brillante mezcla de práctica y teoría.”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Mon Korcharoen
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director de Programa, Dhurakij Pundit University
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Tailandia
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/mon-korcharoen-29a92b13a/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “Las clases ayudaron a
                        aclarar conceptos, mientras que las simulaciones nos permitieron
                        hacerlos reales en términos de los resultados en las redes sociales.
                        Las tareas también fueron muy útiles porque prueban la comprensión de
                        los conceptos, y la red valiosa porque nos ayudó a entender dónde
                        necesitamos mejorar.”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Priya Shah
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        CEO, Blog Brandz
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/priyashah/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cont-slide">
                <div class="slide">
                    <div class="icn-comillas">
                        <img src="../assets/img/svg/quotation-marks.svg" alt="Comillas">
                    </div>
                    <div class="comentario fs16 robotoRe negro23">
                        “Las simulaciones fueron la mejor parte del curso. Ayudan a mejorar
                        la técnica del marketing digital y a construir una estrategia robusta.”
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Marica Buquicchio
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Propietaria, Marica Buquicchio
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Italia
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/maricabuquicchio/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 15: Colaboration -->
    <div class="colaboracion-container">
        <div class="colaboracion-flex">
            <div class="colaboracion-logos">
                <div class="colaboracion">
                    <img src="../assets/img/svg/emeritus-logo-complete.svg" alt="Emeritus">
                </div>
                <div class="colaboracion">
                    <div class="fs11 robotoRe"><i>En colaboración con</i></div>
                    <img src="../assets/img/svg/columbia-logo-light.svg" alt="CBS">
                </div>
            </div>
            <div class="colaboracion-descripcion fs14 robotoRe">
                La Columbia Business School está colaborando con el proveedor de educación en línea EMERITUS
                Institute of Management, para ofrecer un portafolio de programas en línea de alto impacto.
                Estos programas impulsan el liderazgo de la Columbia Business School en cuanto a la práctica
                de administración desarrollada a lo largo de años de investigación, enseñanza y práctica. Al
                colaborar con EMERITUS, estamos en posibilidad de ampliar el acceso más allá de nuestra oferta
                en el campus, y ello en un formato de colaboración y compromiso fiel a la calidad de la Columbia
                Business School, Educación para Ejecutivos.
            </div>
            <div class="colaboracion-info">
                <div class="colaboracion-info-img">
                    <img src="../assets/img/svg/icono-interrogacion.svg" alt="Interrogación">
                </div>
                <div class="colaboracion-info-descripcion fs16 robotoRe">
                    Si quieres más información acerca de la colaboración entre Columbia Business School
                    y EMERITUS Institute of Management para este curso, <a class="rosaD8 robotoBo" href="https://www8.gsb.columbia.edu/execed/programs-for-individuals/online/emeritus"
                        target="_blank">da clic aquí</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 16: Footer -->
    <div class="footer-container">
        <div class="footer-title fs20 negro46 crimsonBo">
            ACERCA DE LOS CONTENIDOS DEL CURSO
        </div>
        <div class="footer-container-flex">
            <div class="footer-texto-grande fs14 gris6E robotoRe">
                El USUARIO se obliga a usar los CONTENIDOS y los elementos utilizados en el SITIO de forma diligente,
                correcta y lícita, y en particular, se compromete a abstenerse de: (a) utilizar los CONTENIDOS de
                forma,
                con fines o efectos contrarios a la ley, al orden público y a lo establecido por el EMERITUS INSTITUTE
                OF MANAGEMENT para el uso de este SITIO; (b) copiar, difundir, modificar, reproducir, distribuir o
                utilizar de cualquier forma con o sin fines de lucro los CONTENIDOS y los elementos utilizados en el
                SITIO, a menos que se cuente con la autorización expresa y por escrito de EMERITUS INSTITUTE OF
                MANAGEMENT;
                (c) suprimir, eludir o modificar los CONTENIDOS y los elementos utilizados en el SITIO, así como los
                dispositivos técnicos de protección, o cualquier mecanismo o procedimiento establecido en el SITIO.
            </div>
            <div class="footer-linea-vertical"></div>
            <div class="footer-texto-chico fs14 gris6E robotoRe">
                EMERITUS INSTITUTE OF MANAGEMENT declara que todos los CONTENIDOS y los elementos utilizados en el
                SITIO
                se encuentran debidamente registrados y protegidos bajo las autoridades y leyes correspondientes. Por
                razones de derecho de autor, algunos contenidos del curso se entregarán en su idioma original (inglés).
            </div>
        </div>
        <div class="footer-linea-horizontal"></div>
        <div class="footer-copy fs12 cafe6C robotoRe">
            EMERITUS Institute of Management | Registro del Comité para la Educación Privada No. 201510637C
            | Periodo: del 29 de marzo del 2018 al 28 de marzo de 2022
        </div>
        <div class="terminos-politicas-container rosa75">
            <a class="fs12 rosa75 robotoRe" href="https://latam.emeritus.org/terminos-de-servicio.php" target="_blank">Términos
                de servicio</a>
            |
            <a class="fs12 rosa75 robotoRe" href="https://latam.emeritus.org/politica-de-privacidad.php" target="_blank">Política
                de privacidad</a>
        </div>
    </div>


    <!--<script async type="text/javascript" src="https://latam.emeritus.org/programas/../assets/js/gdpr.js"></script>-->


    <!-- Inline script to control the AOSanimations -->
    <script type="text/javascript">
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            //offset: 120, // offset (in px) from the original trigger point
            //delay: 0, // values from 0 to 3000, with step 50ms
            //duration: 400, // values from 0 to 3000, with step 50ms
            //easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>


    <!-- Populating the countrie, using a function in Countries Script added at the top of this file. -->
    <script type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/countries-latam-update.js"></script>
    <script type="text/javascript">
        populateCountries("country");
    </script>


    <!--
        Inline script provided by Ruchira's team. It is in charge of reading the params in the URL and inserting them into the
        form hidden fields to be sent to the provided web service.
    -->
    <script type="text/javascript">
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
            var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        jQuery(document).ready(function () {
            jQuery('#utm_source').val(getParameterByName("utm_source"));
            jQuery('#utm_medium').val(getParameterByName("utm_medium"));
            jQuery('#utm_content').val(getParameterByName("utm_content"));
            jQuery('#utm_campaign').val(getParameterByName("utm_campaign"));
            jQuery('#utm_term').val(getParameterByName("utm_term"));
        })
    </script>


    <!-- Inline script provided by Ruchira's team. It is in charge of inserting the Pardot's script. -->
    <script type="text/javascript">
        piAId = '135351';
        piCId = '1429';

        (function () {
            function async_load() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') +
                    '.pardot.com/pd.js';
                var c = document.getElementsByTagName('script')[0];
                c.parentNode.insertBefore(s, c);
            }


            if (window.attachEvent) {
                window.attachEvent('onload', async_load);
            } else {
                window.addEventListener('load', async_load, false);
            }

        })();
    </script>


</body>

</html>