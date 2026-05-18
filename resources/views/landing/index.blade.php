<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MACROBYTE | Soluciones Tecnológicas</title>

    @include('landing.includes.styles')
</head>

<body>

    <div class="bg-grid"></div>
    <div class="bg-glow"></div>

    <nav class="navbar">
        <div class="logo-container">
            <img src="{{ asset('images/Recurso8.png') }}" alt="Logo Macrobyte">
            <h2>MACROBYTE</h2>
        </div>

        <div class="nav-controls">
            <a href="{{ route('login') }}" class="nav-btn">
                Iniciar Sesión
            </a>
            
            <button class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="nav-content" id="navContent">
            <div class="nav-links">
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
            </div>
        </div>
    </nav>

    <section class="hero" id="inicio">
        <div class="hero-container">
            <div class="hero-content reveal">
                <div class="hero-badge">
                    <i class="fa-solid fa-microchip"></i>
                    Tecnología • Desarrollo • Innovación
                </div>

                <h1 class="hero-title">
                    Soluciones <span>Digitales</span> Inteligentes
                </h1>

                <p class="hero-description">
                    En MACROBYTE desarrollamos soluciones web modernas, plataformas empresariales, sistemas de gestión, automatización y herramientas digitales enfocadas en escalabilidad, rendimiento y seguridad.
                </p>

                <div class="hero-actions">
                    <a href="#contacto" class="btn-primary">Contactar</a>
                    <a href="#nosotros" class="btn-secondary">Conocer Más</a>
                </div>
            </div>

            <div class="hero-card reveal" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px; padding: 40px; text-align: center;">
                <img src="{{ asset('images/Recurso8.png') }}" alt="Logo Macrobyte" style="width: 200px; height: auto; margin-bottom: 30px; filter: drop-shadow(0 10px 20px rgba(0, 210, 255, 0.2));">
                <div class="status-box" style="display: flex; justify-content: space-around; border-top: 1px solid rgba(255, 255, 255, 0.1); pt-4; margin-top: 20px;">
                    <div class="status-item" style="padding: 15px;">
                        <h4 style="color: #00d2ff; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px;">Especialidad</h4>
                        <p style="color: #ffffff; font-weight: 600; margin: 0;">Software Empresarial</p>
                    </div>
                    <div class="status-item" style="padding: 15px;">
                        <h4 style="color: #00d2ff; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px;">Ubicación</h4>
                        <p style="color: #ffffff; font-weight: 600; margin: 0;">Tarija, Bolivia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="about-section">
        <div class="container">
            <div class="about-header reveal">
                <span class="about-tag">Trayectoria y Valores</span>
                <h2 class="about-title">Sobre Nosotros</h2>
                <div class="about-line"></div>
            </div>

            <div class="mision-vision-container">
                <div class="about-card reveal">
                    <div class="about-icon">
                        <i class="fa-solid fa-bullseye icon-animate-pulse"></i>
                    </div>
                    <h3>Misión</h3>
                    <p>MACROBYTE encapsula un compromiso profundo con la innovación tecnológica, el desarrollo de soluciones de software personalizadas y vanguardistas. A través de la excelencia tecnológica y un equipo altamente cualificado, nos esforzamos por ser líderes en la creación de oportunidades de desarrollo sustentable para nuestro país.</p>
                </div>

                <div class="about-card reveal">
                    <div class="about-icon">
                        <i class="fa-solid fa-eye icon-animate-float"></i>
                    </div>
                    <h3>Visión</h3>
                    <p>Buscamos ser líderes en el desarrollo de software innovador con un enfoque en la calidad excepcional y la adaptación ágil a las tecnologías emergentes. Nos comprometemos a superar las expectativas de diferentes tipos de negocios, desde microempresas hasta grandes corporaciones, fomentando un futuro donde la tecnología genere oportunidades globales.</p>
                </div>
            </div>

            <div class="about-bottom-grid">
                <div class="about-bottom-card dark-card">
                    <div>
                        <p>Desarrollamos soluciones web modernas, plataformas empresariales y sistemas de gestión enfocados en escalabilidad y seguridad total.</p>
                        <a href="#proyectos" class="about-btn">Conocé Nuestras Soluciones</a>
                    </div>
                </div>

                <div class="about-bottom-card blue-card">
                    <i class="fa-solid fa-earth-americas"></i>
                    <h3>Proyección Internacional</h3>
                    <p>Impacto real en empresas de <strong>Chile, Argentina</strong> y diversos sectores en <strong>Bolivia</strong>.</p>
                </div>

                <div class="about-bottom-card cyan-card">
                    <i class="fa-solid fa-users-gear"></i>
                    <h3>Más de 10 Especialistas</h3>
                    <p>Impulsando el éxito de nuestros socios comerciales.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" style="padding: 100px 0; background-color: #050a12; color: #ffffff;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="section-header reveal" style="text-align: center; margin-bottom: 60px;">
                <span class="section-tag" style="color: #00d2ff; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; font-size: 0.9rem; display: block; margin-bottom: 10px;">PORTAFOLIO DE SOLUCIONES</span>
                <h2 class="section-title" style="font-size: 3rem; font-weight: 800; margin: 0;">Productos Independientes</h2>
                <div style="width: 60px; height: 4px; background: #00d2ff; margin: 20px auto 0;"></div>
            </div>

            <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; transition: 0.3s; text-align: center; border-left: 4px solid #00d2ff;">
                    <div class="project-icon" style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fas fa-taxi"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">Plataforma de Movilidad</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Sistema integral para servicios de transporte y taxis, con gestión de flotas, monitoreo en tiempo real y despacho eficiente.</p>
                </div>

                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; transition: 0.3s; text-align: center;">
                    <div class="project-icon" style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fas fa-utensils"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">Gestión Gastronómica</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Digitalización de pedidos, administración de mesas y control operativo total para restaurantes y negocios de comida.</p>
                </div>

                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; transition: 0.3s; text-align: center;">
                    <div class="project-icon" style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fas fa-university"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">Sistemas Académicos</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Plataforma para colegios e institutos enfocada en el control de alumnos, asistencia y procesos académicos modernos.</p>
                </div>

                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; transition: 0.3s; text-align: center; border: 1px solid rgba(0, 210, 255, 0.4);">
                    <div class="project-icon" style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fab fa-whatsapp"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">WhatsApp Business + IA</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Automatización avanzada con inteligencia artificial para flujos de atención y ventas directamente en WhatsApp.</p>
                </div>

                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; transition: 0.3s; text-align: center;">
                    <div class="project-icon" style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fas fa-brain"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">IA para Empresas</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Implementación de modelos de IA personalizados para optimizar procesos internos y toma de decisiones corporativas.</p>
                </div>

                <div class="project-card reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px; text-align: center; border-bottom: 3px solid #00d2ff;">
                    <div style="font-size: 3.5rem; color: #00d2ff; margin-bottom: 25px;"><i class="fas fa-laptop-code"></i></div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; font-weight: 700;">Webs Profesionales</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; font-size: 1rem;">Diseño y desarrollo de sitios corporativos de alta velocidad, optimizados para SEO y conversión de clientes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-section">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">EMPRESAS Y COLABORACIONES</span>
                <h2 class="section-title">Empresas que Confían en Nosotros</h2>
                <p class="section-description">Soluciones implementadas para empresas, instituciones y marcas que apostaron por la transformación digital.</p>
            </div>

            <div class="clients-slider">
                <div class="clients-track">
                    <a href="https://iquimica.cl" target="_blank" class="client-card"><img src="{{ asset('images/iq.png') }}" alt="iQuimica"></a>
                    <a href="https://isbast.com" target="_blank" class="client-card"><img src="{{ asset('images/isbast.png') }}" alt="Isbast"></a>
                    <a href="https://adonay.macrobyte.cloud/" target="_blank" class="client-card"><img src="{{ asset('images/adonay.png') }}" alt="adonay"></a>
                    <a href="https://delight-nutrifood.com/inicio" target="_blank" class="client-card"><img src="{{ asset('images/delight.png') }}" alt="delight"></a>
                    <a href="https://floap.es/" target="_blank" class="client-card"><img src="{{ asset('images/floap.png') }}" alt="Floap"></a>
                    <a href="https://crawlerconsultora.macrobyte.cloud/" target="_blank" class="client-card"><img src="{{ asset('images/crawler.png') }}" alt="Crawler Consultora"></a>
                    <a href="https://parachok.com/" target="_blank" class="client-card"><img src="{{ asset('images/parachok.png') }}" alt="Parachok"></a>
                    <a href="https://15deabril.macrobyte.site/" target="_blank" class="client-card"><img src="{{ asset('images/15deabril.png') }}" alt="Empresa 4"></a>
                    <a href="https://iquimica.cl" target="_blank" class="client-card"><img src="{{ asset('images/iq.png') }}" alt="iQuimica"></a>
                    <a href="https://isbast.com" target="_blank" class="client-card"><img src="{{ asset('images/isbast.png') }}" alt="Isbast"></a>
                    <a href="https://adonay.macrobyte.cloud/" target="_blank" class="client-card"><img src="{{ asset('images/adonay.png') }}" alt="adonay"></a>
                    <a href="https://delight-nutrifood.com/inicio" target="_blank" class="client-card"><img src="{{ asset('images/delight.png') }}" alt="delight"></a>
                    <a href="https://floap.es/" target="_blank" class="client-card"><img src="{{ asset('images/floap.png') }}" alt="Floap"></a>
                    <a href="https://crawlerconsultora.macrobyte.cloud/" target="_blank" class="client-card"><img src="{{ asset('images/crawler.png') }}" alt="Crawler Consultora"></a>
                    <a href="https://parachok.com/" target="_blank" class="client-card"><img src="{{ asset('images/parachok.png') }}" alt="Parachok"></a>
                    <a href="https://15deabril.macrobyte.site/" target="_blank" class="client-card"><img src="{{ asset('images/15deabril.png') }}" alt="Empresa 4"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="contact-box reveal">
                <h2 class="contact-title">Hablemos de tu Proyecto</h2>
                <p class="contact-email">contacto@macrobyte.site</p>
                <p class="contact-location">Tarija, Bolivia</p>

                <div class="socials">
                    <a href="https://wa.me/59160268333" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/macrobyte.tja?locale=es_LA" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/macrobyte.tja/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/macrobyte-tja/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="whatsapp-container">
        <div class="whatsapp-menu">
            <a href="https://wa.me/59160268333?text=Hola,%20me%20gustaría%20solicitar%20una%20cotización." class="menu-item sales" target="_blank">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Cotizaciones</span>
            </a>
            <a href="https://wa.me/59175140175?text=Hola,%20necesito%20soporte%20técnico." class="menu-item support" target="_blank">
                <i class="fas fa-headset"></i>
                <span>Soporte Técnico</span>
            </a>
        </div>
        <div class="whatsapp-main-button">
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>

    @include('landing.includes.scripts')
</body>

</html>