    <!-- Projects Section -->
    <section class="projects section" id="projects">
        <h2 class="section-title">Proyectos</h2>
        <div class="container">
            <!-- Project Filters -->
            <div class="project-filters">
                <span class="project-item active-project" data-filter="all">Todos</span>
                <span class="project-item" data-filter=".backend">Backend</span>
                <span class="project-item" data-filter=".frontend">Frontend</span>
            </div>

            <div class="projects-container grid">
                <!-- Project 1 -->
                <div class="project-card mix frontend">
                    <div class="project-img-box">
                        <!-- Generate placeholders later, using simple div for now -->
                        <div class="project-img-placeholder"
                            style="background: #1e293b; height: 180px; display:flex; align-items:center; justify-content:center; color: #64748b;">
                            <i class="fa-solid fa-image fa-3x"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">E-commerce UI</h3>
                        <p class="project-desc">Diseño de interfaz moderna para tienda online.</p>
                        <a href="#" class="project-button">
                            Demo <i class="fa-solid fa-arrow-right project-btn-icon"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card mix backend">
                    <div class="project-img-box">
                        <div class="project-img-placeholder"
                            style="background: #1e293b; height: 180px; display:flex; align-items:center; justify-content:center; color: #64748b;">
                            <i class="fa-solid fa-server fa-3x"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">API RESTful</h3>
                        <p class="project-desc">API segura para gestión de usuarios y autenticación.</p>
                        <a href="#" class="project-button">
                            Github <i class="fa-brands fa-github project-btn-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
