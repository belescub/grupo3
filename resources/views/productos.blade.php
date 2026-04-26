@extends('plantilla')
@section('contenido')

<div class=container py-5>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/5-STAR-SKZ.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Cd 5-STAR-SKZ</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/Arirang-BTS.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Arirang-BTS</h5>
                <p class="product-price mb-1">$30000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/BDO-Enhypen.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">BORDER: Day One - Enhypen</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/BE-BTS.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">BE-BTS</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/blackpink-the-album.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">The Album - Blackpink</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="#" class="catalog-cart-icon">
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
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Pop/After Hours-TW.jpg') }}" class="card-img-fluid catalog-img" alt="producto 1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">After Hours - The weeknd</h5>
                <p class="product-price mb-1">$17000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Pop/Happier Than Ever.jpg') }}" class="card-img-fluid catalog-img" alt="producto 2">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Happier Than Ever - Billie Eilish</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="#" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    

@endsection

