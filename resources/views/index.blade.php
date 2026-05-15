<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MACROBYTE | Soluciones Tecnológicas</title>

    <link rel="shortcut icon" href="{{asset('april/distri/images/logo.png')}}" />

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        :root {
            --primary: #0090d0;
            --primary-dark: #0056a3;
            --secondary: #4cc9ff;

            --dark: #050816;
            --dark-soft: #0b1120;
            --card: rgba(16, 23, 42, 0.7);

            --border: rgba(255, 255, 255, 0.08);

            --white: #ffffff;
            --text: #d4d4d8;
            --muted: #94a3b8;

            --shadow:
                0 10px 30px rgba(0, 0, 0, .35),
                0 0 80px rgba(0, 144, 208, 0.08);

            --gradient:
                linear-gradient(135deg,
                    #0090d0 0%,
                    #4cc9ff 50%,
                    #0056a3 100%);

            --radius: 28px;

            --font-family: 'Nunito Sans', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-family);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background:
                radial-gradient(circle at top left,
                    rgba(0, 144, 208, .15),
                    transparent 35%),
                radial-gradient(circle at bottom right,
                    rgba(76, 201, 255, .12),
                    transparent 35%),
                var(--dark);

            color: var(--text);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        /* ===================================================== */
        /* BACKGROUND EFFECTS */
        /* ===================================================== */

        .bg-grid {
            position: fixed;
            inset: 0;
            z-index: -2;

            background-image:
                linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px);

            background-size: 60px 60px;

            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }

        .bg-glow {
            position: fixed;
            width: 700px;
            height: 700px;
            border-radius: 50%;
            background: rgba(0, 144, 208, 0.15);
            filter: blur(120px);
            top: -250px;
            right: -200px;
            z-index: -1;
        }

        /* ===================================================== */
        /* NAVBAR */
        /* ===================================================== */

        .navbar {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 80px);
            max-width: 1400px;

            padding: 18px 28px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            backdrop-filter: blur(18px);

            background: rgba(8, 15, 30, 0.55);

            border: 1px solid rgba(255,255,255,.06);

            border-radius: 22px;

            z-index: 999;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo img {
            width: 48px;
            filter: brightness(0) invert(1);
        }

        .logo h2 {
            color: var(--white);
            font-size: 1.3rem;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            color: var(--muted);
            font-weight: 700;
            transition: .3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--white);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 0%;
            height: 2px;
            background: var(--primary);
            transition: .3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-btn {
            padding: 14px 24px;
            border-radius: 14px;
            background: var(--gradient);
            color: white;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(0,144,208,.25);
            transition: .3s ease;
        }

        .nav-btn:hover {
            transform: translateY(-3px);
        }

        /* ===================================================== */
        /* HERO */
        /* ===================================================== */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 160px 80px 100px;
        }

        .hero-container {
            width: 100%;
            max-width: 1400px;
            margin: auto;

            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 80px;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            padding: 12px 20px;

            border-radius: 999px;

            background: rgba(0, 144, 208, .1);

            border: 1px solid rgba(0, 144, 208, .25);

            color: var(--secondary);

            font-weight: 800;

            margin-bottom: 30px;
        }

        .hero-title {
            font-size: 6rem;
            line-height: .95;
            font-weight: 900;
            color: var(--white);
            margin-bottom: 30px;
        }

        .hero-title span {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            max-width: 700px;

            color: var(--muted);

            font-size: 1.2rem;

            line-height: 1.9;

            margin-bottom: 40px;
        }

        .hero-actions {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;

            padding: 18px 34px;

            border-radius: 18px;

            font-weight: 800;

            transition: .3s ease;

            box-shadow:
                0 15px 40px rgba(0,144,208,.25);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
        }

        .btn-secondary {
            border: 1px solid rgba(255,255,255,.1);

            color: white;

            padding: 18px 34px;

            border-radius: 18px;

            font-weight: 700;

            backdrop-filter: blur(10px);

            transition: .3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,.05);
        }

        /* ===================================================== */
        /* HERO CARD */
        /* ===================================================== */

        .hero-card {
            position: relative;

            background: rgba(15, 23, 42, .75);

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 36px;

            padding: 50px;

            backdrop-filter: blur(20px);

            overflow: hidden;

            box-shadow: var(--shadow);
        }

        .hero-card::before {
            content: '';

            position: absolute;
            inset: 0;

            background:
                linear-gradient(135deg,
                    rgba(255,255,255,.08),
                    transparent 50%);

            pointer-events: none;
        }

        .hero-card img {
            width: 100%;
            max-width: 300px;
            display: block;
            margin: auto;
            filter: brightness(0) invert(1);
        }

        .status-box {
            margin-top: 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding-top: 25px;

            border-top: 1px solid rgba(255,255,255,.08);
        }

        .status-item h4 {
            color: var(--secondary);
            font-size: .9rem;
            margin-bottom: 6px;
        }

        .status-item p {
            color: var(--white);
            font-weight: 800;
        }

        /* ===================================================== */
        /* SECTION */
        /* ===================================================== */

        section {
            padding: 120px 80px;
        }

        .container {
            max-width: 1300px;
            margin: auto;
        }

        .section-header {
            margin-bottom: 70px;
        }

        .section-tag {
            color: var(--secondary);
            font-weight: 800;
            margin-bottom: 15px;
            display: inline-block;
        }

        .section-title {
            font-size: 3.5rem;
            color: var(--white);
            margin-bottom: 20px;
        }

        .section-description {
            max-width: 700px;
            color: var(--muted);
            line-height: 1.9;
            font-size: 1.05rem;
        }

        /* ===================================================== */
        /* CARDS */
        /* ===================================================== */

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            position: relative;

            background: rgba(15, 23, 42, .65);

            border: 1px solid rgba(255,255,255,.06);

            border-radius: var(--radius);

            padding: 40px;

            backdrop-filter: blur(14px);

            transition: .35s ease;

            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: rgba(0,144,208,.35);

            box-shadow:
                0 25px 60px rgba(0,0,0,.35),
                0 0 50px rgba(0,144,208,.08);
        }

        .card-icon {
            width: 74px;
            height: 74px;

            border-radius: 22px;

            background: rgba(0, 144, 208, .1);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 2rem;

            color: var(--secondary);

            margin-bottom: 30px;
        }

        .card h3 {
            color: var(--white);
            font-size: 1.5rem;
            margin-bottom: 18px;
        }

        .card p {
            color: var(--muted);
            line-height: 1.9;
        }

        /* ===================================================== */
        /* PROJECTS */
        /* ===================================================== */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .project-card {
            background: rgba(15,23,42,.7);

            border-radius: 30px;

            padding: 40px;

            border: 1px solid rgba(255,255,255,.06);

            transition: .35s ease;

            position: relative;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0,144,208,.3);
        }

        .project-icon {
            font-size: 3rem;
            margin-bottom: 25px;
            color: var(--secondary);
        }

        .project-card h3 {
            color: var(--white);
            font-size: 1.7rem;
            margin-bottom: 15px;
        }

        .project-card p {
            color: var(--muted);
            line-height: 1.8;
        }

        /* ===================================================== */
        /* CONTACT */
        /* ===================================================== */

        .contact-box {
            text-align: center;

            background: rgba(15,23,42,.7);

            border-radius: 40px;

            padding: 80px 50px;

            border: 1px solid rgba(255,255,255,.06);

            backdrop-filter: blur(18px);

            position: relative;
            overflow: hidden;
        }

        .contact-box::before {
            content: '';

            position: absolute;
            width: 500px;
            height: 500px;

            background: rgba(0,144,208,.12);

            border-radius: 50%;

            filter: blur(120px);

            top: -250px;
            left: 50%;
            transform: translateX(-50%);
        }

        .contact-box>* {
            position: relative;
            z-index: 2;
        }

        .contact-title {
            font-size: 4rem;
            color: white;
            margin-bottom: 20px;
        }

        .contact-email {
            color: var(--secondary);
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .contact-location {
            color: var(--muted);
            margin-bottom: 40px;
        }

        .socials {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .socials a {
            width: 65px;
            height: 65px;

            border-radius: 22px;

            background: rgba(255,255,255,.05);

            border: 1px solid rgba(255,255,255,.08);

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 1.3rem;

            transition: .3s ease;
        }

        .socials a:hover {
            transform: translateY(-6px);
            background: rgba(0,144,208,.12);
            border-color: rgba(0,144,208,.4);
        }

        /* ===================================================== */
        /* RESPONSIVE */
        /* ===================================================== */

        @media(max-width:1200px) {

            .hero-container,
            .cards-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                text-align: center;
            }

            .hero-description {
                margin-inline: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .hero-title {
                font-size: 4.5rem;
            }
        }

        @media(max-width:768px) {

            section,
            .hero {
                padding: 120px 25px 80px;
            }

            .navbar {
                width: calc(100% - 20px);
                padding: 15px 20px;
            }

            .nav-links {
                display: none;
            }

            .hero-title {
                font-size: 3.3rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .contact-title {
                font-size: 2.8rem;
            }

            .hero-card,
            .card,
            .project-card {
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="bg-grid"></div>
    <div class="bg-glow"></div>

    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="logo">
            <img src="{{asset('april/distri/images/logo.png')}}">
            <h2>MACROBYTE</h2>
        </div>

        <div class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#servicios">Servicios</a>
            <a href="#proyectos">Proyectos</a>
            <a href="#contacto">Contacto</a>
        </div>

        <a href="{{route('login')}}" class="nav-btn">
            Iniciar Sesión
        </a>

    </nav>

    <!-- HERO -->

    <section class="hero" id="inicio">

        <div class="hero-container">

            <div class="hero-content reveal">

                <div class="hero-badge">
                    <i class="fa-solid fa-microchip"></i>
                    Tecnología • Desarrollo • Innovación
                </div>

                <h1 class="hero-title">
                    Soluciones
                    <span>Digitales</span>
                    Inteligentes
                </h1>

                <p class="hero-description">
                    En MACROBYTE desarrollamos soluciones web modernas,
                    plataformas empresariales, sistemas de gestión,
                    automatización y herramientas digitales enfocadas en
                    escalabilidad, rendimiento y seguridad.
                </p>

                <div class="hero-actions">

                    <a href="#contacto" class="btn-primary">
                        Contactar
                    </a>

                    <a href="#nosotros" class="btn-secondary">
                        Conocer Más
                    </a>

                </div>

            </div>

            <div class="hero-card reveal">

                <img src="{{asset('april/distri/images/logo.png')}}">

                <div class="status-box">

                    <div class="status-item">
                        <h4>Especialidad</h4>
                        <p>Software Empresarial</p>
                    </div>

                    <div class="status-item">
                        <h4>Ubicación</h4>
                        <p>Tarija, Bolivia</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- NOSOTROS -->

    <section id="nosotros">

        <div class="container">

            <div class="section-header reveal">

                <span class="section-tag">
                    SOBRE NOSOTROS
                </span>

                <h2 class="section-title">
                    Transformación Digital Empresarial
                </h2>

                <p class="section-description">
                    MACROBYTE es una empresa enfocada en el desarrollo
                    de soluciones tecnológicas modernas para empresas,
                    negocios y organizaciones que buscan optimizar
                    procesos, digitalizar operaciones y mejorar su
                    presencia digital.
                </p>

            </div>

            <div class="cards-grid">

                <div class="card reveal">

                    <div class="card-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3>Desarrollo Web</h3>

                    <p>
                        Construimos plataformas modernas, rápidas y
                        escalables utilizando tecnologías actuales
                        enfocadas en rendimiento y experiencia de usuario.
                    </p>

                </div>

                <div class="card reveal">

                    <div class="card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h3>Seguridad</h3>

                    <p>
                        Aplicamos buenas prácticas de seguridad,
                        protección de datos y control de accesos para
                        garantizar sistemas confiables y robustos.
                    </p>

                </div>

                <div class="card reveal">

                    <div class="card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <h3>Optimización</h3>

                    <p>
                        Automatizamos procesos y mejoramos flujos
                        operativos para incrementar productividad y
                        eficiencia empresarial.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- PROYECTOS -->

    <section id="proyectos">

        <div class="container">

            <div class="section-header reveal">

                <span class="section-tag">
                    PROYECTOS
                </span>

                <h2 class="section-title">
                    Productos Independientes
                </h2>

            </div>

            <div class="projects-grid">

                <div class="project-card reveal">

                    <div class="project-icon">
                        <i class="fas fa-utensils"></i>
                    </div>

                    <h3>Restonovo</h3>

                    <p>
                        Plataforma moderna para restaurantes enfocada
                        en digitalización de pedidos, administración y
                        control operativo.
                    </p>

                </div>

                <div class="project-card reveal">

                    <div class="project-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>

                    <h3>EduByte</h3>

                    <p>
                        Sistema educativo online diseñado para cursos,
                        contenido digital y formación moderna.
                    </p>

                </div>

                <div class="project-card reveal">

                    <div class="project-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>

                    <h3>EcoByte</h3>

                    <p>
                        Plataforma ecommerce preparada para ventas
                        online escalables y administración comercial.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- CONTACTO -->

    <section id="contacto">

        <div class="container">

            <div class="contact-box reveal">

                <h2 class="contact-title">
                    Hablemos de tu Proyecto
                </h2>

                <p class="contact-email">
                    contacto@macrobyte.site
                </p>

                <p class="contact-location">
                    Tarija, Bolivia
                </p>

                <div class="socials">

                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- FACEBOOK CHAT -->

    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>

        var chatbox = document.getElementById('fb-customer-chat');

        chatbox.setAttribute("page_id", "2109985345740506");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function (d, s, id) {

            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) return;

            js = d.createElement(s);

            js.id = id;

            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';

            fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));

    </script>

    <!-- ANIMATIONS -->

    <script>

        ScrollReveal().reveal('.reveal', {

            distance: '60px',

            duration: 1200,

            easing: 'cubic-bezier(.2,.8,.2,1)',

            interval: 150,

            opacity: 0,

            origin: 'bottom',

            reset: false

        });

    </script>

</body>

</html>