@extends('layouts.app')

@section('title', 'Inicio - Enlace Rosa')

@section('content')
    <div class="home-main">
    <section class="hero-section">
        <div class="hero-copy">
            <span class="eyebrow">Investigación, prevención y acompañamiento</span>
            <h2>Enlace Rosa</h2>
            <p>
                Un entorno tecnológico para apoyar la valoración de cáncer de mama con información clara,
                herramientas de análisis y recursos pensados para la comunidad clínica y académica.
            </p>
            <div class="hero-actions">
                <a class="button-primary" href="{{ route('clinica') }}">Ver información clínica</a>
                <a class="button-secondary" href="{{ route('computacional') }}">Explorar investigación</a>
            </div>
        </div>
        <div class="hero-panel" aria-label="Resumen del proyecto Enlace Rosa">
            <div>
                <strong>6</strong>
                <span>secciones de consulta</span>
            </div>
            <div>
                <strong>Clínica</strong>
                <span>valoración e información preventiva</span>
            </div>
            <div>
                <strong>Datos</strong>
                <span>investigación computacional aplicada</span>
            </div>
        </div>
    </section>

    @include('components.carousel')

    <section class="content-section">
        <div class="section-heading">
            <span class="eyebrow">Ruta de navegación</span>
            <h3>Consulta el proyecto por áreas</h3>
            <p>Encuentra rápidamente los contenidos principales del sitio y el propósito de cada espacio.</p>
        </div>

        <div class="card-grid">
            <a class="feature-card" href="{{ route('clinica') }}">
                <span>01</span>
                <h4>Información Clínica</h4>
                <p>Conceptos base, factores de riesgo, señales de atención y enfoque preventivo.</p>
            </a>
            <a class="feature-card" href="{{ route('computacional') }}">
                <span>02</span>
                <h4>Investigación Computacional</h4>
                <p>Modelos, análisis de datos y métodos tecnológicos que respaldan el proyecto.</p>
            </a>
            <a class="feature-card" href="{{ route('publicaciones') }}">
                <span>03</span>
                <h4>Publicaciones</h4>
                <p>Producción académica, reportes y materiales derivados de Enlace Rosa.</p>
            </a>
        </div>
    </section>
    </div>
@endsection
