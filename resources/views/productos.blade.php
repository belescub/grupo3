@extends('plantilla')
@section('contenido')

<div class=container py-5>
   <h2 class="text-uppercase mb-4" style="font-family: 'Bebas Neue'; color: #77c040; letter-spacing: 2px;">
    @if($categoria == 'todos')
        Todos los Productos
    @else
        {{ $categoria }}
    @endif
    </h2>
    <div class="row catalogo-row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

    @if($categoria == 'todos' || $categoria == 'cds')
    
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/5-STAR-SKZ.jpg') }}" class="card-img-fluid catalog-img" alt="cd star-skz">
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
            <img src="{{ asset('assets/img/K-Pop/Arirang-BTS.jpg') }}" class="card-img-fluid catalog-img" alt="cd arirang-bts">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Arirang-BTS</h5>
                <p class="product-price mb-1">$30000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/BDO-Enhypen.jpg') }}" class="card-img-fluid catalog-img" alt="cd border-day-one-enhypen">
            <div class="catalog-info mt-2">
                <h5 class="card-title">BORDER: Day One - Enhypen</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/BE-BTS.jpg') }}" class="card-img-fluid catalog-img" alt="cd be-bts">
            <div class="catalog-info mt-2">
                <h5 class="card-title">BE-BTS</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/K-Pop/blackpink-the-album.jpg') }}" class="card-img-fluid catalog-img" alt="cd the-album-blackpink">
            <div class="catalog-info mt-2">
                <h5 class="card-title">The Album - Blackpink</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Pop/1989-Taylor.jpg') }}" class="card-img-fluid catalog-img" alt="cd 1989-taylor-swift">
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
            <img src="{{ asset('assets/img/Pop/After Hours-TW.jpg') }}" class="card-img-fluid catalog-img" alt="cd after-hours-the-weeknd">
            <div class="catalog-info mt-2">
                <h5 class="card-title">After Hours - The weeknd</h5>
                <p class="product-price mb-1">$17000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Pop/Happier Than Ever.jpg') }}" class="card-img-fluid catalog-img" alt="cd happier-than-ever-billie-eilish">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Happier Than Ever - Billie Eilish</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    @endif

    @if($categoria == 'todos' || $categoria == 'vinilos')
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Abbey Road - The Beatles.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo abbey-road-the-beatles">
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
            <img src="{{ asset('assets/img/Vinilos/Flower Boy - Tyler, The Creator.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo flower-boy-tyler-the-creator">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Flower Boy - Tyler, The Creator</h5>
                <p class="product-price mb-1">$40000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Harrys House - Harry Styles.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo harrys-house-harry-styles">
            <div class="catalog-info mt-2">
                <h5 class="card-title"> Harry's House - Harry Styles</h5>
                <p class="product-price mb-1">$38000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
        <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/I Barely Know Her - Sombr.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo i-barely-know-her-sombr">
            <div class="catalog-info mt-2">
                <h5 class="card-title">I Barely Know Her - Sombr</h5>
                <p class="product-price mb-1">$20000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Mans Best Friend - Sabrina Carpenter.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo mans-best-friend-sabrina-carpenter">
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
            <img src="{{ asset('assets/img/Vinilos/Sheet Heart Attack - QUEEN.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo sheet-heart-attack-queen">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Sheet Heart Attack - QUEEN</h5>
                <p class="product-price mb-1">$50000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Rosie - Rosé.png') }}" class="card-img-fluid catalog-img" alt="vinilo rosie-rose">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Rosie - Rosé</h5>
                <p class="product-price mb-1">$17000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Songs About Jane - Maroon 5.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo songs-about-jane-maroon-5">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Songs About Jane - Maroon 5</h5>
                <p class="product-price mb-1">$25000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Vinilos/Hit me hard and soft -  Billie Eilish.jpg') }}" class="card-img-fluid catalog-img" alt="vinilo hit-me-hard-and-soft-billie-eilish">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Hit me hard and soft - Billie Eilish</h5>
                <p class="product-price mb-1">$45000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    @endif
    @if($categoria == 'reproductores' || $categoria == 'todos')
        <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Kickback Retradisc.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor kickback-rettradisc">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Kickback Retradisc + Auriculares</h5>
                <p class="product-price mb-1">$68000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Mp4-Mp4.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor mp4-mp4">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Reproductor Mp4</h5>
                <p class="product-price mb-1">$23000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Tocadiscos-Celeste.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor tocadiscos-celeste">
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
            <img src="{{ asset('assets/img/Reproductores/Reproductor de Cds estilo retro.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor reproductor-de-cds-estilo-retro">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Reproductor de Cds estilo retro</h5>
                <p class="product-price mb-1">$55000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

        <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Tocadiscos-Rosita.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor tocadiscos-rosado-patel">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Tocadiscos Rosado Patel</h5>
                <p class="product-price mb-1">$125000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/Reproductores/Reproductor de Cds Portatil.jpg') }}" class="card-img-fluid catalog-img" alt="reproductor reproductor-de-cds-portatil">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Reproductor de Cds portatil</h5>
                <p class="product-price mb-1">$45000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
    @endif

@if($categoria == 'accesorios' || $categoria == 'todos')
    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Auricular-Negro.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio auricular-negro">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Auricular Negro</h5>
                <p class="product-price mb-1">$60000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Auriculares-Inalambrico-Rosa.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio auriculares-inalambricos-rosa">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Auriculares Inalambricos Rosa</h5>
                <p class="product-price mb-1">$55000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Kit de Limpieza de Vinilos 4 en 1.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio kit-de-limpieza-de-vinilos-4-en-1">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Kit de Limpieza de Vinilos 4 en 1</h5>
                <p class="product-price mb-1">$30000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>
        <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Kit de limpieza vinilo Collector Protector.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio kit-de-limpieza-de-vinilos-collector-protector">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Kit de Limpieza de Vinilos Collector Protector</h5>
                <p class="product-price mb-1">$80000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Parlante-chiquito.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio parlante-violeta-chico">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Parlante Violeta Chico</h5>
                <p class="product-price mb-1">$75000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Parlante-Grande.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio parlante-negro-grande">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Parlante Negro Grande</h5>
                <p class="product-price mb-1">$350000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
            </div>
        </div>
    </div>

        <div class="col">
        <div class="catalog-item">
            <img src="{{ asset('assets/img/accesorios/Parlante-mediano.jpg') }}" class="card-img-fluid catalog-img" alt="accesorio parlante-rosa-mediano">
            <div class="catalog-info mt-2">
                <h5 class="card-title">Parlante Rosa</h5>
                <p class="product-price mb-1">$150000</p>
                <a href="/carrito" class="catalog-cart-icon">
                <i class="bi bi-cart-dash-fill"></i>
                </a>
             </div>
            </div>
        </div>
            @endif

    </div>
</div>
@endsection