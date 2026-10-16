@extends('layouts.app')

@section('title', 'Inicio - Enlace Rosa')

@section('content')

    {{-- ── HERO ─────────────────────────────────────────────── --}}
    <section class="home-hero">
        <div class="home-hero-inner">
            <div class="home-logo-block">
                <div class="home-logo-text">
                    <span class="home-logo-title" data-no-translate>ENLACE ROSA</span>
                    <img src="{{ asset('images/flor.png') }}" alt="" class="home-logo-flor" aria-hidden="true">
                </div>
                <p class="home-logo-sub" data-no-translate>Un entorno tecnológico para la valoración de cáncer de mama</p>
            </div>
            <div class="home-hero-actions">
                <a class="button-primary" href="{{ route('clinica') }}">Ver información clínica</a>
                <a class="button-secondary" href="{{ route('computacional') }}">Explorar investigación</a>
            </div>
        </div>
    </section>

    {{-- ── CARRUSEL GRANDE ──────────────────────────────────── --}}
    <section class="home-carousel-wrap" aria-label="Carrusel de infografías">
        <div class="home-carousel-shell" data-carousel>

            <article class="home-slide is-active">
                <img src="{{ asset('images/carousel/slide-1.png') }}" data-image-es="{{ asset('images/carousel/slide-1.png') }}" data-image-en="{{ asset('images/carousel/en/slide-1.png') }}" alt="Infografía 1 - Enlace Rosa">
            </article>
            <article class="home-slide">
                <img src="{{ asset('images/carousel/slide-2.jpg') }}" data-image-es="{{ asset('images/carousel/slide-2.jpg') }}" data-image-en="{{ asset('images/carousel/en/slide-2.jpg') }}" alt="Infografía 2 - Enlace Rosa">
            </article>
            <div class="home-carousel-controls">
                <button type="button" class="home-carousel-btn home-carousel-prev" aria-label="Imagen anterior">&#8249;</button>
                <div class="home-carousel-dots" aria-hidden="true">
                    <span class="active"></span>
                    <span></span>
                </div>
                <button type="button" class="home-carousel-btn home-carousel-next" aria-label="Imagen siguiente">&#8250;</button>
            </div>

        </div>
    </section>

    {{-- ── PROBLEMÁTICA ─────────────────────────────────────── --}}
    <section class="home-section home-problema">
        <div class="home-container">
            <div class="home-problema-grid">

                <div class="home-problema-text">
                    <span class="eyebrow">Problemática</span>
                    <h2 class="home-section-title">El cáncer de mama en México</h2>

                    <p>En México, el cáncer de mama <strong>(38%)</strong> es el cáncer con mayor incidencia entre todos los tipos de cáncer en mujeres. Se desarrolla debido a la aparición de un tumor maligno en las células de las glándulas mamarias, el cual puede invadir tejidos circundantes o propagarse a áreas distantes del cuerpo (metástasis).</p>

                    <p>En cuestión de mortalidad, el cáncer de mama ocupa el <strong>segundo lugar (17.2%)</strong> entre todos los tipos de cáncer en mujeres en México. El incremento durante las tres últimas décadas se debe a factores como el envejecimiento poblacional, la carencia de un programa nacional de detección oportuna y la insuficiencia de recursos para el tratamiento.</p>

                    <p>Este proyecto tiene el propósito de desarrollar un sistema para la interpretación automática de mamografías, basado en procesamiento digital de imágenes, inteligencia artificial y aprendizaje para máquinas, permitiendo detecciones tempranas en poblaciones apartadas.</p>

                    <div class="home-refs">
                        <p class="home-refs-label">Referencias</p>
                        <ul>
                            <li>"Cancer Today" Global Cancer Observatory, OMS, 2020.</li>
                            <li><a href="http://consensocancermamario.com/" target="_blank" rel="noopener">Folleto Consenso de Cáncer de Mama, México, 2021.</a></li>
                            <li>Guía médica de Cáncer de Mama, México, INCAN, 2015.</li>
                        </ul>
                    </div>
                </div>

                <figure class="home-problema-fig">
                    <div class="home-img-slot">
                        <img src="{{ asset('images/imagenInicioES.jpg') }}" data-image-es="{{ asset('images/imagenInicioES.jpg') }}" data-image-en="{{ asset('images/imagenInicioEN.png') }}" alt="Gráfica de prevalencia de cáncer de mama en México">
                    </div>
                    <figcaption>Figura 1. Prevalencia de casos de cáncer de mama en México</figcaption>
                </figure>

            </div>
        </div>
    </section>

    {{-- ── INSTITUCIONES ────────────────────────────────────── --}}
    <section class="home-section home-instituciones">
        <div class="home-container">
            <span class="eyebrow">Instituciones participantes</span>
            <div class="home-inst-grid">

                <a href="https://sedeco.slp.gob.mx/copocyt/" target="_blank" rel="noopener" class="home-inst-item">
                    <img src="{{ asset('images/copo_logo.png') }}" alt="COPOCYT"> 
                </a>

                <a href="http://www.uaslp.mx/" target="_blank" rel="noopener" class="home-inst-item">
                    <img src="{{ asset('images/logo_uaslp.png') }}" alt="UASLP"> 
                </a>

                <a href="http://www.ingenieria.uaslp.mx/" target="_blank" rel="noopener" class="home-inst-item">
                    <img src="{{ asset('images/logo_inge.png') }}" alt="Facultad de Ingeniería UASLP"> 
                </a>

                <a href="https://hospitalcentral.gob.mx/" target="_blank" rel="noopener" class="home-inst-item">
                    <img src="{{ asset('images/Logo_HRAE_HORIZONTAL.png') }}" alt="Hospital Regional de Alta Especialidad"> 
                </a>

            </div>
        </div>
    </section>

    {{-- ── Script carrusel ─────────────────────────────────── --}}
    <script>
        document.querySelectorAll('[data-carousel]').forEach((carousel) => {
            const slides  = [...carousel.querySelectorAll('.home-slide')];
            const dots    = [...carousel.querySelectorAll('.home-carousel-dots span')];
            const prevBtn = carousel.querySelector('.home-carousel-prev');
            const nextBtn = carousel.querySelector('.home-carousel-next');
            const delay   = 5500;
            const auto    = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            let current   = 0;

            const show = (i) => {
                current = (i + slides.length) % slides.length;
                slides.forEach((s, idx) => s.classList.toggle('is-active', idx === current));
                dots.forEach((d, idx)   => d.classList.toggle('active',    idx === current));
            };

            prevBtn.addEventListener('click', () => show(current - 1));
            nextBtn.addEventListener('click', () => show(current + 1));
            if (auto && slides.length > 1) setInterval(() => show(current + 1), delay);
        });
    </script>

@endsection
