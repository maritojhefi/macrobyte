<link rel="shortcut icon" href="{{ asset('april/distri/images/Recurso8.png') }}" />
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
        --shadow: 0 10px 30px rgba(0, 0, 0, .35), 0 0 80px rgba(0, 144, 208, 0.08);
        --gradient: linear-gradient(135deg, #0090d0 0%, #4cc9ff 50%, #0056a3 100%);
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
        background: radial-gradient(circle at top left, rgba(0, 144, 208, .15), transparent 35%), radial-gradient(circle at bottom right, rgba(76, 201, 255, .12), transparent 35%), var(--dark);
        color: var(--text);
        overflow-x: hidden;
    }

    a {
        text-decoration: none;
    }

    /* BACKGROUND EFFECTS */
    .bg-grid {
        position: fixed;
        inset: 0;
        z-index: -2;
        background-image: linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px);
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

    /* NAVBAR */
    .navbar {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: calc(100% - 40px);
        max-width: 1400px;
        padding: 16px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(8,15,30,.75);
        backdrop-filter: blur(18px);
        border: 1px solid rgba(255,255,255,.06);
        border-radius: 22px;
        z-index: 999;
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: fit-content;
    }

    .logo-container img {
        width: 44px;
        height: 44px;
        object-fit: contain;
    }

    .logo-container h2 {
        color: var(--white);
        font-size: 1.2rem;
        font-weight: 900;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .nav-controls {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .nav-content {
        display: flex;
        align-items: center;
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
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 22px;
        border-radius: 14px;
        background: var(--gradient);
        color: white;
        font-weight: 800;
        white-space: nowrap;
        transition: .3s ease;
        box-shadow: 0 10px 30px rgba(0,144,208,.25);
    }

    .nav-btn:hover {
        transform: translateY(-3px);
    }

    .mobile-menu-btn {
        display: none;
        width: 46px;
        height: 46px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,.08);
        background: rgba(255,255,255,.04);
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        transition: .3s ease;
    }

    .mobile-menu-btn:hover {
        background: rgba(255,255,255,.08);
    }

    /* HERO */
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
        box-shadow: 0 15px 40px rgba(0,144,208,.25);
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

    /* HERO CARD */
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
        background: linear-gradient(135deg, rgba(255,255,255,.08), transparent 50%);
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

    /* SECTION */
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

    /* CARDS */
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
        box-shadow: 0 25px 60px rgba(0,0,0,.35), 0 0 50px rgba(0,144,208,.08);
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

    /* PROJECTS */
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

    /* CONTACT */
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

    /* NOSOTROS */
    .about-section {
        padding: 120px 0;
        background: #050a12;
        color: #ffffff;
    }

    .about-header {
        text-align: center;
        margin-bottom: 90px;
    }

    .about-tag {
        display: block;
        color: #00d2ff;
        font-size: .9rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .about-title {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .about-line {
        width: 70px;
        height: 4px;
        background: #00d2ff;
        margin: auto;
        border-radius: 20px;
    }

    .mision-vision-container {
        display: grid;
        grid-template-columns: repeat(2,1fr);
        gap: 60px;
        margin-bottom: 100px;
    }

    .about-card {
        background: rgba(255,255,255,.03);
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 28px;
        padding: 50px;
        text-align: center;
        backdrop-filter: blur(10px);
        transition: .35s ease;
    }

    .about-card:hover {
        transform: translateY(-8px);
        border-color: rgba(0,210,255,.35);
        box-shadow: 0 20px 40px rgba(0,0,0,.35), 0 0 30px rgba(0,210,255,.08);
    }

    .about-icon {
        margin-bottom: 25px;
    }

    .about-icon i {
        font-size: 4rem;
        color: #00d2ff;
        filter: drop-shadow(0 0 15px rgba(0,210,255,.4));
    }

    .about-card h3 {
        color: #00d2ff;
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 25px;
    }

    .about-card p {
        color: #cbd5e1;
        line-height: 1.9;
        font-size: 1.05rem;
        text-align: justify;
    }

    .about-bottom-grid {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0,0,0,.4);
    }

    .about-bottom-card {
        min-height: 420px;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .about-bottom-card i {
        font-size: 4rem;
        margin-bottom: 25px;
    }

    .dark-card {
        background: linear-gradient(135deg, #0f172a 0%, #020617 100%);
        align-items: flex-start;
        text-align: left;
    }

    .dark-card p {
        color: #cbd5e1;
        line-height: 1.8;
        font-size: 1.05rem;
        margin-bottom: 35px;
    }

    .about-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 28px;
        border-radius: 50px;
        border: 2px solid #ffffff;
        color: #ffffff;
        font-weight: 700;
        font-size: .85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: .3s ease;
    }

    .about-btn:hover {
        background: #ffffff;
        color: #050a12;
    }

    .blue-card {
        background: #1e3a8a;
    }

    .blue-card i {
        color: #60a5fa;
        filter: drop-shadow(0 0 15px rgba(96,165,250,.5));
    }

    .blue-card h3 {
        font-size: 1.8rem;
        font-weight: 800;
        margin-bottom: 18px;
    }

    .blue-card p {
        color: #bfdbfe;
        line-height: 1.7;
        max-width: 280px;
    }

    .cyan-card {
        background: #38bdf8;
        color: #0f172a;
    }

    .cyan-card h3 {
        font-size: 1.8rem;
        font-weight: 900;
        margin-bottom: 15px;
    }

    .cyan-card p {
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.7;
    }

    /* CLIENTS SECTION */
    .clients-section {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(180deg, rgba(5,10,18,1) 0%, rgba(7,15,30,1) 100%);
        overflow: hidden;
    }

    .clients-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px);
        background-size: 40px 40px;
        opacity: .5;
        pointer-events: none;
    }

    .clients-slider {
        width: 100%;
        overflow: hidden;
        position: relative;
        margin-top: 60px;
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .clients-track {
        display: flex;
        align-items: center;
        gap: 30px;
        width: max-content;
        animation: scrollClients 30s linear infinite;
    }

    .clients-slider:hover .clients-track {
        animation-play-state: paused;
    }

    .client-card {
        width: 240px;
        height: 130px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px;
        border-radius: 24px;
        background: rgba(255,255,255,.03);
        border: 1px solid rgba(255,255,255,.08);
        backdrop-filter: blur(10px);
        transition: .35s ease;
    }

    .client-card:hover {
        transform: translateY(-8px) scale(1.03);
        border-color: rgba(0,210,255,.4);
        box-shadow: 0 20px 40px rgba(0,0,0,.35), 0 0 25px rgba(0,210,255,.12);
    }

    .client-card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: grayscale(100%) brightness(.9);
        transition: .35s ease;
    }

    .client-card:hover img {
        filter: grayscale(0%) brightness(1);
    }

    /* ANIMATIONS */
    @keyframes scrollClients {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }

    /* ANIMACIONES EXTRAS */
    .icon-animate-pulse {
        animation: pulse-blue 2s infinite ease-in-out;
        display: inline-block;
    }

    @keyframes pulse-blue {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.8; }
        100% { transform: scale(1); opacity: 1; }
    }

    .icon-animate-float {
        animation: float 3s infinite ease-in-out;
        display: inline-block;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .reveal:hover i {
        filter: drop-shadow(0 0 20px rgba(0,210,255,0.6)) !important;
        transition: 0.3s;
    }

    /* FLOATING WHATSAPP */
    .whatsapp-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .whatsapp-main-button {
        background-color: #1e3a8a;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-size: 35px;
        box-shadow: 0 0 20px rgba(0, 210, 255, 0.4);
        cursor: pointer;
        border: 2px solid #00d2ff;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .whatsapp-menu {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 15px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }

    .menu-item {
        background-color: #0a192f;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 12px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        white-space: nowrap;
        border: 1px solid rgba(0, 210, 255, 0.3);
        transition: 0.3s;
    }

    .menu-item i {
        color: #00d2ff;
        font-size: 16px;
    }

    .menu-item:hover {
        background-color: #1e3a8a;
        border-color: #00d2ff;
        transform: translateX(-8px);
    }

    .whatsapp-container:hover .whatsapp-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .whatsapp-container:hover .whatsapp-main-button {
        transform: scale(1.1);
        background-color: #00d2ff;
        color: #050a12;
    }

    /* MEDIA QUERIES RESPONSIVE REUNIDOS */
    @media(max-width: 1200px) {
        .hero-container, .cards-grid, .projects-grid {
            grid-template-columns: 1fr;
        }
        .hero { text-align: center; }
        .hero-description { margin-inline: auto; }
        .hero-actions { justify-content: center; }
        .hero-title { font-size: 4.5rem; }
    }

    @media(max-width: 992px) {
        .navbar { width: calc(100% - 20px); padding: 14px 18px; }
        .mobile-menu-btn { display: flex; align-items: center; justify-content: center; }
        .nav-content {
            position: absolute; top: calc(100% + 10px); left: 0; width: 100%; display: none;
            flex-direction: column; padding: 25px; border-radius: 22px; background: rgba(8,15,30,.98);
            border: 1px solid rgba(255,255,255,.06); backdrop-filter: blur(20px);
        }
        .nav-content.active { display: flex; }
        .nav-links { width: 100%; flex-direction: column; gap: 25px; }
        .nav-links a { font-size: 1rem; }
        .mision-vision-container, .about-bottom-grid { grid-template-columns: 1fr; }
        .about-bottom-card { min-height: auto; }
    }

    @media(max-width: 768px) {
        section, .hero { padding: 120px 25px 80px; }
        .hero-title { font-size: 3.2rem; line-height: 1.05; }
        .section-title { font-size: 2.4rem; }
        .contact-title { font-size: 2.8rem; }
        .hero-card, .card, .project-card, .about-card { padding: 30px; }
        .hero-actions { flex-direction: column; }
        .btn-primary, .btn-secondary { width: 100%; text-align: center; }
        .logo-container h2 { font-size: 1rem; }
        .nav-btn { padding: 10px 16px; font-size: .85rem; }
        .mision-vision-container { grid-template-columns: 1fr !important; gap: 40px !important; margin-bottom: 50px !important; }
        .reveal { text-align: center !important; }
        .reveal p { text-align: center !important; font-size: 1rem !important; }
        .about-section { padding: 90px 0; }
        .about-title { font-size: 2.7rem; }
        .about-card p { text-align: center; }
        .about-bottom-card { padding: 40px 30px; }
        .dark-card { text-align: center; align-items: center; }
        .client-card { width: 190px; height: 110px; }
        .clients-track { gap: 20px; }
    }

    @media(max-width: 576px) {
        .about-title { font-size: 2.2rem; }
        .about-card h3 { font-size: 1.7rem; }
        .about-card p { font-size: .98rem; }
        .about-bottom-card i { font-size: 3.2rem; }
        .blue-card h3, .cyan-card h3 { font-size: 1.5rem; }
        .clients-section { padding: 80px 0; }
        .client-card { width: 160px; height: 95px; padding: 18px; }
    }
</style>