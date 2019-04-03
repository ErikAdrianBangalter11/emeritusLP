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
    <title>Estrategias Digitales | Innovación empresarial y nuevos modelos de negocio</title>
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/emfavicon.png" />


    <!-- Styling -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css"> <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/libs/mdl/material.min.css"> <!-- Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Modals -->
    <link rel="stylesheet" href="../assets/libs/slick/slick.css"> <!-- Slick Slider -->
    <link rel="stylesheet" href="../assets/libs/slick/slick-theme.css"> <!-- Slick Slider -->
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
    <!-- Countries Script provided by Ruchira's Team -->
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <!-- Script for register the UTM parameters in Logs -->


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
                <img class="Logo-one" src="../assets/img/svg/emeritus-logo-light.svg" alt="Emeritus LATAM">
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
        <div class="hero-data hero_ED">
        
            <div class="idioma">
                <img src="../assets/img/svg/ahora.svg" alt="Ahora-en-español">
            </div>
            <div class="hero-data-cont">
                <div class="hero-title">
                    <div class="CBS-back openRe fs16 blanco">
                        <span class="openBo">NUEVO</span> programa <i>online</i>
                    </div>
                    <div class="robotoRE fs26 blanco">
                        ESTRATEGIAS <span class="robotoBo">DIGITALES</span>
                    </div>
                    <div class="robotoBo fs16 blanco">
                        Innovación empresarial y nuevos modelos de negocio
                    </div>
                </div>
            </div>
        </div><!-- hero-data -->

        <!-- University Logo -->
        <div class="movil logo-universidad-container">
            <div class="logo-universidad-title fs12 robotoRe gris6E">
                <i>En colaboración con</i>
            </div>
            <img src="../assets/img/svg/logo-columbia-business-school-executive-education.svg" alt="Columbia Business School">
        </div>

        <div class="precio-container">
            <div class="precio-cont">
                <div class="precio">
                    <div class="subtitle-duracion fs16 robotoBo gris6E">
                        Duración
                    </div>

                    <div class="duracion-cont">
                        <img src="../assets/img/svg/calendar.svg" alt="calendario">
                        <div class="duracion-desc fs16 robotoRe negro">8 semanas, en línea</div>
                    </div>

                    <div class="duracion-cont">
                        <img src="../assets/img/svg/clock.svg" alt="reloj">
                        <div class="duracion-desc fs16 robotoRe negro">2-4 horas por semana</div>
                    </div>

                    <div class="fechas-cont">
                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Comienza</div>
                            <div class="fecha fs18 robotoRe negro">10/06/2019</div>
                        </div>

                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Termina</div>
                            <div class="fecha fs18 robotoRe negro">26/08/2019</div>
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
        <img src="../assets/img/svg/logo-columbia-business-school-executive-education.svg" alt="Columbia Business School">
    </div>


    <!-- Section no. 3: Information & Form Section -->
    <div class="informacion-formulario-container">

        <div class="informacion-container">
            <div class="informacion-title fs24 crimsonRe negro23">
               CONOCE LAS CLAVES
                <span class="crimsonBo">DEL ÉXITO DIGITAL</span>
            </div> <!-- informacion-title -->

            <div class="informacion robotoRe fs16">
                Las señales son claras: la proliferación de nuevos canales de comunicación, el creciente poder de los clientes y la intervención <a class="button-enable robotoBo fs16 rosa51">...más</a>

                <span class="enable">
                    de fuerzas disruptivas implican un reto sin precedentes para el mundo empresarial; el llamado "desafío digital".
                    <br>
                    <br>
                    Pero las estrategias digitales necesarias para hacerle frente no son obra de generación espontánea, ni dependen exclusivamente de la adquisición de las últimas herramientas tecnológicas; requieren de líderes capaces de plantearlas, ejecutarlas, medirlas y optimizarlas en línea con sus metas empresariales. 
                    <br>
                    <br>
                   Descubre los cinco dominios de las estrategias digitales y da una nueva dimensión a tu negocio de la mano de David Rogers, creador del modelo de redes de clientes y autor del bestseller The <i>Digital Transformation Playbook. </i>
                </span>
            </div> <!-- informacion -->
            <span class="enable">
                <div class="informacion-relevante">

                    <div class="relevante-container">
                        <div class="fs30 robotoRe azulBC">
                            <div class="desktop">En 2020 <span class="robotoBo fs44">+85%</span></div>
                            <div class="No-relevante movil">En 2020 <br><span class="robotoBo fs44">+85%</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            de las comunicaciones entre clientes y marcas se llevará a cabo sin intervenciones humanas.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: GARTNER, 2018.
                        </div>
                    </div> <!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs44 rosa75">
                            <div class="No-relevante robotoBo">25%</div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            de la economía mundial será digital en 2020.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: ÍNDICE DEL VALOR ECONÓMICO DIGITAL.
                        </div>
                    </div><!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs30 robotoRe azulBC">
                            <div class="desktop">Para el año <span class="robotoBo fs44">2021,</span></div>
                            <div class="N-relevanteo movil">Para el año <br><span class="robotoBo fs44">2021,</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            las marcas pioneras que rediseñen sus sitios web para respaldar la búsqueda 
                            visual y de voz aumentarán los ingresos del ecommerce en un 30%.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: GARTNER, 2018.
                        </div>
                    </div> <!-- relevante-container -->

                </div>
            </span>
        </div> <!-- informacion-container -->

        <!--
            This is the form container with action: 'https://www2.emeritus.org/l/134351/2018-08-12/43bb5v'
            This action (webservice) was provided by Ruchira's team. Each of the landing pages has a different endpoint in the action param.
        -->
        <div class="fomulario-container">
            <div class="form" id="form">
                <div class="form-title robotoBo fs18 blanco">Obtén información del programa</div>
                <form class="form-cont" method="POST" action="https://www2.emeritus.org/l/134351/2018-08-12/43bb5v">

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
                        <input type="hidden" name="utm_source" id="lead_source" value="">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="browser" value="">
                        <input type="hidden" name="course" id="course" value="Estrategias-Digitales">
                        <!--This value is different in each in the pages-->
                        <input type="hidden" name="retURL" value="https://latam.emeritus.org/programas/Thank-you-page-ED.php?<?php echo $queryString; ?>">
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
            La opción de pagos flexible permite al alumno pagar la cuota del
            curso
            en parcialidades.Esta opción está disponible en la solicitud de inscripción y deberá seleccionarse
            antes de
            realizar el pago.
        </div>
        <div class="modal-pagos-subtitle robotoRe fs16 negro46">
            Las siguientes opciones de pago están disponibles para el 
            <strong> Curso de Estrategias Digitales:</strong>
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
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$594 USD</span> a partir el 05 de julio del 2019
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
                <div class="dot-pagos"></div>La segunda parcialidad de <span class="robotoBo">$435 USD</span> a partir el 05 de julio del 2019
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$435 USD</span> a partir el 20 de julio del 2019
            </div>
        </div>
    </div> <!-- modal-pagos-flexibles -->


    <!-- Section no. 5: Certificate -->
    <div class="el-certificado-container">
        <div class="el-certificado-title crimsonRe fs24 negro28">
            EL CERTIFICADO EN
            <span class="crimsonBo">
                ESTRATEGIAS DIGITALES ES PARA TI SI:
            </span>
        </div>
        <div class="el-certificado-img">
            <img class="el-certificado-desktop" src="../assets/img/jpg/es-para-ti-si-imagen-DT.jpg" alt="El certificado en marketing digital">
            <img class="el-certificado-movil" src="../assets/img/jpg/es-para-ti-si-imagen-DT-movil.jpg" alt="El certificado en marketing digital">
        </div>
        <div class="el-certificado-requisitos-cont">
            <div class="requisito fs16 robotoRe negro">
                Eres un profesional de mercadotecnia, ventas o tienes tu 
                propio negocio y necesitas integrar una estrategia digital 
                como parte fundamental de tu plan y modelo de negocio. 
            </div>
            <div class="requisito fs16 robotoRe negro">
                Eres emprendedor y necesitas claves estratégicas para 
                desarrollar o competir con modelos de negocio disruptivos. 
            </div>
            <div class="requisito fs16 robotoRe negro">
                Por tus responsabilidades debes ampliar tus conocimientos 
                del mundo digital para implementar estrategias efectivas 
                en los mercados digitales. 
            </div>
        </div>
    </div>


    <!-- Section no. 6: Profesors -->
    <div class="profesor-container">
        <div class="profesor-title crimsonBo fs24 negro28">
            Profesorado
        </div>
        <div class="profesor-cont">
            <div class="profesor-desc">
                <div class="profesor-desc-cont">
                    <div class="profesor-img">
                        <img class="CBS-bord" src="../assets/img/jpg/rogers250x250.jpg" alt="David Rogers">
                    </div>
                    <div class="profesor-data">
                        <div class="robotoRe fs16 negro46">Autor y profesor titular</div>
                        <div class="robotoBo fs18 negro46">David Rogers</div>
                        <div class="robotoRe fs16 azulC4"><i>Columbia Business School</i></div>
                    </div>
                </div>
                <div class="profesor-description robotoRe fs14 negro46">
                Experto mundialmente reconocido por su conocimiento en materia de marcas y estrategias de 
                negocios digitales, <span class="robotoBo">David Rogers es el creador del modelo pionero 
                de redes de clientes.</span>
                <br>
                <br>
                Académico destacado de la Columbia Business School, ha escrito varios libros sobre el tema, 
                entre los que destacan <i>The Network Is Your Customer</i> (La red es tu cliente) y el recientemente
                publicado <i>The Digital Transformation Playbook: Rethink Your Business to Adapt and Thrive in 
                the Digital Age</i> (Manual de estrategias para la transformación digital: Repensar el negocio 
                para adaptar y prevalecer en la era digital). 
                </div>
            </div>
            <div class="video-container">
                <iframe  src="https://www.youtube.com/embed/K9LXA3qBl6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- Section no. 7: Experts -->
    <div class="tutores-expertos-container">
        <div class="tutores-expertos-title crimsonBo fs32 negro28">
            Tutores expertos
        </div>
        <div class="tutores-expertos-subtitle robotoBo fs18 gris61">
            Para culminar tu viaje de aprendizaje con éxito cuentas con 
            la asesoría de una experta en Estrategias Digitales en español: 
        </div>
        <div class="tutor-container">
            <div class="tutor-cont tutor-cont-v1">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/Kalina-Hadzhitodorova.jpg" alt="Kalina-Hadzhitodorova">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Kalina Hadzhitodorova</div>
                        <div class="robotoRe fs14 negro46">
                            Conferencista
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Moderadora de Emeritus Institute of Management, Kalina ha destacado como 
                    consultora estratégica para clientes de industrias diversas, aplicando 
                    su conocimiento de modelos digitales de plataforma de negocio en áreas 
                    como venta en línea de bienes raíces, servicios on-demand y comercio electrónico.
                    <br>
                    <br>
                    McS en Manejo y Psicología de Medios con enfoque en medios digitales, ha 
                    dirigido la transformación digital de empresas tradicionales y ha sido 
                    fundadora, CEO y asesora de startups digitales nativas. También se desempeña 
                    como conferencista y tiene experiencia internacional en Asia (China y Japón), 
                    Europa (Bélgica, Francia y Alemania) y Latinoamérica (Brasil, México y Centroamérica). 
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 8: Certificate  -->
    <div class="con-certificado-container">
        <div class="con-certificado-title fs28 crimsonRe">
            CON EL CERTIFICADO EN <span class="crimsonBo">ESTRATEGIAS DIGITALES APRENDERÁS A:</span>
        </div>
        <div class="con-certificado-cont">
            <div class="con-certificado-img">
                <img src="../assets/img/jpg/aprenderas-a-imagen-ED.jpg" alt="aprenderas-a-imagen">
            </div>

            <div class="con-certificado-flex">

                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            1
                        </div>
                        <div class="paso-texto fs16">
                            Plantear estrategias y modelos de negocio que exploten las posibilidades de la 
                            era digital para generar valor para tus clientes y oportunidades para tu negocio. 
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            2
                        </div>
                        <div class="paso-texto fs16">
                            Comprender el comportamiento de los clientes a nivel digital y sus implicaciones 
                            para tu modelo de negocio. 
                        </div>
                    </div>

                </div>
                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            3
                        </div>
                        <div class="paso-texto fs16">
                            Analizar nuevas plataformas de negocio y cómo están replanteando la competitividad 
                            a escala global. 
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            4
                        </div>
                        <div class="paso-texto fs16">
                            Desarrollar y utilizar Big Data como un activo estratégico a nivel empresarial. 
                        </div>
                    </div>
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
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 1</div>
                        <div class="module-title robotoRe negro23">Los cinco dominios de la transformación digital: marco holístico</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <p>
                                <div class="robotoBo">
                                    <br>Trabajo previo 
                                </div>
                            </p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>
                                Qué tan preparado estás para la revolución digital – Encuesta de autoevaluación Lecturas previas sobre – "La red es tu cliente".
                            </p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>
                                Lectura previa – "Cómo se califican las ciudades".
                            </p>
                            <p>
                                <p>
                                    <div class="robotoBo">
                                        <br>Estructura
                                    </div>
                                </p>
                                <p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco dominios de la transformación digital – Introducción – Parte 1.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco dominios de la transformación digital – Introducción – Parte 2.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco dominios de la transformación digital.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Clientes – Ejemplo de la Academia Khan.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Competencia – Coopetencia (Co-opetition), desintermediación y competidores asimétricos.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Datos – Ejemplo de Weather.com.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Innovación – Ejemplo de JC Penny.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Innovación – Ejemplo intuitivo de los agricultores indios.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Valor – Ejemplo del Museo Metropolitano de Arte.</p>
                                        <div class="robotoBo">
                                            <br>Aplicación
                                        </div>
                                    </p>
                                    <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>
                                        Tarea individual – ¿Cuáles son las fortalezas y debilidades de tu empresa, tu industria o la industria en la que deseas trabajar?.
                                    </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 2</div>
                        <div class="module-title robotoRe negro23">Redes de clientes y la nueva ruta de compra.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Proceso de desarrollo de productos.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Ejemplo de Life Church.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Paradigma de la red de clientes – Mercado masivo vs. modelo de red de clientes.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Reconsiderar el embudo de mercadotecnia.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Trazar el mapa del “Camino hacia la compra”.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Amenaza del multicanal para los minoristas – Parte 1 – Salón de exposiciones.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Amenaza del multicanal para los minoristas – Parte 2 – Ejemplo de Wal-Mart (omnicanal).    
                        </p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Tarea grupal – Desarrollar una iniciativa innovadora para los clientes con base en la estructura aprendida.
                        </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 3</div>
                        <div class="module-title robotoRe negro23">Entendiendo el comportamiento de los consumidores digitales.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Invención, innovación y creatividad.</p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia de compromiso.
                            </p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia de compromiso - Parte 1.
                            </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplo: auto conceptual YCC.</p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia a la medida - Parte 1.
                            </p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia a la medida - Parte 2.
                            </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Estrategia de colaboración.</p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Separar la idea del proyecto en elementos claves.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proyecto grupal del mundo real: Desarrollar un
                            concepto de solución.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 4</div>
                        <div class="module-title robotoRe negro23">
                            Modelos de plataformas de negocios. 
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción y surgimiento de plataformas.</p> 
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué es una plataforma?.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro tipos de plataformas.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Plataformas – Antes y ahora.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El poder de los efectos en red.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro ventajas de las plataformas.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramienta – Mapa del modelo de negocios de las plataformas.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cómo compiten las plataformas – Parte 1.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cómo compiten las plataformas – Parte 2.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Preguntas estratégicas para las plataformas.</p>
                        <br>
                        <div class="robotoBo">
                            <br> Aplicación
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual: Trazar un plan del modelo de negocios de las plataformas.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 5</div>
                        <div class="module-title robotoRe negro23">
                            Coopetición (colaboración entre competidores), desintermediación y competidores asimétricos.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la estrategia de compromiso.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Coopetencia (Co-opetition).</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramienta – Capacitación de valor competitivo.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramienta – Capacitación de valor competitivo – Desintermediación e intermediación.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Dos reglas de poder en capacitaciones de poder.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Cambios en los supuestos estratégicos. </p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual: Delinea una capacitación de valor competitivo.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 6</div>
                        <div class="module-title robotoRe negro23">
                            Convirtiendo los datos en un activo estratégico del negocio.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">

                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción + datos como activo estratégico – Parte 1 – Google Maps/ Apple Maps.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Datos como un activo estratégico clave – Parte 2 – Nokia, The Weather Company.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Todos los negocios necesitan una estrategia de datos .</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Estudio de caso: Coca-Cola.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Estudio de caso: British Airways.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Estudio de caso: The New York Times.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual: Autorreflexión – ¿Tu negocio está utilizando datos como un activo estratégico?, ¿Dónde puede mejorar?.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 7</div>
                        <div class="module-title robotoRe negro23">
                            Big Data en acción: Datos nuevos, herramientas nuevas y formularios de valor.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <p>
                                <p>
                                    <div class="robotoBo">
                                        <br>Estructura
                                    </div>
                                </p>
                                <p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Big Data.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Nuevas fuentes de datos no estructurados.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Herramientas para datos no estructurados.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Disponibilidad de las herramientas.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro plantillas de valor – Conocimiento.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro plantillas de valor – Focalización.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro plantillas de valor – Personalización.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro plantillas de valor – Contexto.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Tres mitos del Big Data – Mito 1.</p>
                                        <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>Tres mitos del Big Data – Mito 2 y 3.</p>
                                        <div class="robotoBo">
                                            <br>Aplicación
                                        </div>
                                    </p>
                                    <p class="padding-text-modulos"><strong>• &nbsp;&nbsp;&nbsp;</strong>
                                        Tarea grupal: Aplicar las cuatro plantillas de valor de los datos: Elegir una empresa y determinar cuál de las cuatro plantillas usar para generar más valor con nuevos datos.
                                    </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 8</div>
                        <div class="module-title robotoRe negro23">Innovación a través de la experimentación: Prueba AB y productos mínimamente viables.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Dos clases de experimentos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 1. Aprende pronto.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 2. Sé rápido y reiterativo.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 3. Enamórate del problema, no de la solución.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 4. Obtén retroalimentación creíble.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 5. Mide lo que importa ahora.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 6. Pon a prueba tus supuestos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete principios de la experimentación – 7. Fracasa con inteligencia.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El método experimental convergente.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El método experimental convergente – Experimentos de Petco y Obama.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuándo usar experimentos convergentes.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El método experimental divergente.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El método experimental divergente – Establecer límites y más de una solución.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El método experimental divergente – MPV – Mínimo pProducto (o prototipo) vViable.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Las 4 “P”: Decisiones reiterativas en innovación empresarial.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuándo usar experimentos divergentes.</p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>
                            Tarea grupal: Cómo diseñarían un experimento para aprender el mejor camino con un escenario determinado.
                        </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 9</div>
                        <div class="module-title robotoRe negro23">Traducir la estrategia de Lean Startup en innovación a escala empresarial.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Invención, innovación y creatividad.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción + cuatro caminos para ampliar una innovación</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro caminos – Camino 1 – Presentación del MVP</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro caminos – Camino 2 – Lanzamiento del MVP</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro caminos – Camino 3 – Presentación afinada</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuatro caminos – Camino 4 – Lanzamiento afinado</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Elegir el camino equivocado – El ejemplo de Google Glass</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos organizacionales – Parte 1 – Liderazgo y quién experimenta</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos organizacionales – Parte 2 – Crear una prueba y adquirir cultura</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos organizacionales – Parte 3 – Planear un fracaso</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos organizacionales – Parte 4 – Celebrar el fracaso</p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual: Evaluar las barreras a la innovación de la propia empresa.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 10</div>
                        <div class="module-title robotoRe negro23">                            
                            Adaptando la propuesta de valor. 
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Cómo adaptarse a un mercado contraído – Tres rutas para salir de un mercado contraído.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>1ª ruta – Nuevos clientes.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>2ª ruta – Nuevo valor.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>3ª ruta – Nuevos clientes + nuevo valor.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>The New York Times – Adaptación a su propuesta de valor – El problema y el nuevo valor creado.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>The New York Times – Adaptación a su propuesta de valor – Cambios organizacionales y resultados.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Adaptarse antes de que sea forzoso hacerlo.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco conceptos de valor de mercado.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la herramienta – Hoja de ruta de la propuesta de valor.</p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Cambios en los supuestos estratégicos: Valor.</p>
                        <br>
                        <div class="robotoBo">
                            <br> Aplicación
                        </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual: Evaluar las barreras a la innovación de la propia empresa.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 1: Identificar tipos de clientes claves por valor recibido.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 2: Definir el valor actual para cada cliente.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 3: Identificar amenazas emergentes.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 4: Evaluar la fortaleza de los actuales elementos de valor.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 5: Generar nuevos elementos de valor potenciales.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal 6: Sintetizar una nueva propuesta de valor en prospectiva.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 11</div>
                        <div class="module-title robotoRe negro23">
                            Dominando modelos de negocio disruptivos.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué es la disrupción? – Parte 1 – Definición.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué es la disrupción? – Parte 2 – No todas las innovaciones son disruptivas y la disrupción requiere un titular.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>La disrupción en la era digital.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Teorías de la disrupción – Schumpeter + Christensen.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Teorías de la disrupción – Problemas con la teoría de Christensen.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Una teoría de la disrupción del modelo de negocio.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Dos factores diferenciales de los modelos de negocio disruptivos.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres casos de disrupción del modelo de negocio – iPhone.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres casos de disrupción del modelo de negocio – Netflix.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres casos de disrupción del modelo de negocio – Warby Parker.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramienta + resumen.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal: Crear y evaluar un modelo de negocio disruptivo.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 12</div>
                        <div class="module-title robotoRe negro23">
                            Sobreviviendo a la disrupción: Seis respuestas que incumben a un reto disruptivo.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">

                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres variables de modelos de negocio disruptivos – Trayectoria del cliente</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres variables de modelos de negocio disruptivos – Alcance</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres variables de modelos de negocio disruptivos – Múltiples titulares</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Respuesta – El planeador de la respuesta disruptiva</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 1. Adquirir al disruptor</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 2. Lanzar un disruptor independiente</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 3. Dividir el modelo de negocio del disruptor</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 4. Reenfocarte en tus clientes defendibles</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 5. Diversificar tu portafolio</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Seis respuestas – 6. Planear para una salida rápida</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal: A partir de un escenario dado, analizar la amenaza y planear su respuesta – utilizando como herramienta el planeador de respuesta disruptiva.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 13</div>
                        <div class="module-title robotoRe negro23">
                            Liderazgo y el imperativo de valor para el cliente.
                        </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Trabajo previo
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Autoevaluación – ¿Estás preparado para la transformación digital?.</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Tu juego de herramientas para la estrategia.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Cambio organizacional.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Incubación + Integración.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Imperativo del valor del cliente y conclusión del programa.</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Cierre del curso.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal: Crear y evaluar un modelo de negocio disruptivo.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <!-- Section no. 10: Benefits -->
    <div class="beneficios-container" style="border-bottom: none!important;">
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
                        <div class="text fs16 robotoRe negro23">Educacion global.</div>
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
                            Certificado de estudios expedido por Emeritus y la Columbia Business School, Executive Education. 
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
                            interacción entre pares de distintos países de habla hispana.</div>
                    </div>
                    <div class="text-cont">
                        <div class="negro23 fs16">•</div>
                        <div class="text fs16 robotoRe negro23">Enriquecimiento de la experiencia de aprendizaje por la
                            interacción con participantes de diversos perfiles y trayectorias profesionales.</div>
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
                        <div class="text fs16 robotoRe negro23">Aceleramiento profesional a través de nuestro
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


    <!-- Section no. 11: Journey -->
    <div class="tu-viaje-container">
        <div class="tu-viaje-title crimsonBo fs24 negro28">Tu viaje de aprendizaje</div>
        <div class="tu-viaje-cont">
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/video-lectures.svg" alt="Clases en video">
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
                    <img src="../assets/img/svg/tareas.svg" alt="Tareas">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    12
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Tareas
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
                    Discusiones
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/estudios-de-caso.svg" alt="Estudios de caso">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    3
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Estudios de caso
                </div>
            </div>
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
                    Canvas es la plataforma de aprendizaje que elegimos por su facilidad de uso, accesibilidad,
                    confiabilidad, movilidad y por albergar el contenido en la nube. Después de inscribirte y efectuar
                    el pago del curso, recibirás un correo de bienvenida para comenzar tu certificado.
                </div>
            </div>
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">2</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Toma los cursos en línea
                    donde te encuentres
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    El tablero muestra tus cursos, tareas y webinars. Todos los materiales de los módulos están en un
                    solo lugar y puedes acceder a ellos desde cualquier dispositivo.
                </div>
            </div>
            <div class="paso">
                <div class="paso-No robotoBo fs40 blanco">3</div>
                <div class="paso-title robotoBo fs20 negro46">
                    Completa el programa
                </div>
                <div class="paso-desc robotoRe fs16 negro46">
                    Con la ayuda de nuestros anuncios y recordatorios, aprueba las asignaciones y el proyecto final
                    satisfactoriamente. Únete al Emeritus Network para intercambiar conocimientos y experiencias y
                    ampliar tus oportunidades profesionales.
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
                    Al terminar con éxito el plan de estudios, recibirás un certificado electrónico que avala los
                    conocimientos que has adquirido en el programa.
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
                    <img src="../assets/img/png/certificado3.png" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex2" class="modal modal-certificado">
                <img src="../assets/img/jpg/big-certificate-3.jpg" alt="Certificado">
            </div>
            <div class="certificado-datos">
                <div class="certificado-title crimsonBo fs24 blanco">
                    Certificado
                </div>
                <div class="certificado-subtitle robotoRe fs20 blanco">
                    Al concluir satisfactoriamente el programa, los
                    participantes son reconocidos con un certificado
                    oficial de conclusión de estudios respaldado por
                    Emeritus y Columbia Business School.
                </div>
                <div class="certificado-button">
                    <a class="robotoRe fs16 blanco" href="https://bit.ly/2ubwV9V" target="_blank" rel="noopener noreferrer">
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
                        "Las tareas individuales y el carácter reflexivo del curso son las cosas que realmente me 
                        llevó de esta experiencia. Todos los ejercicios y, particularmente, las discusiones en 
                        grupo me ayudaron a reflexionar sobre muchos temas que hicieron muy fácil y extremadamente 
                        valioso el aprendizaje entre colegas."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Steven Janiec
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Consultor Senior de Estrategia, EY
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Alemania
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/steven-janiec-69966927/?locale=en_US">
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
                        "Este programa era justo lo que necesitaba. Me preparó con el conocimiento estratégico 
                        y las herramientas para mis próximas funciones como director de un Laboratorio de 
                        Transformación Digital para Instituciones Financieras. En general, uno de los cursos 
                        mejor diseñados que he tomado, con clases muy claras a cargo de David Rogers, junto 
                        con un contenido y materiales lógicamente estructurados y tareas basadas en preguntas 
                        clave. La coordinación del programa fue fantástica."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Martijn van Rooij
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director de Fundamental Credit Risk México, Citigroup
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            México
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/martijnvanrooij/">
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
                        "Las clases del curso fueron excelentes. Las he empleado ampliamente para explorar los temas 
                        discutidos. Trabajo para un fabricante automotriz de Tier 1 en India, y la penetración de 
                        lo digital en esta industria es relativamente limitada. Por lo tanto, la exposición que 
                        obtuve y la forma como se construyen los negocios digitales alrededor del mundo me parecieron 
                        fascinantes."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Sudeep Patil
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director General de Ventas, Greaves Cotton Ltd.
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/sudeep-patil-a253276b/">
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
                        "El plan de estudios, las herramientas y las técnicas que aprendí en este curso han 
                        sido muy útiles. En general, el curso me brindo una nueva perspectiva de pensamiento."                        
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Wruta Mayekar
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Directora, Accenture
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/wrutasarang/">
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
                        "David Rogers en un conferencista brillante. Mantiene la atención y comparte un enfoque 
                        estratégico perfecto para la transformación digital. Todo el concepto de la plataforma 
                        de aprendizaje y el correspondiente soporte son sumamente potentes. También me gustó 
                        el apoyo muy cordial del equipo del programa."                                               
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Alexis Johann
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director de Administración, Styria Digital One GmbH
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Austria
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/alexis-johann-6b32343/">
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
                        "Este curso ha sido muy importante para mí en cuanto a la construcción de la 
                        estrategia para una nueva empresa digital."                                                                      
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Vlad Bratasanacu
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Socio Director, Capital Development Partners.
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Rumania
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/bratasanu-vlad-6990b928/">
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
                        "El profesor Rogers ha impartido clases excelentes. Esta experiencia de aprendizaje es verdaderamente 
                        impresionante. Con el contenido se aseguró que comprendiéramos muy bien todo el ciclo digital. Los 
                        ejemplos reales de la industria que se usaron para explicar los conceptos fueron muy buenos y me 
                        ayudaron a descubrir "cómo" se aplicaron realmente."                                                                                             
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Aravind Balasaheb Kolaki
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Consultor, CGI
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/aravind-kolaki-9156879/">
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
                        "En mi opinión, la combinación de clases y tareas fue muy eficaz para desarrollar una comprensión 
                        realmente buena y tangible de los diversos temas digitales. Se aprenden nuevos enfoques estratégicos 
                        efectivos que, de inmediato, se pueden aplicar para abordar los retos de negocios de la vida real. 
                        En general, la experiencia de aprendizaje fue fantástica e impresionante."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Babak Moghrarrab
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Arquitecto de Negocios Senior de ICT, Swisscom
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Suiza
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/babak-mogharrab-8a179ba7/">
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
                        "No solo aprendí sobre el tema del curso, sino que también adquirí una nueva forma de 
                        pensar. Considero que mi forma de percibir las cosas ha cambiado mucho. Esto me llevó 
                        a inscribirme al siguiente curso sobre Marketing Digital. ¡Gracias!."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Dihim Burkhalter
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Líder de RP, JOSEPH’S Toiletries
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Suiza
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/dihim-burkhalter-0369b22/">
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
                        "Me gustaron las ideas y estructuras propuestas en el curso. Las tareas individuales 
                        fueron estimulantes y obtuve una buena retroalimentación."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Diogo DAlessandro
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Consultor Senior, Bayer
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Brasil
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/diogoduarte/">
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
                        "¡Muy práctico! He generado tres posibles plataformas para el desarrollo a través de la 
                        comprensión integral de qué es el marketing digital y las oportunidades que pueden 
                        identificarse. ¡Fantástico!."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Glenn Du Toit
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Líder de IOT, Acer Africa
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Sudáfrica
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/glenn-du-toit-2a050134/">
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
                        "Las diversas teorías (sobre innovación, disrupción, value train, etc.), con los ejemplos del mundo 
                        real que se presentaron en este curso, fueron de un enorme valor. Las clases en video semanales 
                        resultaron también extremadamente informativas y muy bien producidas."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Isabelle Perreault
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Socia, Transformación Digital, IsabellePerreault.com y Blueprintpr.ca
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Canadá
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/isabelleperreault/">
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
                    SSi quieres más información acerca de la colaboración entre MIT Sloan School of Management y
                    EMERITUS Institute of Management para este curso, <a class="rosaD8 robotoBo" href="https://www8.gsb.columbia.edu/execed/programs-for-individuals/online/emeritus"
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


    <!--<script async type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/gdpr.js"></script>-->


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
            jQuery('#utm_source').val(getParameterByName("lead_source"));
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
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'https://cdn') +
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