<!--navbar donde se encuentra logo, busqueda e inicios de sesion-->
<div class="container-fluid bg-white pt-3 pb-2 border-bottom position-relative" style="z-index: 1020;">
    <div class="row align-items-center px-4">
        <div class="col-md-4">
            <div class="search-container">
            <input type="text" class="search-input" placeholder="Buscar...">
            <button class="search-btn">
            <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
        <div class="col-md-4 text-center">
            <a href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="The B-Side Logo" width="200">
            </a>
        </div>

        <div class="col-md-4 text-end">
            <a href="#" class="text-decoration-none text-secondary small text-uppercase">Crear Cuenta</a>
            <span class="text-secondary mx-2">|</span>
            <a href="#" class="text-decoration-none text-secondary small text-uppercase">Iniciar Sesión</a>
        </div>
    </div>
</div>
<!--navbar movil donde está carrito de compra, productos(dropdown), inicio, etc-->
<nav class="navbar navbar-expand-lg bg-white py-2 sticky-top border-bottom shadow-sm">
    <div class="container d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-4">
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark nav-custom-link" href="#">Inicio</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-dark nav-custom-link" href="#" role="button" data-bs-toggle="dropdown">
                        Productos
                    </a>
                    <ul class="dropdown-menu rounded-0">
                        <li><a class="dropdown-item" href="#">CDs</a></li>
                        <li><a class="dropdown-item" href="#">Vinilos</a></li>
                        <li><a class="dropdown-item" href="#">Reproductores</a></li>
                        <li><a class="dropdown-item" href="#">Accesorios y Cuidados</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark nav-custom-link" href="#">Contacto</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2" /></svg>
                        <span class="fw-bold">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>