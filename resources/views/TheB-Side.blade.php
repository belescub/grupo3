@extends('plantilla')
@section('fullwidth')
<div class="TheB-Side">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen1.jpg') }}" alt="First slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen2.jpg') }}" alt="Second slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen3.jpg') }}" alt="Third slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
        </div> <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
@section('contenido')
<!--CARDS-->
<div class="container mt-5">
    <div class="row g-4">
         <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/img-4.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">CDS</h3>
                    <a href="/productos/cds" class="stretched-link"></a> 
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/img-5.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">VINILOS</h3>
                    <a href="/productos/vinilos" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/img-6.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">REPRODUCTORES</h3>
                    <a href="/productos/reproductores" class="stretched-link"></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--PRODUCTOS-->
<div class="container mt-5">
    <div class="row g-4">
        </div>
</div>
<div class="container my-5 pt-3"> 
    <div class="row catalogo-row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/5-STAR-SKZ.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">5-STAR-SKZ</h5>
                <p class="product-price mb-1">$30000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Pop/1989-Taylor.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">1989 - Taylor Swift</h5>
                <p class="product-price mb-1">$20000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Abbey Road - The Beatles.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Abbey Road - The Beatles</h5>
                <p class="product-price mb-1">$45000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Mans Best Friend - Sabrina Carpenter.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Man's Best Friend - Sabrina Carpenter</h5>
                <p class="product-price mb-1">$46000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
     <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Tocadiscos-Celeste.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Tocadiscos Celeste</h5>
                <p class="product-price mb-1">$125000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Reproductor de Cds Portatil.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Reproductor de Cds portatil</h5>
                <p class="product-price mb-1">$45000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Parlante-mediano.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Parlante Rosa</h5>
                <p class="product-price mb-1">$150000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Auriculares-Inalambrico-Rosa.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Auriculares Inalambricos Rosa</h5>
                <p class="product-price mb-1">$55000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
@endsection