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
    <title>Marketing Digital | Redes sociales, lealtad, planeación y analítica</title>
    <link href="../assets/img/png/emfavicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="../assets/img/png/emfavicon.png" rel="apple-touch-icon">



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
        <div class="hero-data hero_MD">
        
        <div class="idioma">
            <img src="../assets/img/svg/ahora.svg" alt="Ahora-en-español">
        </div>
        
            <div class="hero-data-cont">
                <div class="hero-title">
                    <div class="CBS-back openRe fs16 blanco">
                        <span class="openBo">NUEVO</span> Programa <i>online</i>
                    </div>
                    <div class="robotoRE fs26 blanco">
                        MARKETING <span class="robotoBo">DIGITAL</span>
                    </div>
                    <div class="robotoBo fs16 blanco">
                        Redes sociales, lealtad, planeación y analítica
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
                        <div class="duracion-desc fs16 robotoRe negro">10 semanas, en línea</div>
                    </div>

                    <div class="duracion-cont">
                        <img src="../assets/img/svg/clock.svg" alt="reloj">
                        <div class="duracion-desc fs16 robotoRe negro">2-4 horas por semana</div>
                    </div>

                    <div class="fechas-cont">
                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Comienza</div>
                            <div class="fecha fs18 robotoRe negro">13/05/2019</div>
                        </div>

                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Termina</div>
                            <div class="fecha fs18 robotoRe negro">15/07/2019</div>
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
                MARKETING DIGITAL
                <br>
                <span class="crimsonBo"> BASADO EN REDES DE CLIENTES </span>
            </div> <!-- informacion-title -->

            <div class="informacion robotoRe fs16">
                El surgimiento de las tecnologías digitales ha transformado profundamente la manera de
                hacer mercadotecnia. <a class="button-enable robotoBo fs16 rosa51">...más</a>

                <span class="enable">
                    Empujado por la fuerza del cambio, el marketing tradicional basado en mercados masivos, ha ido
                    cediendo su lugar a <span class="robotoBo">un nuevo marketing que sitúa al cliente en
                        el centro del negocio.</span>
                    <br>
                    <br>
                    <span class="robotoBo">Descubre los secretos del marketing digital de la mano de David Rogers,
                        creador
                        del modelo de redes de clientes.</span> Aprende a planear, implementar y medir el impacto de
                    estrategias digitales mediante casos reales y el uso de simuladores que te permitirán
                    conectar mejor con tus clientes, tanto B2C como B2B.
                </span>
            </div> <!-- informacion -->
            <span class="enable">
                <div class="informacion-relevante">

                    <div class="relevante-container">
                        <div class="No-relevante fs44 robotoBo azulBC">
                            25%
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            de la economía mundial será digital hacia 2020.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: ÍNDICE DEL VALOR ECONÓMICO DIGITAL.
                        </div>
                    </div> <!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs30 robotoRe rosa75">
                            <div class="desktop">Más de <span class="robotoBo fs44">3 mil millones</span></div>
                            <div class="N-relevanteo movil"> Más de <br><span class="robotoBo fs44">3 mil millones</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            de personas en todo el mundo usan ya redes sociales mensualmente.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: HOOTSUITE, REPORTE DIGITAL 2018.
                        </div>
                    </div><!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs30 robotoRe azulBC">
                            <div class="desktop">En 2020, <span class="robotoBo fs44">más del 85%</span></div>
                            <div class="No-relevante movil">En 2020, <br><span class="robotoBo fs44">más del 85%</span></div>
                        </div>

                        <div class="desc fs20 robotoBo cafe6C">
                            de las comunicaciones entre marcas y clientes se
                            llevará a cabo sin intervenciones humanas.
                        </div>

                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: GARTNER, 2018.
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
                <form class="form-cont" id="fordesk" method="POST" action="https://www2.emeritus.org/l/134351/2018-07-05/3zgtr6">

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
                        <input type="hidden" name="course" id="course" value="Marketing Digital">
                        <!--This value is different in each in the pages-->
                        <input type="hidden" name="retURL" value="https://latam.emeritus.org/programas/Thank-you-page-MD.php">
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
                el 7 de junio de 2019.
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
                el 7 de junio de 2019.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$435 USD</span> a pagar
                el 22 de junio de 2019.
            </div>
        </div>
    </div> <!-- modal-pagos-flexibles -->


    <!-- Section no. 5: Certificate -->
    <div class="el-certificado-container">
        <div class="el-certificado-title crimsonRe fs24 negro28">
            EL CERTIFICADO EN
            <span class="crimsonBo">
                MARKETING DIGITAL ES PARA TI SI:
            </span>
        </div>
        <div class="el-certificado-img">
            <img class="el-certificado-desktop" src="../assets/img/jpg/es-para-ti-si-imagen.jpg" alt="El certificado en marketing digital">
            <img class="el-certificado-movil" src="../assets/img/jpg/es-para-ti-si-imagen-movil.jpg" alt="El certificado en marketing digital">
        </div>
        <div class="el-certificado-requisitos-cont">
            <div class="requisito fs16 robotoRe negro">
                Eres un profesional de la mercadotecnia y
                quieres trascender la manera tradicional
                de hacer marketing.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Tienes experiencia en el área de
                negocios y deseas completar tus
                conocimientos para mantenerte vigente
                en tu profesión.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Necesitas comunicarte con tus clientes
                digitalmente.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Eres emprendedor y quieres impulsar el
                crecimiento de tu negocio utilizando el
                nuevo marketing basado en el modelo de
                red de clientes.
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
                        <div class="robotoRe fs16 azulC4"> <i> Columbia Business School </i> </div>
                    </div>
                </div>
                <div class="profesor-description robotoRe fs14 negro46">
                    Experto mundialmente reconocido por su conocimiento en materia de
                    marcas y estrategias de negocios digitales, <span class="robotoBo"> David Rogers es el creador del
                        modelo pionero de redes de clientes.</span>
                    <br><br>
                    Académico destacado de la Columbia Business School, ha escrito varios
                    libros sobre el tema, entre los que destacan <i>The Network Is Your Customer</i>
                    (La red es tu cliente) y el recientemente publicado <i>The Digital
                        Transformation Playbook: Rethink Your Business to Adapt and Thrive in the
                        Digital Age</i> (Manual de estrategias para la transformación digital: Repensar
                    el negocio para adaptar y prevalecer en la era digital).
                </div>
            </div>
            <div class="video-container">
                <iframe  src="https://www.youtube.com/embed/mi0yND2utX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- Section no. 7: Experts -->
    <div class="tutores-expertos-container">
        <div class="tutores-expertos-title crimsonBo fs32 negro28">
            Tutores expertos
        </div>
        <div class="tutores-expertos-subtitle robotoBo fs18 gris61">
            Para culminar tu viaje de aprendizaje con éxito cuentas con la
            asesoría de expertos en Marketing Digital en español, quienes
            te acompañarán y resolverán cualquier duda que tengas:
        </div>
        <div class="tutor-container">
            <div class="tutor-cont tutor-cont-v1">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/Pilar-barrio-2.jpg" alt="Pilar Barrio">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Pilar Barrio</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Moderadora de Emeritus Institute of Management, Pilar ha
                    destacado como consultora y formadora de equipos de
                    marketing digital. Directora de Barrio Digital, comunidad de
                    expertos que da servicios de estrategia digital a startups y
                    negocios a nivel mundial, ha colaborado con grandes empresas
                    como Coca Cola, GM, Nestlé, Sony y BBC.
                    <br><br>
                    Pilar se desempeña también como facilitadora de las
                    masterclasses de la Google Digital Academy en Europa, en
                    temas como marketing programático, estrategia de móviles y
                    soluciones creativas para marcas.
                </div>
            </div>
            <div class="tutor-cont tutor-cont-v1">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/renato-herrera.jpg" alt="Renato Herrera">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Renato Herrera</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Moderador de Emeritus Institute of Management, Renato
                    cuenta con más 10 años de experiencia en comunicación
                    digital, en puestos de media planning, estrategia digital, social
                    media, contenido y creatividad.
                    <br><br>
                    Emprendedor de negocios e-commerce global y asesor en
                    contenidos y negocios digitales, Renato ha colaborado con
                    marcas como Nike, Bud Light, Telefónica Movistar, Diageo y
                    Liverpool.
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 8: Certificate  -->
    <div class="con-certificado-container">
        <div class="con-certificado-title fs28 crimsonRe">
            CON CERTIFICADO EN <span class="crimsonBo">MARKETING DIGITAL APRENDERÁS A:</span>
        </div>
        <div class="con-certificado-cont">
            <div class="con-certificado-img">
                <img src="../assets/img/jpg/aprenderas-a-imagen.jpg" alt="aprenderas-a-imagen">
            </div>

            <div class="con-certificado-flex">

                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            1
                        </div>
                        <div class="paso-texto fs16">
                            Diseñar, planear y ejecutar con éxito una estrategia de
                            marketing digital para tu marca o negocio, tanto B2C como B2B.
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            2
                        </div>
                        <div class="paso-texto fs16">
                            Capitalizar los conocimientos que encierran los éxitos, fracasos
                            y mejores prácticas de marcas en redes sociales.
                        </div>
                    </div>

                </div>
                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            3
                        </div>
                        <div class="paso-texto fs16">
                            Establecer una conversación efectiva con tus consumidores y generar
                            lealtad a tu marca a través de estrategias digitales de acceso, conexión
                            y colaboración.
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            4
                        </div>
                        <div class="paso-texto fs16">
                            Identificar, usar e interpretar indicadores y métricas para optimizar tu
                            inversión en marketing digital.
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
                        <div class="module-title robotoRe negro23">Del marketing masivo a las redes de clientes. </div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Lecturas previas – La red es tu cliente.</p>
                            <p>
                                <div class="robotoBo">
                                    <br>Estructura
                                </div>
                            </p>
                            <p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>De mercados masivos a redes de clientes.</p>
                                <p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Modelo de mercado masivo vs. modelo de red
                                        de clientes.</p>
                                    <p class="padding-text-modulos-1">-&nbsp;&nbsp;&nbsp;Historia #1 – Paliza a tu
                                        marca (United
                                        Airlines).</p>
                                    <p class="padding-text-modulos-1">-&nbsp;&nbsp;&nbsp;Historia #2 – Amor por tu
                                        marca (Coca-Cola).</p>
                                    <p class="padding-text-modulos-1">-&nbsp;&nbsp;&nbsp;Historia #3 – Impulso a tu
                                        negocio (CISCO).</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Definición de una red de clientes y quién
                                        está en tu red de
                                        clientes.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Ley de Metcalfe e hipótesis del mundo
                                        pequeño de Milgram.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Leyes del poder y la regla 90-9-1 (curva
                                        de Bell).</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>De las herramientas de comunicación uno a
                                        uno a las
                                        herramientas de comunicación
                                        muchos a muchos.</p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Reconsiderar el embudo del marketing.</p>
                                    <div class="robotoBo">
                                        <br>Aplicación
                                    </div>
                                </p>
                                <p class="padding-text-modulos">
                                    <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Reflexionar sobre tus interacciones
                                    digitales personales
                                    y describir
                                    la red de clientes para tu negocio.
                                </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 2</div>
                        <div class="module-title robotoRe negro23">La mezcla de publicidad digital: principios y
                            canales clave.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Panorama general de la publicidad digital.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Marketing por correo electrónico.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Publicidad vía el motor de búsqueda.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Publicidad en sitios web y apps.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Publicidad en video.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Principios de la publicidad digital eficaz: público
                            objetivo.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Principios de la publicidad digital eficaz:
                            personalización.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Principios de la publicidad digital eficaz:
                            personalización.</p>
                        <p>
                            <div class="robotoBo">
                                <br>Aplicación:
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Simulación de marketing digital – Aprenderás los
                            principios de la
                            publicidad en
                            línea a través de un escenario del mundo real en un ambiente simulado. </p>
                        </br>
                        <p class="padding-text-modulos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aprenderás a:</p>
                        <p class="padding-text-modulos-1">1.&nbsp;&nbsp;&nbsp;Realizar búsquedas estratégicas de
                            palabras claves.</p>
                        <p class="padding-text-modulos-1">2.&nbsp;&nbsp;&nbsp;Crear campañas de anuncios PPC (Pago Por
                            Clic).</p>
                        <p class="padding-text-modulos-1">3.&nbsp;&nbsp;&nbsp;Entender y medir indicadores de desempeño
                            claves.</p>
                        <p class="padding-text-modulos-1">4.&nbsp;&nbsp;&nbsp;Escribir mensajes dirigidos.</p>
                        <p class="padding-text-modulos-1">5.&nbsp;&nbsp;&nbsp;Optimizar páginas de inicio.</p>
                        <p class="padding-text-modulos-1">6.&nbsp;&nbsp;&nbsp;Operar una campaña de marketing por
                            correo
                            electrónico.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 3</div>
                        <div class="module-title robotoRe negro23">Cinco comportamientos centrales de los clientes en
                            el mundo digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco comportamientos centrales de los clientes en el
                            mundo digital.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>"Teoría de Maslow" y comportamiento de las redes de
                            clientes.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción al comportamiento central – Acceso,
                            compromiso,
                            personalización,
                            conexión y colaboración.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 4</div>
                        <div class="module-title robotoRe negro23">Estrategia de acceso.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Servicios por encargo.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Carteras en dispositivos móviles y lealtad.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Servicios basados en la ubicación</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Trazar la ruta hacia la compra y micromomentos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Salas de exposiciones.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Pensamiento de omnicanal.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tecnología “vestible” (<i>wearables</i>).</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos para la estrategia de acceso.</p>
                        <p>
                            <div class="robotoBo">
                                <br> Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Analizar y explicar cómo una empresa
                            seleccionada utiliza la
                            estrategia
                            de ACCESO.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 5</div>
                        <div class="module-title robotoRe negro23">Estrategia de engagement: marketing de contenidos,
                            utilidad, mensajes y marcas como creadoras de contenido.</div>
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
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la estrategia de compromiso. </p>
                            <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Ofrecer utilidad y ser relevante.</p>
                            <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Mostar un rostro personal y dirigirte
                                a tu
                                audiencia.</p>
                            <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Vincular el contenido con las
                                conversiones.</p>
                            <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Quién desarrolla el contenido.</p>
                            <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Temas claves de la estrategia de
                                compromiso.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Analizar y explicar cómo una empresa
                            seleccionada utiliza la
                            estrategia
                            de compromiso.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 6</div>
                        <div class="module-title robotoRe negro23">Estrategia a la medida: determinación del target,
                            personalización y comercialización de segmentos a individuos.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <u>Estructura:</u>
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la estrategia a la medida – Netflix.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Comercio electrónico personalizado – Lancome y
                            Warby-Parker.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Empaque personalizado – Coca-Cola.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Productos mezclados y compatibles – Starbucks y
                            producción para el
                            cliente.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Comunicaciones dirigidas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Focalización con base en los valores de vida del
                            cliente – Custora y
                            Caesars Palace,
                            Las Vegas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Automatización de marketing.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Estás demasiado focalizado? – La historia de Target.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Temas claves para la estrategia a la medida – La
                            paradoja de la
                            elección.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Las cuatro mentalidades para compartir.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El valle inquietante.</p>
                        <p>
                            <div class="robotoBo">Aplicación</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Analizar y explicar cómo una empresa
                            seleccionada utiliza la
                            estrategia
                            a la medida.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 7</div>
                        <div class="module-title robotoRe negro23">Estrategia de conexión: redes sociales, comunidades
                            y el poder de la conversación.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Escucha y aprende y a qué prestar atención.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplos de escuchar.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Servicio al cliente en redes sociales.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Vuelve lúdicas tus conversaciones.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proporciona un foro.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Pide ideas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Agrega una capa de valor.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Métrica común para medir y definir tus términos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos claves para la estrategia de conexión. </p>
                        <p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Analizar y explicar cómo una empresa
                            seleccionada utiliza la
                            estrategia
                            de conexión.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 8</div>
                        <div class="module-title robotoRe negro23">Estrategia de colaboración: <i> crowdsourcing </i>,
                            fondeo colectivo (<i>crowdfunding</i>) y plataformas abiertas.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la estrategia de colaboración.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Contribución pasiva – Waze.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Contribución activa – iReport de CNN.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Resolver la brecha de experiencia.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Fondeo colectivo (crowdfunding).</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Competencia abierta – Doritos e ilustraciones de
                            InnoCentive.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Plataformas abiertas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Temas claves para la estrategia de colaboración.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Motivaciones para la colaboración en
                            redes.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Modularidad del problema.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Habilidades de los participantes.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;El fondo no es suficiente.</p>
                        <p>
                            <div class="robotoBo">Aplicación</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Analizar y explicar cómo una empresa
                            seleccionada utiliza la
                            estrategia
                            de colaboración.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 9</div>
                        <div class="module-title robotoRe negro23">Lecciones de los fracasos de marcas en redes
                            sociales.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El piloto automático es para los aviones, no para las
                            redes
                            sociales.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El engaño se revela fácilmente. </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Si los empleados actúan por sí mismos no siempre
                            actuarán para tu
                            beneficio. </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El <i>bullying</i> no funciona. </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>No eres el dueño de la #conversación. </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Las acciones <i>offline</i> desencadenan
                            recomendaciones boca a
                            boca. </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>La participación razonada sí funciona.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>La guerra por la reputación.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 10</div>
                        <div class="module-title robotoRe negro23">Mejores prácticas para las marcas en redes sociales.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Orgánico vs. pagado.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Principales redes sociales – pros y contras.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Facebook.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Twitter.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;LinkedIn.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Instagram y Pinterest.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;YouTube.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Snapchat y Messenger.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Evolución de los productos publicitarios.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Anuncios en sitios web, apps y videos.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Generación de prospectos, instalaciones
                            de apps,
                            recomendaciones para seguir, hashtags, compre
                            ahora.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;YouTube.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Opciones de focalización.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Redefinir el público objetivo y las
                            audiencias
                            similares a los clientes.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Aplicación de la determinación del
                            público objetivo
                            en Facebook.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Personas influyentes (<i>influencers</i>) en línea y
                            decisiones de
                            los&nbsp;&nbsp;clientes.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 11</div>
                        <div class="module-title robotoRe negro23">Hacer que lo digital importe: métricas, Retorno de
                            Inversión (ROI) y Modelado Ágil (<i>Agile Modelling</i>).</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Nadar en los datos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Hablar diferentes idiomas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Barreras para medir el ROI.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Peras y manzanas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>¿Qué mitad de mi parte digital está funcionando?</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Modelo basado en tu estrategia.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;El ejemplo del Ford Fiesta.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;El ejemplo de CitiBike.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Enfoque en los Indicadores Claves de Rendimiento
                            (KPIs).</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;El ejemplo de Visa.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cuestiona tus datos.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Correlación.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Atribución del último toque.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Prueba y control.</p>
                        <p class="padding-text-modulos-1">- &nbsp;&nbsp;&nbsp;Ejemplo de prueba y control – Buzzfeed.
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Siete hábitos del modelador ágil en marketing.</p>
                        <p>
                            <div class="robotoBo">Aplicación </div>
                        </p>
                        <p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Tarea: Categorización de la métrica. </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 12</div>
                        <div class="module-title robotoRe negro23">Proceso de cinco pasos para la planeación y
                            ejecución de tu estrategia de marketing digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br>Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco pasos del proceso.</p>
                        <p class="padding-text-modulos-1">1. &nbsp;&nbsp;&nbsp;Establecimiento de objetivos.</p>
                        <p class="padding-text-modulos-1">2. &nbsp;&nbsp;&nbsp;Segmentación y posicionamiento de marca.</p>
                        <p class="padding-text-modulos-1">3. &nbsp;&nbsp;&nbsp;Concepción de ideas y selección del
                            concepto.</p>
                        <p class="padding-text-modulos-1">4. &nbsp;&nbsp;&nbsp;Ejecución.</p>
                        <p class="padding-text-modulos-1">5. &nbsp;&nbsp;&nbsp;Medición.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 13</div>
                        <div class="module-title robotoRe negro23">Retos organizacionales del marketing digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Habilidades y capacitación.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Velocidad y agilidad.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Colaboración en las divisiones.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Colaboración en las unidades de negocio.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Retos organizacionales de marketing digital.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 14</div>
                        <div class="module-title robotoRe negro23">Seis rostros del futuro (cercano) del marketing
                            digital.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">Estructura</div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El mercadólogo abordable.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Tecnodiversidad.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El “Centro del Hueco” (<i>Hollow Middle</i>) de la
                            publicidad.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Amenazas invisibles.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Dos mentes de marketing.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>El director general de marketing se esfuma.</p>
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
                    <img src="../assets/img/svg/real-world-applications.svg" alt="Aplicaciones del mundo real">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    10
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Aplicaciones del mundo real
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/discussions.svg" alt="Discusiones">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    5
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
                    2
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
                <img src="../assets/img/jpg/big-certificate-1.jpg" alt="Certificado">
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


    <!--<script async type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/gdpr.js"></script>-->


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
            jQuery('#lead_source').val(getParameterByName("utm_source"));
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