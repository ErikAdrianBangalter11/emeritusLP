<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Script's for Tag Manager -->

    <!-- Google Tag Manager INTOConsultancy-->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTMJG7J');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager Admazing-->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5LNX736');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Thinking | Diseño de soluciones para la innovación</title>
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTMJG7J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Google Tag Manager (noscript) Admazing -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LNX736" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
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
        <div class="hero-data hero_DT">

            <div class="idioma">
                <img src="../assets/img/svg/ahora.svg" alt="Ahora-en-español">
            </div>
            <div class="hero-data-cont">
                <div class="hero-title">
                    <div class="MIT-back openRe fs16 blanco">
                        <span class="openBo">NUEVO</span> programa <i>online</i>
                    </div>
                    <div class="robotoRE fs26 blanco">
                        DESIGN <span class="robotoBo">THINKING</span>
                    </div>
                    <div class="robotoBo fs16 blanco">
                        Diseño de soluciones para la innovación
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
                            <div class="fecha fs18 robotoRe negro">27/05/2019</div>
                        </div>

                        <div class="fechas">
                            <div class="fecha-title fs14 robotoRe gris6E">Termina</div>
                            <div class="fecha fs18 robotoRe negro">28/07/2019</div>
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
                SOLUCIONES REALES
                <span class="crimsonBo"> PARA PERSONAS REALES</span>
            </div> <!-- informacion-title -->

            <div class="informacion robotoRe fs16">
                Innovar no es opcional… pero tampoco es fruto de inspiración divina; requiere de
                inteligencia, disciplina y la generación <a class="button-enable robotoBo fs16 rosa51">...más</a>

                <span class="enable">
                    de soluciones para problemas concretos y
                    necesidades sentidas, colocando a las personas en el centro de los procesos.Hoy, la
                    reinvención es, más que un tema de estética y funcionalidad, una cuestión de empatía.
                    <br>
                    <br>
                    Ahí es donde entra Design Thinking: un enfoque de innovación que integra aspectos del
                    diseño, la ingeniería y la mercadotecnia para la creación sistemática de soluciones
                    centradas en las necesidades y comportamiento de los clientes.
                    <br>
                    <br>
                    En este <span class="robotoBo">curso de Steve Eppinger, creador del Centro para la Innovación en el
                        Desarrollo
                        de Productos del MIT</span>, aprenderás a utilizar técnicas de design thinking para resolver
                    los
                    problemas de tu empresa, re-pensar la oferta de tus productos y servicios, crecer en los
                    mercados que te interesan, dar mayor valor a tus clientes, e innovar para ser más
                    competitivo.
                </span>
            </div> <!-- informacion -->
            <span class="enable">
                <div class="informacion-relevante">

                    <div class="relevante-container">
                        <div class="No-relevante fs44 robotoBo azulBC">
                            83%
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            impulsadas por el diseño han duplicado su participación de mercado con respecto al promedio
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: CONSEJO DE DISEÑO DEL REINO UNIDO.
                        </div>
                    </div> <!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs44 rosa75">
                            <div class="No-relevante robotoBo desktop">40% <span class="robotoRe fs30">de los
                                    productos</span></div>
                            <div class="No-relevante robotoBo movil">40% <span class="robotoRe fs30">de los
                                    productos</span></div>
                        </div>
                        <div class="desc fs20 robotoBo cafe6C">
                            fracasan por no llegar al mercado. De los productos que sí llegan, 40% son retirados por
                            falta de rentabildad.
                        </div>
                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: M. RAYNOR DIRECTOR DE DELOITTE Y C. CHRISTENSEN: HARVARD BUSINESS SCHOOL, #1 EN
                            THINKERS SO.
                        </div>
                    </div><!-- relevante-container -->

                    <div class="relevante-container">
                        <div class="fs44 azulBC">
                            <div class="No-relevante robotoBo desktop">2/3 partes <span class="robotoRe fs30">del
                                    esfuerzo</span></div>
                            <div class="No-relevante robotoBo movil">2/3 partes <span class="robotoRe fs30">del
                                    esfuerzo</span></div>
                        </div>

                        <div class="desc fs20 robotoBo cafe6C">
                            y recursos de las comunicaciones entre marcas y clientes se llevará a cabo sin
                            intervenciones humanas.
                        </div>

                        <div class="fuente fs14 robotoRe gris6E">
                            FUENTE: M. RAYNOR DIRECTOR DE DELOITTE Y C. CHRISTENSEN: HARVARD BUSINESS SCHOOL, #1 EN
                            THINKERS SO.
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
                <form class="form-cont" method="POST" action="https://www2.emeritus.org/l/134351/2018-07-23/41bt9j">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="text" id="first_name" name="first_name"
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="first_name">Nombre(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="text" id="last_name" name="last_name"
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="last_name">Apellido(s)</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="fs16 robotoRe mdl-textfield__input" type="email" id="email" name="email"
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="email">Email</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="country" name="Country" class="mdl-textfield__input Country mov-input-class"
                            required>
                        </select>
                        <label class="fs16 robotoRe mdl-textfield__label" for="country">País</label>
                    </div>

                    <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                        <select id="work_experience" name="work_experience"
                            class="fs16 robotoRe mdl-textfield__input work_experience mov-input-class" required>
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
                        <input class="fs16 robotoRe mdl-textfield__input" type="tel" id="mobile" name="mobile"
                            maxlength="15" minlength="5" onkeypress="return valida(event)" pattern="[0-9]+" required>
                        <label class="fs16 robotoRe mdl-textfield__label" for="mobile">Número de celular</label>
                    </div>

                    <div class="button-container">
                        <input type="hidden" name="lead_source" id="lead_source" value="Web">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="browser" value="">
                        <input type="hidden" name="course" id="course" value="Design-Thinking">
                        <!--This value is different in each in the pages-->
                        <input type="hidden" name="retURL"
                            value="https://latam.emeritus.org/programas/Thank-you-page-DT.php">
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
            <span class="robotoBo">Curso de Design Thinking:</span>
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
                el 21 de junio de 2019.
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
                el 21 de junio de 2019.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La última parcialidad de <span class="robotoBo">$435 USD</span> a pagar
                el 6 de julio de 2019.
            </div>
        </div>
    </div> <!-- modal-pagos-flexibles -->


    <!-- Section no. 5: Certificate -->
    <div class="el-certificado-container">
        <div class="el-certificado-title crimsonRe fs24 negro28">
            EL CERTIFICADO EN
            <span class="crimsonBo">
                DESIGN THINKING ES PARA TI SI:
            </span>
        </div>
        <div class="el-certificado-img">
            <img class="el-certificado-desktop" src="../assets/img/jpg/es-para-ti-si-imagen-DT.jpg"
                alt="El certificado en marketing digital">
            <img class="el-certificado-movil" src="../assets/img/jpg/es-para-ti-si-imagen-DT-movil.jpg"
                alt="El certificado en marketing digital">
        </div>
        <div class="el-certificado-requisitos-cont">
            <div class="requisito fs16 robotoRe negro">
                Necesitas solucionar problemas de forma creativa.
                Con este enfoque no solo diseñas productos y
                servicios, sino que aprendes a enfrentar nuevos
                retos y aprovechar oportunidades coyunturales.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Buscas nuevas metodologías que te permitan profundizar
                en las necesidades y comportamiento de los usuarios
                para ofrecerles soluciones novedosas.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Necesitas complementar tus conocimientos para mantenerte
                vigente y crecer en tu campo profesional, o generar y
                evaluar nuevos conceptos de productos y/o servicios.
            </div>
            <div class="requisito fs16 robotoRe negro">
                Eres emprendedor y quieres impulsar el crecimiento de
                tu negocio empleando la gestión de innovación para
                diseñar productos y servicios y crear experiencias
                nuevas para tus consumidores.
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
                        <img class="MIT-bord" src="../assets/img/jpg/steven-eppinger.jpg" alt="Steve Eppinger">
                    </div>
                    <div class="profesor-data">
                        <div class="robotoRe fs16 negro46">Autor y profesor titular</div>
                        <div class="robotoBo fs18 negro46">Steve Eppinger</div>
                        <div class="robotoRe fs16 vino38"> <i> MIT Sloan School of Management </i> </div>
                    </div>
                </div>
                <div class="profesor-description robotoRe fs14 negro46">
                    Experto mundialmente reconocido por su experiencia en las áreas de
                    desarrollo de productos y gestión de proyectos técnicos, <span class="robotoBo">Steve Eppinger es
                        pionero de la metodología DSM – Design Structure Matrix (Matriz de la
                        Estructura de Diseño</span>), empleada para la administración y manejo de
                    sistemas complejos.
                    <br>
                    <br>
                    Académico destacado de la MIT Sloan School of Management y Líder de
                    Operaciones Globales en General Motors, participó en la co-autoría del libro
                    Product Design and Development (Diseño y desarrollo de producto)
                    colocándolo como experto en el tema; así como en la co-autoría del libro
                    <i>Design Structure Matrix Methods and Applications</i> (Métodos y aplicaciones
                    de la Matriz de la Estructura de Diseño).
                </div>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/zcFLF-MKK4M" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- Section no. 7: Experts -->
    <div class="tutores-expertos-container">
        <div class="tutores-expertos-title crimsonBo fs32 negro28">
            Tutores expertos
        </div>
        <div class="tutores-expertos-subtitle robotoBo fs18 gris61">
            Para culminar tu viaje de aprendizaje con éxito cuentas
            con la asesoría de expertos en Design Thinking en español,
            quienes te acompañaran y resolverán cualquier duda que tengas:
            Mauricio Guadarrama, Nasly Galindo y Carlos de la Mora.
        </div>
        <div class="tutor-container">
            <div class="tutor-cont tutor-cont-v2">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/Mauricio-Guadarrama.jpg" alt="Mauricio Guadarrama">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Mauricio Guadarrama</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Líder del curso Design Thinking de Emeritus Institute of Management,
                    Mauricio se ha destacado como consultor de proyectos de innovación
                    centrados en el usuario. Ocupó la dirección de Investigación Cualitativa
                    en la Presidencia de la República Mexicana y en la Fundación BBVA-Bancomer.
                    <br>
                    <br>
                    Los proyectos en los que Mauricio ha trabajado desde hace más de 11 años
                    tienen como objetivo temas estratégicos, conocimiento de clientes, estrategia
                    de marca y diseño de servicios. Los sectores en donde ha enfocado su trabajo
                    son: finanzas, telecom, energía, consumo masivo, educación y tecnología.
                </div>
            </div>
            <div class="tutor-cont tutor-cont-v2">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/nasly-galindo.jpg" alt="Nasly Galindo">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Nasly Galindo</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Líder del curso Design Thinking de Emeritus Institute of Management, Nasly se ha
                    especializado como diseñadora de estrategias realizando investigaciones para el
                    desarrollo de modelos de negocio y estrategias de comunicación.
                    <br>
                    <br>
                    La experiencia de Nasly también incluye la creación de proyectos que vinculan el
                    diseño, el arte y el impacto social; así como la colaboración en eventos de diseño
                    de experiencias. Su trayectoria académica ha sido en temas de diseño industrial,
                    investigación cualitativa y sustentabilidad.
                </div>
            </div>
            <div class="tutor-cont tutor-cont-v2">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="../assets/img/jpg/carlos-de-la-mora.jpg" alt="Carlos de la Mora">
                    </div>
                    <div class="tutor-data">
                        <div class="robotoBo fs20 negro46">Carlos de la Mora</div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description robotoRe fs16 negro23">
                    Líder del curso Design Thinking de Emeritus Institute of Management y Director
                    Ejecutivo del Urban Land Institute (ULI) en México, Carlos forma parte de proyectos
                    de promoción y desarrollo desde hace más de 25 años. También ha representado a
                    empresas globales en las áreas de diseño, arquitectura y planeación, incluyendo
                    KMD Architects, Nolte Associates y AECOM Design + Planning.
                    <br>
                    <br>
                    Como consultor, Carlos asesora a inversionistas, artistas, arquitectos, ingenieros
                    y desarrolladores inmobiliarios. Algunos de sus clientes incluyen empresas como
                    Grupo Aeropuertario del Pacífico (GAP), LEGO Real Estate, Standard Vision, SBE
                    Group, La Europea y Soho House.
                </div>
            </div>
        </div>
    </div>


    <!-- Section no. 8: Certificate  -->
    <div class="con-certificado-container">
        <div class="con-certificado-title fs28 crimsonRe">
            CON EL CERTIFICADO EN <span class="crimsonBo">DESIGN THINKING APRENDERÁS A:</span>
        </div>
        <div class="con-certificado-cont">
            <div class="con-certificado-img">
                <img src="../assets/img/jpg/aprenderas-a-imagen-DT.jpg" alt="aprenderas-a-imagen">
            </div>

            <div class="con-certificado-flex">

                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            1
                        </div>
                        <div class="paso-texto fs16">
                            Combinar las perspectivas de la mercadotecnia, el diseño y la ingeniería bajo un enfoque
                            sistemático para el desarrollo innovador de productos y servicios.
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            2
                        </div>
                        <div class="paso-texto fs16">
                            Desarrollar un proceso de diseño centrado en los consumidores, partiendo de sus necesidades
                            y tomándololos en cuenta en cada una de las etapas de desarrollo y prueba en las que se
                            basa design thinking.
                        </div>
                    </div>

                </div>
                <div class="con-certificado-pasos">
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            3
                        </div>
                        <div class="paso-texto fs16">
                            Aplicar un proceso innovador de solución de problemas basado en el desarrollo de
                            habilidades y en la práctica efectiva de la creatividad.
                        </div>
                    </div>
                    <div class="paso-cont">
                        <div class="paso-numero fs35 crimsonBo negro46">
                            4
                        </div>
                        <div class="paso-texto fs16">

                            Capitalizar los conocimientos que encierran los fracasos, mejores prácticas y grandes
                            éxitos de marcas en industrias diversas.
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
                        <div class="module-title robotoRe negro23">Habilidades del <i>Design Thinking.</i></div>
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
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Leer: Design Thinking de Tim Brown (Harvard
                                Business Review)</p>
                            <p>
                                <p>
                                    <div class="robotoBo">
                                        <br>Estructura
                                    </div>
                                </p>
                                <p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Tres retos de la innovación</p>
                                    <p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Deseabilidad de las
                                            personas.</p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Viabilidad del negocio.</p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Factibilidad técnica.</p>
                                        <p class="padding-text-modulos">
                                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplos de los tres retos de la
                                            innovación:</p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;NEST.</p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;AIRBNB.</p>
                                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;APPLE.</p>
                                        <p class="padding-text-modulos">
                                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Habilidades del <i>design thinking.</i>
                                        </p>
                                        <p class="padding-text-modulos">
                                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proceso de innovación sistemática de
                                            IDEO.</p>
                                        <p class="padding-text-modulos">
                                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cómo clasificar las ideas</p>
                                        <div class="robotoBo">
                                            <br>Aplicación
                                        </div>
                                    </p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Torneo en línea – Presentar DOS
                                        oportunidades de producto, servicio o software. Implementar cuatro elementos de
                                        liderazgo.
                                    </p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Aplicar el modelo de los tres retos de la
                                        innovación para evaluar los productos/servicios de tu propio negocio.
                                    </p>
                                    <p class="padding-text-modulos">
                                        <strong>• &nbsp;&nbsp;&nbsp;</strong>Clasifica 40 de las oportunidades
                                        presentadas.
                                    </p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 2</div>
                        <div class="module-title robotoRe negro23">Identificando necesidades del cliente.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proceso de desarrollo de productos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proceso de desarrollo de conceptos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Aplicación de la innovación para el usuario</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Necesidades de los clientes y mercados.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplo de usuarios propensos a innovar (lead users) –
                            estudio de iluminación.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Pasos del proceso de análisis de las necesidades de
                            los clientes – NEST.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Cinco guías para escribir los enunciados de
                            necesidades.</p>
                        <div class="robotoBo">
                            <br>Aplicación:
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proyecto grupal del mundo real: Ejercicio de las
                            necesidades de los clientes—determinar necesidades latentes y no satisfechas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Encontrar (en casa o en la oficina) un ejemplo de un
                            producto innovador. Subir una foto y explicar por qué la eligieron.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proyecto grupal del mundo real: Seleccionar las ideas
                            mejor calificadas por el equipo y trabajar en lo siguiente:</p>
                        </br>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Evaluación de oportunidades y desarrollo
                            de conceptos.</p>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Identificar necesidades para su idea de
                            proyecto.</p>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Recibir las revisiones de los otros
                            miembros del equipo.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 3</div>
                        <div class="module-title robotoRe negro23">Creatividad aplicada.</div>
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
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplo: auto conceptual YCC.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Grandes ideas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Reglas comunes para la lluvia de ideas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Investigación sobre lluvia de ideas y creatividad.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Bosquejos de conceptos y modelado de los bosquejos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proceso de generación de conceptos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Búsqueda externa e interna – lluvia de ideas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Generación de conceptos – ejemplo de combinación de
                            ideas.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Concepto de selección restringida .</p>
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
                            Diseño de servicios.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">
                        <p>
                            <div class="robotoBo">
                                <br> Estructura
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>La diferencia entre bienes y servicios.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Innovación de servicios en Bank of America.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ciclos de experiencia de servicios.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplos de ciclos de experiencia de servicios:</p>
                        </br>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Ejemplo de la sala de cine.</p>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Zipcar.</p>

                        <div class="robotoBo">
                            <br> Aplicación
                        </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Descomponer el ejemplo de la sala de cine.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proyecto grupal del mundo real:</p>
                        </br>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Análisis y desarrollo de conceptos.</p>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Trazar un plan del ciclo de experiencia
                            del cliente para su idea de proyecto.</p>
                        <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Pensar en oportunidades de innovación
                            surgidas de ese ciclo.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 5</div>
                        <div class="module-title robotoRe negro23">
                            Análisis financiero. </div>
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
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Experimento mental y flujo de efectivo del
                                desarrollo de productos.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Mercadotecnia financiera del proyecto de
                                desarrollo de productoss.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Valor actual neto (NPV) y ejemplo de Nespresso.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Ejemplo de Nespresso: </p>
                            </br>
                            <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Número de máquinas y cápsulas.</p>
                            <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Incertidumbre del modelo.</p>
                            <p class="padding-text-modulos">
                                <strong>• &nbsp;&nbsp;&nbsp;</strong>Modelaje en hoja de cálculo – ¿cuánto más
                                necesitamos vender para recuperar el programa de reciclamiento? </p>
                            </br>
                            <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Poner varios de los peores casos y ver
                                qué le pasa al NPV.</p>
                            <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Poner varios de los mejores casos y
                                ver qué le pasa al NPV.</p>
                            <p class="padding-text-modulos-1">o&nbsp;&nbsp;&nbsp;Rendir un informe de las anteriores
                                discusiones.</p>
                            <div class="robotoBo">
                                <br>Aplicación
                            </div>
                        </p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Analizar el caso de Nespresso desde una perspectiva
                            financiera. Ejercicio: Enumerar 5 razones por las cuales las firmas pueden elegir ir tras
                            un producto incluso si el análisis revela un NPV negativo.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Proyecto grupal del mundo real: Completar el factoraje
                            del reporte conforme a cualquier análisis financiero adicional que hayan aprendido.</p>
                    </div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header robotoBo fs16">
                        <div class="No negro46">Módulo 6</div>
                        <div class="module-title robotoRe negro23">
                            Revisiones del proyecto entre pares del proyecto y cierre del curso.</div>
                        <div class="collapsible-header-img"></div>
                    </div>
                    <div class="collapsible-body">

                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Introducción a la economía del desarrollo de
                            productos.</p>
                        <p class="padding-text-modulos">
                            <strong>• &nbsp;&nbsp;&nbsp;</strong>Experimento mental y flujo de efectivo del desarrollo
                            de productos.</p>
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
                    <img src="../assets/img/svg/video-lectures.svg" alt="Clases en video">
                </div>
                <div class="tu-viaje-numero robotoBo fs24 gris6E">
                    62
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
                    4
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
                    4
                </div>
                <div class="tu-viaje-name robotoBo fs16 gris61">
                    Estudios de caso
                </div>
            </div>
            <div class="tu-viaje-icon">
                <div class="tu-viaje-img">
                    <img src="../assets/img/svg/proyecto-final.svg" alt="Proyecto final">
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
                    <img src="../assets/img/png/certificado2.png" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex2" class="modal modal-certificado">
                <img src="../assets/img/jpg/big-certificate-2.jpg" alt="Certificado">
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
                    <a class="robotoRe fs16 blanco" href="https://bit.ly/2JFFnEa" target="_blank"
                        rel="noopener noreferrer">
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
                        El contenido del curso y la colaboración con colegas de todo el mundo fueron una gran
                        experiencia de aprendizaje.
                        ¡El resultado al cabo de dos semanas fue extraordinario!
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Andreas Cem Vogt
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Equipo de ventas,
                        <br>jefe de Procesos de Negocios
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            Alemania
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://de.linkedin.com/in/cemvogt">
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
                        "De lejos, la primera lección fue la lección más importante. Ese marco ha orientado la
                        dirección de
                        todo el curso y es absolutamente
                        fundamental para recordar durante todo el proceso de diseño. Hoy, estoy aprovechando ese marco
                        en mi
                        trabajo
                        para cuestionar la relación valor / innovación que brindamos con nuestros canales de
                        comercialización".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Kevin Ly
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Director Asociado de Análisis Comercial,
                        <br>Bristol Myers Squibb
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/kevin-ly-21906b32/">
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
                        Los ejemplos que se usaron para ilustrar los diferentes aspectos del desarrollo de productos
                        fueron
                        extremadamente útiles".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Jenny Brown
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Especialista en desarrollo de productos de UX,
                        <br>Centro de incubación digital.
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
                        "Los videos de la facultad, ejemplos reales, estudios de casos y tareas fueron muy útiles
                        para
                        proporcionar una mejor comprensión
                        del pensamiento de diseño".
                    </div>
                    <div class="linea-slide"></div>
                    <div class="nombre fs18 robotoBo negro46">
                        Ramesh Arora
                    </div>
                    <div class="cargo fs14 robotoRe negro46">
                        Asistente del Gerente General, TATA Power
                    </div>
                    <div class="cont-pais">
                        <img src="../assets/img/svg/world.svg" alt="Mundo">
                        <div class="pais fs14 robotoRe cafe6C">
                            India
                        </div>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/ramesh-arora-8482ba7/">
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
                    EMERITUS Institute of Management para este curso, <a class="rosaD8 robotoBo"
                        href="https://executive.mit.edu/article/emeritus-institute-of-management" target="_blank">da
                        clic aquí</a>
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
            <a class="fs12 rosa75 robotoRe" href="https://latam.emeritus.org/terminos-de-servicio.php"
                target="_blank">Términos
                de servicio</a>
            |
            <a class="fs12 rosa75 robotoRe" href="https://latam.emeritus.org/politica-de-privacidad.php"
                target="_blank">Política
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
    <script type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/countries-latam-update.js">
    </script>
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