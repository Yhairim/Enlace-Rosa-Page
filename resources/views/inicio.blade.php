@extends('layouts.app')

@section('title', 'Inicio - Enlace Rosa')

@section('content')

    {{-- ── HERO ─────────────────────────────────────────────── --}}
    <section class="home-hero">
        <div class="home-hero-inner">

            {{-- Logo / título del proyecto --}}
            <div class="home-logo-block">
                <div class="home-logo-text">
                    <span class="home-logo-title">ENLACE ROSA</span>
                    {{-- Reemplaza src con la ruta real de tu flor --}}
                    <img src="{{ asset('images/flor.png') }}" alt="" class="home-logo-flor" aria-hidden="true">
                </div>
                <p class="home-logo-sub">Un entorno tecnológico para la valoración de cáncer de mama</p>
            </div>

            {{-- Acciones --}}
            <div class="hero-actions home-hero-actions">
                <a class="button-primary" href="{{ route('clinica') }}">Ver información clínica</a>
                <a class="button-secondary" href="{{ route('computacional') }}">Explorar investigación</a>
            </div>

        </div>
    </section>

    {{-- ── PROBLEMÁTICA ─────────────────────────────────────── --}}
    <section class="home-section home-problema">
        <div class="home-container">

            <div class="home-problema-grid">

                {{-- Texto --}}
                <div class="home-problema-text">
                    <span class="eyebrow">Problemática</span>
                    <h2 class="home-section-title">El cáncer de mama en México</h2>

                    <p>En México, el cáncer de mama <strong>(38%)</strong> es el cáncer con mayor incidencia entre todos los tipos de cáncer en mujeres. Se desarrolla debido a la aparición de un tumor maligno en las células de las glándulas mamarias, el cual puede invadir tejidos circundantes o propagarse a áreas distantes del cuerpo (metástasis).</p>

                    <p>En cuestión de mortalidad, el cáncer de mama ocupa el <strong>segundo lugar (17.2%)</strong> entre todos los tipos de cáncer en mujeres en México. El incremento durante las tres últimas décadas se debe a factores como el envejecimiento poblacional, la carencia de un programa nacional de detección oportuna y la insuficiencia de recursos para el tratamiento.</p>

                    <p>Este proyecto tiene el propósito de desarrollar un sistema para la interpretación automática de mamografías, basado en procesamiento digital de imágenes, inteligencia artificial y aprendizaje para máquinas, permitiendo detecciones tempranas en poblaciones apartadas.</p>

                    {{-- Referencias --}}
                    <div class="home-refs">
                        <p class="home-refs-label">Referencias</p>
                        <ul>
                            <li>"Cancer Today" Global Cancer Observatory, OMS, 2020.</li>
                            <li><a href="http://consensocancermamario.com/" target="_blank" rel="noopener">Folleto Consenso de Cáncer de Mama, México, 2021.</a></li>
                            <li>Guía médica de Cáncer de Mama, México, INCAN, 2015.</li>
                        </ul>
                    </div>
                </div>

                {{-- Imagen / gráfica --}}
                <figure class="home-problema-fig">
                    {{-- Reemplaza con tu imagen de prevalencia --}}
                    <div class="home-img-slot">
                        <img src="{{ asset('images/grafica_prevalencia.png') }}" alt="Gráfica de prevalencia de cáncer de mama en México">
                    </div>
                    <figcaption>Figura 1. Prevalencia de casos de cáncer de mama en México</figcaption>
                </figure>

            </div>
        </div>
    </section>

    {{-- ── CARRUSEL DE INFOGRAFÍAS ──────────────────────────── --}}
    <section class="home-section home-carousel-section">
        @include('components.carousel')
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

@endsection