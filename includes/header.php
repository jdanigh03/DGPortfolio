<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel | Desarrollador Full Stack</title>
    <meta name="description"
        content="Portafolio de desarrollo web Full Stack especializado en soluciones modernas y escalables.">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="#" class="logo">DG<span class="highlight">Portfolio</span>.</a>

            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">
                            <span class="lang-es">Inicio</span>
                            <span class="lang-en hidden">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            <span class="lang-es">Sobre Mí</span>
                            <span class="lang-en hidden">About Me</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link">
                            <span class="lang-es">Proyectos</span>
                            <span class="lang-en hidden">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">
                            <span class="lang-es">Contacto</span>
                            <span class="lang-en hidden">Contact</span>
                        </a>
                    </li>
                </ul>
                <div class="nav-close" id="nav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </nav>

            <div class="nav-extras" style="display: flex; align-items: center; gap: 1rem;">
                <!-- Language Switch -->
                <div class="language-switch">
                    <input type="checkbox" id="language-toggle" class="language-toggle">
                    <label for="language-toggle" class="language-label">
                        <span class="lang-code es">ES</span>
                        <span class="lang-code en">EN</span>
                        <span class="toggle-ball"></span>
                    </label>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
