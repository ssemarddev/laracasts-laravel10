<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link rel="stylesheet" href="{{ ('css/global.css') }}">
    <link rel="stylesheet" href="{{ ('css/index.css') }}">
  <!-- Incluir el CSS compilado -->
  @vite('resources/css/index.css') <!-- Si usas Vite -->
  @vite('resources/css/style.css') <!-- Si usas Vite -->
  @vite('resources/css/global.css') <!-- Si usas Vite -->
    <!-- o -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Si usas Laravel Mix -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Si usas Laravel Mix -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}"> <!-- Si usas Laravel Mix -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Suisse Int'l Trial:wght@600;700&display=swap" />
</head>



<!--Comienza la seccion del HEADER del menu -->
<header class="header">
    <div class="logos-icon">
        <!-- AquÃ­ irÃ­a tu logo -->
        <img src="{{ asset('images/logo/logo-principal.svg') }}" class=" logos-icon" >
    </div>
    <div class="menu">
        <nav class="menu-items">
            <a href="#" class="inicio">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Capitals</a>
            <a href="#">Metodología</a>
            <a href="#">Comunidad</a>
            <a href="#">Contacto</a>
        </nav>
        <div class="buttons">
            <button class="button">Iniciar Sesion</button>
            <button class="button1">Registrarse</button>
        </div>
    </div>
    <div class="hamburger-icon" onclick="toggleMenu()">
        &#9776;
    </div>
    <div class="sidebar-menu" id="sidebarMenu">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Acerca de</a>
        <a href="#">Contacto</a>
        <button class="button">Iniciar SesiÃ³n</button>
        <button class="button1">Registrarse</button>
    </div>
</header>
<!--Termina la seccion del HEADER del menu -->

<!--Comiensa la seccion del HERO del menu -->
<section>
    <div class="hero">
        <img src="{{ asset('images/logo/hero-img-portada.png') }}" class="hero-img-icon" >
        <div class="logos">
            <img src="{{ asset('images/logo/Group-consolida.png') }}" class="group-icon" >
            <img src="{{ asset('images/logo/Group-grupo.png') }}" class="group-icon1" >
        </div>
        <div class="button-hero">
            <b class="label">Comenzar ahora</b>
            <img src="{{ asset('images/logo/RightArrow.svg') }}" class="arrowsright-arrow-icon" >
        </div>
    </div>

</section>
<!--Termina la seccion del HERO del menu -->

<!-- Comienza la seccion de Nosotros -->
<section>
    <div class="nosotros">
        <div class="content">
            <div class="content1">
                <img src="{{ asset('images/logo/nosotros1.png') }}" class="component-1-icon" >
                <div class="body">
                    <div class="heading">
                        <b class="about">About</b>
                        <div class="somos-la-aceleradora-container">
                        <p class="text-justificado">Somos la aceleradora de empresarios en seguros con más impacto en México.</p>
                        <p class="text-justificado">Impulsamos carreras de éxito dentro de la industria aseguradora. Creando asesores íntegros e integrales.</p>
                        </div>
                    </div>
                    <img src="{{ asset('images/logo/nosotros2.png') }}" class="component-1-icon1" >
                    <div class="info">
                        <div class="h3-feature-title1-parent">
                            <b class="h3-feature-title1">42</b>
                            <div class="frame-child">
                            </div>
                            <div class="paragraph">Años en el mercado</div>
                        </div>
                        <div class="h3-feature-title1-parent">
                            <b class="h3-feature-title1">300</b>
                            <div class="frame-child">
                            </div>
                            <div class="paragraph1">Socios comerciales</div>
                        </div>
                        <div class="h3-feature-title1-container">
                            <b class="about">Top 10</b>
                            <div class="frame-child">
                            </div>
                            <div class="paragraph2">A nivel nacional</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="articulo">
                <div class="contents">
                    <div class="heading1">
                        <b class="presentes-tambin-en">Presentes tambiÃ©n en:</b>
                    </div>
                    <img src="{{ asset('images/logo/players.svg') }}" class="logos-icon-nosotros" >
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Termina la seccion de nosotros -->

<!-- aqui comienza la seccion de team members -->
<section>
    <div class="team-member-metodologias">
        <img src="{{ asset('images/logo/bg-teammember.png') }}" class="bg-icon-team-member" >
        <div class="team">
            <div class="heading-team-member">
                <div class="heading1-team-member">
                    <b class="nuestros-directivos">Nuestros Directivos</b>
                    <div class="somos-un-lugar">Somos un lugar para mentes brillantes.</div>
                </div>
                <div class="button-team-member">
                    <b class="label">Conoce al resto del equipo</b>
                    <img src="{{ asset('images/logo/Right_Arrow.svg') }}" class="arrowsright-arrow-icon-team-member" >
                </div>
            </div>
            <div class="row">
                <div class="team-member-card">
                    <div class="team-member-carddefault1">
                        <img src="{{ asset('images/logo/rig.png') }}" class="team-member-photo" >
                        <div class="info">
                            <div class="name">
                                <img src="{{ asset('images/logo/rigl.png') }}" class="arrowsright-arrow-icon" >
                                <div class="rodolfo-isaac-garca">Rodolfo Isaac Garcí­a</div>
                            </div>
                            <div class="fundador-y-director">Fundador y Director General</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-card">
                    <div class="team-member-carddefault1">
                        <img src="{{ asset('images/logo/lc.png') }}" class="team-member-photo" >
                        <div class="info">
                            <div class="name">
                                <img src="{{ asset('images/logo/rigl.png') }}" class="arrowsright-arrow-icon" >
                                <div class="rodolfo-isaac-garca">Laura Castro</div>
                            </div>
                            <div class="fundador-y-director">CFO</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-card">
                    <div class="team-member-carddefault1">
                        <img src="{{ asset('images/logo/ri.png') }}" class="team-member-photo" >
                        <div class="info">
                            <div class="name">
                                <img src="{{ asset('images/logo/rigl.png') }}" class="arrowsright-arrow-icon" >
                                <div class="rodolfo-isaac-garca">Rodrigo Isaac</div>
                            </div>
                            <div class="fundador-y-director">Director Estratégico</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-card">
                    <div class="team-member-carddefault1">
                        <img src="{{ asset('images/logo/fg.png') }}" class="team-member-photo" >
                        <div class="info">
                            <div class="name">
                                <img src="{{ asset('images/logo/rigl.png') }}" class="arrowsright-arrow-icon" >
                                <div class="rodolfo-isaac-garca">Franco Garcí­a</div>
                            </div>
                            <div class="fundador-y-director">Director Comercial</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Aqui finaliza la seccion de teammembers -->


<!-- aqui inicia la seccion de metodologias -->
<section>

    <div class="team-member-metodologia">
        <div class="team-member-child">
        </div>
        <div class="vertical-container">
            <div class="vertical-container1">
                <img src="{{ asset('images/logo/vector_335.png') }}" class="vertical-container-child" >
                <div class="vertical-container2">
                    <div class="vertical-container3">
                        <div class="text-input">
                        </div>
                        <div class="vertical-container4">
                        </div>
                    </div>
                    <div class="metodologa">
                        <div class="div-metodologia">1</div>
                        <div class="paragraph-container">
                            <b class="cliente">Cliente</b>
                            <div class="conexin-inmediata-con-container">
                                <span>Diseñamos en conjunto soluciones efectivas con un</span>
                                <span> enfoque de trabajo basado en tener siempre al cliente o usuario en el centro</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-container5">
                    <div class="vertical-container6">
                        <div class="text-input">
                        </div>
                        <div class="vertical-container4">
                        </div>
                    </div>
                    <div class="metodologa">
                        <div class="div-metodologia">2</div>
                        <div class="paragraph-container">
                            <b class="cliente">Marca</b>
                            <div class="conexin-inmediata-con-container">Desarrollamos tu marca personal para posicionarte dentro de esta industria</div>
                        </div>
                    </div>
                </div>
                <div class="vertical-container8">
                    <div class="vertical-container9">
                        <div class="text-input">
                        </div>
                        <div class="vertical-container4">
                        </div>
                    </div>
                    <div class="metodologa2">
                        <div class="div-metodologia">3</div>
                        <div class="paragraph-container2">
                            <b class="cliente">Talento</b>
                            <div class="conexin-inmediata-con-container">Entendemos que somos humanos y por consecuencia trabajamos constantemente en tu crecimiento personal y profesional</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-metodologia">
            <b class="cliente">Conoce nuestra metodología CMT</b>
            <div class="a-travs-de">A través de nuestra innovadora metodología CMT (Cliente, Marca, Talento) nos hemos logrado posicionar como líderes en la industria arrancando y consolidando a nuestros socios comerciales por todo el territorio nacional.</div>
        </div>
    </div>

</section>
<!-- aqui termina la seccion de metodologias Team -->


<!-- Aqui inicia la seccion de CTA (imagen de portada con texto) -->
<section>
    <div class="cta">
    </div>
</section>
<!-- Aqui termina la seccion de CTA (imagen de portada con texto) -->


<!-- Comienza la seccion de Testimonios -->
<section>
    <div class="testimonios">
        <div class="heading-testimonios">
            <b class="nuestra-comunidad">Nuestra comunidad</b>
            <div class="lo-que-comentan">Lo que comentan nuestros clientes de nuestro trabajo, infÃ³rmate sobre nuestros talleres, viajes, etc.</div>
        </div>
        <div class="testimonios1">
            <div class="testimonial">
                <div class="video">
                    <img class="image-2-icon" alt="" src="image 2.png">
                    <img src="{{ asset('images/logo/image_2.png') }}" class="image-2-icon" >


                    <img src="{{ asset('images/logo/logo-surex.png') }}" class="logo-icon" >
                    <div class="container-testimonios">
                        <div class="container-child-testimonios">
                        </div>
                        <div class="lance-miller-parent">
                            <div class="lance-miller">Lance Miller</div>
                            <div class="ceo-co-founder">CEO & CO-Founder at Surex</div>
                        </div>
                    </div>

                    <img src="{{ asset('images/logo/play_circle_filled.png') }}" class="avplay-circle-filled-icon" >
                </div>
                <div class="text-testimonios">
                    <div class="historias-ejecutivas">TALLER DE IMAGEN</div>
                    <div class="lorem-ipsum-dolor">Consolida Capital se preocupa por darles a sus Capitals las herramientas necesarias para ser los mejores en el sector asegurador. Gracias a @cordeliaruiz el taller de imagen fue un Ã©xito. CompartiÃ³ las tendencias, tips, colores y diseÃ±os que mejor se adapten a cada persona para ver su mejor versiÃ³n y proyectar la imagen que desean.</div>
                </div>
            </div>
            <div class="slide">
                <div class="contenedor">
                </div>
                <div class="rectangle-parent">
                    <div class="frame-child">
                    </div>
                    <div class="frame-item">
                    </div>
                    <div class="frame-inner">
                    </div>
                    <div class="rectangle-div">
                    </div>
                    <div class="frame-child1">
                    </div>
                </div>
            </div>
        </div>
        <div class="logos-testimonios">
            <div class="content-testimonios">
                <img src="{{ asset('images/logo/kalifa-consultores.png') }}" class="logos-comunidad-icon" >
                <img src="{{ asset('images/logo/akash.png') }}" class="logos-comunidad-icon1" >
                <img src="{{ asset('images/logo/psustentable.png') }}" class="logos-comunidad-icon2" >
                <img src="{{ asset('images/logo/seguro.png') }}" class="logos-comunidad-icon3" >
                <img src="{{ asset('images/logo/dla.png') }}" class="logos-comunidad-icon4" >
                <img src="{{ asset('images/logo/ssr.png') }}" class="logos-comunidad-icon5" >
                <img src="{{ asset('images/logo/sfn.png') }}" class="logos-comunidad-icon6" >
                <img src="{{ asset('images/logo/ms.png') }}" class="logos-comunidad-icon7" >
                <img src="{{ asset('images/logo/sf.png') }}" class="logos-comunidad-icon8" >
                <img src="{{ asset('images/logo/alp.png') }}" class="logos-comunidad-icon9" >
                <img src="{{ asset('images/logo/corsa.png') }}" class="logos-comunidad-icon10" >
                <img src="{{ asset('images/logo/chapa.png') }}" class="logos-comunidad-icon11" >
                <img src="{{ asset('images/logo/coopts.png') }}" class="logos-comunidad-icon12" >
                <img src="{{ asset('images/logo/asse.png') }}" class="logos-comunidad-icon13" >
                <img src="{{ asset('images/logo/rdn.png') }}" class="logos-comunidad-icon14" >
                <img src="{{ asset('images/logo/ap.png') }}" class="logos-comunidad-icon15" >
                <img src="{{ asset('images/logo/rg.png') }}" class="logos-comunidad-icon16" >
                <img src="{{ asset('images/logo/monar.png') }}" class="logos-comunidad-icon17" >
                <img src="{{ asset('images/logo/vision.png') }}" class="logos-comunidad-icon18" >
            </div>
            <div class="icon-button">
                <img src="{{ asset('images/logo/Right_Arrow.svg') }}" class="arrowsright-arrow-icon-testimonios" >
            </div>
        </div>
    </div>
</section>
<!-- Termina la seccion de Testimonios -->


<!-- Comienza la seccion de contacto -->
<section>
    <div class="contact">

        <img src="{{ asset('images/logo/bg-contacto.png') }}" class="bg-icon-contacto" >
        <div class="contents-contacto">
            <div class="heading-contacto">
                <b class="forma-parte-de">¡Forma parte de Consolida Capital!</b>
                <b class="nuestro-equipo-se">Nuestro equipo se pondrá en contacto contigo.</b>
            </div>
        </div>
        <div class="contact-form">
            <div class="heading1-contacto">
                <b class="inicia-tu-proceso">¡Inicia tu proceso de selección!</b>
            </div>
            <div class="from">
                <div class="text-input-contacto">
                    <div class="text-input1">
                        <div class="info-contacto">
                            <div class="label-contacto">Nombre(s)</div>
                        </div>
                    </div>
                </div>
                <div class="text-input-contacto">
                    <div class="text-input1">
                        <div class="info-contacto">
                            <div class="label-contacto">Correo electrónico</div>
                        </div>
                    </div>
                </div>
                <div class="phone-input">
                    <div class="label2">
                        <b class="label-telefono">Teléfono</b>
                    </div>
                    <div class="input-contacto">
                        <div class="code">
                            <div class="input1-contacto">
                                <div class="country">
                                    <img src="{{ asset('images/logo/Flags_Mobile.png') }}" class="flags-mobile-icon" >
                                    <div class="div-contacto">+52</div>
                                </div>
                                <img src="{{ asset('images/logo/Down_Chevron.svg') }}" class="arrowsdown-chevron-icon" >
                            </div>
                        </div>
                        <div class="input2">
                            <div class="text-area">
                                <div class="text-icon">
                                    <div class="div">55 547 889 85</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-upload">
                    <b class="label4">Adjuntar CV</b>
                    <div class="upload-zone">
                        <div class="content-contacto">
                            <div class="icon-frame">
                                <img src="{{ asset('images/logo/Upload.svg') }}" class="cloud-and-webupload" >
                            </div>
                            <div class="text-and-supporting-text">
                                <div class="action">
                                    <div class="text-contacto">Arrastra o</div>
                                    <div class="text1-contacto">selecciona un archivo</div>
                                </div>
                                <div class="supporting-text">Archivos permitidos: PDF | Peso máximo: 5 MB</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-input4">
                    <div class="text-input5">
                        <div class="info2">
                            <div class="label">Mensaje</div>
                        </div>

                    </div>
                </div>
                <div class="checkbox">
                    <div class="checkboxes-base">
                        <div class="state-layer">
                            <img src="{{ asset('images/logo/checkboxes_base.png') }}" class="arrowsdown-chevron-icon" >
                        </div>
                    </div>
                    <div class="label">Aceptar términos y condiciones y aviso de privacidad.</div>
                </div>
            </div>
            <div class="button-contacto">
                <b class="label4">Iniciar proceso</b>
            </div>
        </div>
    </div>
</section>
<!-- Termina la seccion de contacto -->

<!-- Inicia la seccion de footer -->
<div class="footerv2">
    <img src="{{ asset('images/logo/Vector_1.png') }}" class="divider-icon-footer" >
    <div class="contents-footer">
        <div class="column-footer">
            <b class="consolida-capital">Consolida Capital Â®</b>
            <div class="todos-los-derechos">©2024 Todos los derechos reservados</div>
        </div>
        <div class="site-map">
            <b class="redes-sociales">Redes sociales</b>
            <div class="button-header-footer">
                <div class="consolida-capital">LinkedIn</div>
            </div>
            <div class="button-header-footer">
                <div class="consolida-capital">Instagram</div>
            </div>
            <div class="button-header-footer">
                <div class="consolida-capital">Facebook</div>
            </div>
        </div>
        <div class="site-map1">
            <b class="legales">Legales</b>
            <div class="button-header3">
                <div class="consolida-capital">Términos y Condiciones </div>
            </div>
            <div class="button-header4">
                <div class="consolida-capital">Aviso de Privacidad</div>
            </div>

            <img src="{{ asset('images/logo/Logos.png') }}" class="logos-icon-footer" >
        </div>
    </div>
</div>

<!-- Termina la seccion de footer -->


@push('scripts')
<script src="{{ url('http://127.0.0.1:8000/js/admin/auth/validation.js') }}"></script>
<script src="{{ url('http://127.0.0.1:8000/js/admin/auth/login.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endpush