@extends('layouts.app')

@section('title', 'Investigación Computacional - Enlace Rosa')

@section('content')
    <section class="page-hero compact">
        <span class="eyebrow">Investigación Computacional</span>
        <h2>Tecnología aplicada al análisis de información clínica</h2>
        <p>
            Enlace Rosa integra métodos computacionales para organizar, interpretar y visualizar información
            que puede apoyar procesos de investigación y valoración.
        </p>
    </section>

    <section class="content-section">
        <div class="card-grid">
            <article class="feature-card">
                <span>Datos</span>
                <h4>Estructuración</h4>
                <p>Organización de variables clínicas y antecedentes para facilitar su consulta.</p>
            </article>
            <article class="feature-card">
                <span>Modelos</span>
                <h4>Análisis</h4>
                <p>Exploración de patrones mediante técnicas computacionales y estadísticas.</p>
            </article>
            <article class="feature-card">
                <span>Visualización</span>
                <h4>Comunicación</h4>
                <p>Presentación de resultados de forma clara, accesible y orientada a la toma de decisiones.</p>
            </article>
        </div>
    </section>
@endsection
