<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm px-4">
    <div class="container-fluid">

        <!-- Logo / Nome -->
        <a class="navbar-brand fw-bold text-dark" href="#">
            <span class="text-danger">MAGRAO</span> MOTOS
        </a>

        <!-- Botão Mobile -->
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarDashboard"
            aria-controls="navbarDashboard"
            aria-expanded="false"
            aria-label="Abrir menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo da Navbar -->
        <div class="collapse navbar-collapse" id="navbarDashboard">

            <!-- Links -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="#">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Motos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Vendas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Estoque
                    </a>
                </li>

            </ul>

            <!-- Área do usuário -->
            <div class="d-flex align-items-center gap-3">

                <!-- Notificações -->
                <button 
                    class="btn btn-light rounded-circle position-relative"
                    type="button"
                >
                    🔔
                    <span class="position-absolute top-0 start-100 translate-middle 
                                 badge rounded-pill bg-danger">
                        3
                    </span>
                </button>

                <!-- Usuário -->
                <div class="d-flex align-items-center gap-2">

                    <div 
                        class="rounded-circle bg-danger text-white d-flex 
                               align-items-center justify-content-center"
                        style="width: 40px; height: 40px;"
                    >
                        M
                    </div>

                    <div class="d-none d-md-block">
                        <div class="fw-semibold">Administrador</div>
                        <small class="text-muted">Admin</small>
                    </div>

                </div>

            </div>

        </div>
    </div>
</nav>