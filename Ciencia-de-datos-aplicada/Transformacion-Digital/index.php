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
    <title>Transformación Digital | Transformación de los negocios a gran escala</title>
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
        if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
        {
            //Tell the browser to redirect to the HTTPS URL.
            header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
            //Prevent the rest of the script from executing.
            exit;
        }
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
        <div class="hero-data hero_TD">
        
            <div class="idioma">
                <img src="../assets/img/svg/ahora.svg" alt="Ahora-en-español">
            </div>
            <div class="hero-data-cont">
                <div class="hero-title">
                    <div class="TD-back openRe fs16 blanco">
                        <span class="openBo">NUEVO</span> programa <i>online</i>
                    </div>
                    <div class="robotoRE fs26 blanco">
                        TRANSFORMACIÓN <span class="robotoBo">DIGITAL</span>
                    </div>
                    <div class="robotoBo fs16 blanco">
                        Transformación de los negocios a gran escala
                    </div>
                </div>
            </div>
        </div><!-- hero-data -->

        <!-- University Logo -->
        <div class="movil logo-universidad-container">
            <div class="logo-universidad-title fs12 robotoRe gris6E">
                <i>En colaboración con</i>
            </div>
            <img src="../assets/img/svg/MIT-Management-executive-education.svg" alt="MIT">
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
                            <div class="fecha fs18 robotoRe negro">24/06/2019</div>
                        </div>

                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Termina</div>
                            <div class="fecha fs18 robotoRe negro">09/09/2019</div>
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
        <img src="../assets/img/svg/MIT-Management-executive-education.svg" alt="MIT">
    </div>


    <!-- Section no. 3: Information & Form Section -->
    <div class="informacion-formulario-container">

        <div class="informacion-container">
            <div class="informacion-title fs24 crimsonRe negro23">
                ACEPTA EL
                <span class="crimsonBo"> DESAFÍO DIGITAL</span>
            </div> <!-- informacion-title -->

            <div class="informacion robotoRe fs16">
                Las plataformas de negocio, como Uber y Airbnb, están cambiando las reglas del juego 
                a gran velocidad. Comprender estos <a class="button-enable robotoBo fs16 rosa51">...más</a>

                <span class="enable">
                    nuevos modelos y aprender a explotarlos a tu favor es una cuestión indispensable 
                    para prosperar en la era digital.
                    <br>
                    <br>
                    El Certificado en Transformación Digital de Emeritus, en colaboración con la MIT 
                    Sloan School of Management, te ofrece nuevas perspectivas de uso de la tecnología 
                    para conectar personas, organizaciones y recursos en ecosistemas interactivos.
                    <br>
                    <br>
                    <span class="robotoBo">Conoce los cinco dominios de la transformación digital y 
                    capitaliza los principios para el desarrollo exitoso de plataformas con Geoffrey 
                    G. Parker, investigador de la Iniciativa para la Economía Digital del MIT.</span> 
                    Analiza casos de empresas que han hecho la transición de estrucuturas tradicionales 
                    a modelos disruptivos y desarrolla habilidades para liderar el cambio que exigen 
                    las nuevas iniciativas de negocio.
                </span>
            </div> <!-- informacion -->
            <span class="enable">
                <div class="informacion-relevante">

                    <div class="relevante-container">
                        <div class="fs44 robotoBo azulBC">
                            <div class="No-relevante">3 de las 5 <span class="robotoRe fs30">compañías más grandes</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            por capitalización bursátil son plataformas: Apple, Google y Microsoft
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: CONSEJO DE DISEÑO DEL REINO UNIDO. 
                        </div>
                    </div> <!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs30 rosa75">
                            <div class="No-relevante robotoRe">En 2020, <span class="robotoBo fs44">75% de las empresas</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            serán proveedoras de servicios digitales a través de las nubes colaborativas de la industria.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: NEARSHORE AMERICAS & MEXICO IT.
                        </div>
                    </div><!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs30 azulBC">
                            <div class="No-relevante robotoRe">En 2019 <span class="robotoBo fs44">2.1 billones USD</span></div>
                        </div>

                        <div class="desc fs20 robotoBo cafe6C">
                            se invertirán en transformación digital.
                        </div>

                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: PRICEWATHERHOUSE COOPERS 
                        </div>
                    </div> <!-- relevante-container -->

                </div>
            </span>
        </div> <!-- informacion-container -->

        <!--
            This is the form container with action: 'https://www2.emeritus.org/l/134351/2018-07-05/3zgtr6'
            This action (webservice) was provided by Ruchira's team. Each of the landing pages has a different endpoint in the action param.
        -->
        <div class="fomulario-container">
            <div class="form" id="form">
                <div class="form-title robotoBo fs18 blanco">Obtén información del programa</div>
                <form class="form-cont" method="POST" action="https://www2.emeritus.org/l/134351/2018-08-28/44bbrd">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="text" id="first_name" name="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                            required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="first_name">Nombre(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="text" id="last_name" name="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                            required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="last_name">Apellido(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                            required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="email">Email</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="country" name="Country" class="mdl-textfield__input Country mov-input-class"
                            required>
                        </select>
                        <label class="fs16 robotoRe mdl-textfield__label" for="country">País</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="work_experience" name="work_experience" class="fs16 robotoRe mdl-textfield__input work_experience mov-input-class"
                            required>
                            <option value=""></option>
                            <option value="Less than 5 Years">Menos de 5 años</option>
                            <option value="5-10 Years">5-10 años</option>
                            <option value="10-15 Years">10-15 años</option>
                            <option value="15-20 Years">15-20 años</option>
                            <option value="> 20 Years">&gt; 20 años</option>
                        </select>
                        <label class="fs16 mdl-textfield__label" for="work_experience">Experiencia Profesional</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="tel" id="mobile" name="mobile" maxlength="15" minlength="5"
                            onkeypress="return valida(event)" pattern="[0-9]+" required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="mobile">Número de celular</label>
                    </div>

                    <div class="button-container">
                        <input type="hidden" name="utm_source" id="lead_source" value="">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="browser" value="">
                        <input type="hidden" name="course" id="course" value="Transformación-Digital">
                        <!--This value is different in each in the pages-->
                        <input type="hidden" name="retURL" value="https://latam.emeritus.org/programas/Thank-you-page-TD.php">
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
            <span class="robotoBo">Curso de Transformación Digital:</span>
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
                el 19 de julio de 2019.
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
                el 19 de julio de 2019.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$435 USD</span> a pagar
                el 3 de agosto de 2019.
            </div>
        </div>
    </div> <!-- modal-pagos-flexibles -->


    <!-- Section no. 5: Certificate -->
    <div class="el-certificado-container">
        <div class="el-certificado-title crimsonRe fs24 negro28">
            EL CERTIFICADO EN
            <span class="crimsonBo">
                TRANSFORMACIÓN DIGITAL ES PARA TI SI
            </span>
        </div>
        <div class="el-certificado-img">
            <img class="el-certificado-desktop" src="../assets/img/jpg/es-para-ti-si-imagen-PD.jpg" alt="El-certificado-en">
            <img class="el-certificado-movil" src="../assets/img/jpg/es-para-ti-si-imagen-movil-PD.jpg" alt="El-certificado-en">
        </div>
        <div class="el-certificado-requisitos-cont">
            <div class="requisito fs16 robotoRe negro">
                Necesitas desarrollar las habilidades y conocimientos 
                que demanda el modelo de plataforma para ser un líder 
                efectivo.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Te interesa conocer y elaborar estrategias que permitan 
                transformar un negocio tradicional en uno de plataforma.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Requieres de herramientas de investigación para conocer 
                qué elementos de tu negocio son susceptibles de ser 
                transformados por nuevos competidores.
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
                        <img class="MIT-bord" src="../assets/img/jpg/geoffrey.jpg" alt="Geoffrey-G.-Parker">
                    </div>
                    <div class="profesor-data">
                        <div class="robotoRe fs16 negro46">Autor y profesor titular</div>
                        <div class="robotoBo fs18 negro46">Geoffrey G. Parker</div>
                        <div class="robotoRe fs16 vino38"> <i> Thayer School of Engineering (Dartmouth). </i> </div>
                    </div>
                </div>
                <div class="profesor-description robotoRe fs14 negro46">
                    Académico visitante e investigador de la Iniciativa para la Economía Digital del MIT, 
                    Geoffrey G. Parker ha realizado contribuciones significativas en el campo de las 
                    estrategias de redes económicas. Junto con otros expertos, se le reconoce como uno 
                    de los desarrolladores de la teoría de los mercados de dos caras.
                    <br>
                    <br>
                    Asesor de ejecutivos líderes en sus estrategias de plataforma y ponente en conferencias 
                    académicas e industriales, es también co-autor del libro <i>Platform Revolution: How 
                    Networked Markets Are Transforming the Economy--And How to Make Them Work for You </i>
                    (La revolución de las plataformas: cómo los mercados de redes están transformando 
                    la economía – y cómo hacer que trabajen para ti). 
                </div>
            </div>
            <div class="video-container">
                <iframe  src="https://www.youtube.com/embed/bnG6HDao9j8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- Section no. 7: Experts -->
    <div class="tutores-expertos-container">
        <div class="tutores-expertos-title crimsonBo fs32 negro28">
            Tutores expertos
        </div>
        <div class="tutores-expertos-subtitle robotoBo fs18 gris61">
            Para culminar con éxito tu viaje de aprendizaje cuentas con asesoría 
            en tu idioma por parte de una experta en transformación digital: 
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
            CON EL CERTIFICADO EN <span class="crimsonBo">TRANSFORMACIÓN DIGITAL APRENDERÁS A:</span>
        </div>
        <div class="con-certificado-cont">
            <div class="con-certificado-img">
                <img src="../assets/img/jpg/aprenderas-a-imagen-PD.jpg" alt="aprenderas-a-imagen">
            </div>

            <div class="con-certificado-flex">

                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            1
                        </div>
                        <div class="paso-texto fs16">
                            Definir las bases para construir un negocio de plataforma a través de los fundamentos de 
                            la transformación digital. 
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            2
                        </div>
                        <div class="paso-texto fs16">
                            Comprender cómo los modelos de precios tradicionales se transforman y /o debilitan en el 
                            contexto de los negocios de plataforma. 
                        </div>
                    </div>

                </div>
                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            3
                        </div>
                        <div class="paso-texto fs16">
                            Reconocer las estrategias centradas en la información (data), así como la forma en que 
                            promueven tecnologías disruptivas. 
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            4
                        </div>
                        <div class="paso-texto fs16">
                            Capitalizar las mejores prácticas de empresas de plataforma que han logrado un crecimiento 
                            rápido y disruptivo. 
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
                        <div class="module-title robotoRe negro23">
                            Transformación digital: de los productos a las plataformas; efectos de red.
                        </div>
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
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 1: "Revolución de las plataformas".</p>
                                <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Después de que Google Maps incorporó la navegación, el valor de los desarrolladores independientes de GPS cayó alrededor de 85%.</p>
                            <p>
                                <p>
                                    <div class="robotoBo">
                                        <br>Estructura
                                    </div>
                                </p>
                                <p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción al módulo y definiciones: cadenas de valor (lineal vs. triangular).</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>El modelo de negocio de productos y servicios es inservible.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Marketing.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Finanzas.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Cadenas de suministro.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Organización interna.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Innovación.</p>
                                    <p>
                                        <div class="robotoBo">
                                            <br>Aplicación
                                        </div>
                                    </p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual – Reflexión: ¿Puedes predecir qué elementos de tu negocio son susceptibles de ser transformados por nuevos competidores o nuevos participantes?.
                                    </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 2</div>
                        <div class="module-title robotoRe negro23">Conceptos: mercados, entorno y estructura.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Trabajo previo 
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 2: "Revolución de las plataformas".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Apple vs. Google: ¿Aprendió Apple de su guerra con Microsoft?.</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proceso de desarrollo de productos.</p>
                        <div class="robotoBo">
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Pensamiento en tubería vs. pensamiento en plataforma.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción al módulo.</p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Efectos de la red.</p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Definiciones de plataformas de negocios.</p>
                            <p class="padding-text-modulos-1">
                                <strong>- &nbsp;&nbsp;&nbsp;</strong>Retos distintivos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Economías de escala del lado de la demanda vs. la oferta.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cadena de valor lineal tradicional.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Costos de homing y switching.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Redes de dos lados.</p>
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal – Estudio de caso – Quickbooks de Intuit : Del producto a la plataforma.</p>
                        <br>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 3</div>
                        <div class="module-title robotoRe negro23">Diseñando tu modelo digital de negocio para el éxito. </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Trabajo previo 
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulos 3 y 6: "Revolución de las plataformas".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – "¿Cómo valuar a un cliente gratuito?".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – "Estrategias para mercados de dos lados".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – "¿Por qué Amazon donó capítulos gratuitos?".</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Pensamiento en tubería vs. pensamiento en plataforma.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cadena de suministro tradicional y creación de plataformas B2C.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Entonces, ¿cómo diseñar una plataforma? – Tres principios del diseño de plataformas.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Cómo optimizamos la cadena de valor de las plataformas?.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>De qué manera la arquitectura puede aumentar los efectos de la red.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Mínima plataforma viable – El ejemplo de LinkedIn.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Monetización.</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Flujos de las plataformas y cuatro formas de monetizar una plataforma.</p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal - Estudios de caso - Brightcove.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 4</div>
                        <div class="module-title robotoRe negro23">Lanzar y hacer crecer una plataforma digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Trabajo previo 
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 5: "Revolución de las plataformas".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – "Plataformas de dos lados".</p>
                            <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Artículo – Google Health, Microsoft Health y WebMD.</p>
                        <p>
                            <div class="robotoBo">
                                <br> Estructura
                            </div>
                        </p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Introducción al módulo – La historia de Paypal; cuando la persistencia da frutos.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Ocho formas de resolver el problema del huevo y la gallina:</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Seguir al conejo.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia del “caballito.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia del sembrado.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia del Marquee.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia de un solo lado.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia de evangelización del productor.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia del Big Bang.</p>
                                <p class="padding-text-modulos-1">
                                    <strong>- &nbsp;&nbsp;&nbsp;</strong>Estrategia del micromercado.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Efectos de la red: Primero el consumidor.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Efectos de la red: Primero el productor.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Cerrar el círculo.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Modularidad: Introducción.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Modularidad: Arquitectura de la industria de cómputo.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong> Modularidad: Claves para la computación en la nube: APIs.</p>
                        <div class="robotoBo">
                            <br> Aplicación
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea individual – Google Health, Microsoft Health Vault y WebMD.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 5</div>
                        <div class="module-title robotoRe negro23">Las ventajas de innovación abierta.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Trabajo previo 
                            </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 7: "Revolución de las plataformas".</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Estudio de caso de Makerbot.</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Innovación abierta – Ideas de uso interno y externo.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué es la apertura? ¿Es importante la apertura?.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Plataformas de negocios – Microeconomías.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Captación del valor y tasa impositiva de los ecosistemas de plataforma.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Impacto de las decisiones de apertura.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Google recupera el control sobre Android.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Apple: ¿Qué controlar y absorber?.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal – Estudio de caso – Makerbot.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 6</div>
                        <div class="module-title robotoRe negro23">Cómo manejar tu plataforma digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Trabajo previo 
                            </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 8: "Revolución de las plataformas".</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – El caso de SAP.</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Por qué gobernar las plataformas?.</p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué queremos decir con "gobernanza"?.</p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>¿De qué manera gobernar bien? ¿Cuáles son las herramientas?.</p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramientas para regular la plataforma.</p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>Herramientas para gobernar la plataforma.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea grupal – Estudio de caso – SAP.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 7</div>
                        <div class="module-title robotoRe negro23">Estrategia y competencia en la era digital. </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Trabajo previo 
                            </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lectura previa – Capítulo 10: "Revolución de las plataformas".</p>
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p>
                        <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Por qué las plataformas están por encima de los productos.</p>
                        <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Qué cambia: Estrategia.</p>
                        <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Por qué la estrategia de plataformas es diferente.</p>
                        <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Por qué los viejos competidores no son los nuevos competidores.</p>
                        <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Efectos de la red e invertir los cambios de la firma.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 8</div>
                        <div class="module-title robotoRe negro23">La transformación digital en diversas industrias: una visión de futuro.</div>
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
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Disrupción de la plataforma en la industria de medios.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en la industria de servicios profesionales.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en el sector educativo.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en el sector financiero.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en el sector salud.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en la industria energética.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Futuro de la plataforma en el gobierno.</p>
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
                            Certificado de estudios expedido por Emeritus y la MIT Sloan School of Management.
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
                    <img src="../assets/img/svg/estudios-de-caso.svg" alt="Estudios-de-caso">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    3
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Estudios de caso
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/proyecto-final.svg" alt="Proyecto-final">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    1
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Proyecto final
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
                    <img src="../assets/img/png/certificado4.png" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex2" class="modal modal-certificado">
                <img src="../assets/img/jpg/big-certificate-4.jpg" alt="Certificado">
            </div>
            <div class="certificado-datos">
                <div class="certificado-title crimsonBo fs24 blanco">
                    Certificado
                </div>
                <div class="certificado-subtitle robotoRe fs20 blanco">
                    Al concluir satisfactoriamente el programa, los
                    participantes son reconocidos con un certificado
                    oficial de conclusión de estudios respaldado por
                    Emeritus y la MIT Sloan School of Management.
                </div>
                <div class="certificado-button">
                    <a class="robotoRe fs16 blanco" href="https://bit.ly/2PeMK8K" target="_blank" rel="noopener noreferrer">
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
                        "La conexión con los otros participantes y el trabajar en red con ellos fue algo realmente bueno. 
                        El curso ayudó a mejorar el conocimiento sobre el tema. El líder del curso fue capaz de abordar 
                        todas las preguntas de los temas, tanto durante el propio curso como en los webinarios."
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Anna Khanzhina
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Directora de Categorías, X5 Retail Group
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Singapur
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/anna-khanzhina/">
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
                        "El modelo, la estrategia y la gobernanza de los negocios en plataforma, así como las 
                        discusiones en Canvas, me ayudaron a entender y conocer más sobre el tema. Las tareas 
                        y las discusiones en grupo contribuyeron aún más a la comprensión".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Cheuk Ying Chan
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Analista de Negocios Senior, Crown Worldwide Holdings
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Hong kong
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/cheuk-y-chan-a79069a5/">
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
                        "La mejor parte del curso es que cubre todos los aspectos de una plataforma, 
                        desde la creación y el crecimiento hasta la gobernanza y la innovación".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Dreyser Eguía
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Cemex
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            México
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/dreyser-eguia-arroyo-b575488/">
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
                        "El diseño general del curso y los videos del docente resultaron muy buenos. 
                        Brindaron el nivel de detalle adecuado para estimular el autoaprendizaje. El 
                        contenido del curso proporciona un gran conocimiento y el valor de una tendencia 
                        verdaderamente disruptiva".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Siva Devireddy
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        CEO, GoCoop.com
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/siva-devireddy-9a5353/">
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
                        "El curso y la colaboración con los colegas mostró claramente cómo distintas 
                        ideas alrededor de un tema pueden generar valor para todos. Esta fue una oportunidad 
                        única para aprender no solo del extraordinario cuerpo docente, sino también de 
                        colegas de todo el mundo".
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
                        "Las discusiones/sesiones informativas a cargo del líder del curso fueron la mejor parte 
                        para mí. Pude interactuar con los demás participantes y con el coordinador para comprender 
                        sus puntos de vista. Esto mejoró el aprendizaje y, al mismo tiempo, hizo que el curso 
                        resultara disfrutable".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Abhinav Jain
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Comercializador Senior, M.H. Alshaya co. WLL
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Kuwait
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/abhinavjain3/">
                            <img src="../assets/img/svg/linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Section no. 15: Colaboration -->
    <div class="colaboracion-container">
        <div class="colaboracion-flex" style="justify-content: space-between;max-width: 800px;">
            <div class="colaboracion-logos" style="margin: 15px auto;">
                <div class="colaboracion">
                    <img src="../assets/img/svg/emeritus-logo-complete.svg" alt="Emeritus">
                </div>
                <div class="colaboracion">
                    <div class="fs11 robotoRe"><i>En colaboración con</i></div>
                    <img src="../assets/img/svg/MIT-Management-executive-education-footer.svg" alt="MIT">
                </div>
            </div>
            <div class="colaboracion-info" style="margin: 15px auto;">
                <div class="colaboracion-info-img">
                    <img src="../assets/img/svg/icono-interrogacion.svg" alt="Interrogación">
                </div>
                <div class="colaboracion-info-descripcion fs16 robotoRe">
                    Si quieres más información acerca de la colaboración entre MIT Sloan School of Management y
                    EMERITUS Institute of Management para este curso, <a class="rosaD8 robotoBo" href="https://executive.mit.edu/article/emeritus-institute-of-management"
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