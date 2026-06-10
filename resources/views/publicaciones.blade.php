@extends('layouts.app')

@section('title', 'Publicaciones - Enlace Rosa')

@section('content')
    <section class="page-hero compact">
        <span class="eyebrow">Publicaciones</span>
        <h2>Producción académica y materiales del proyecto</h2>
        <p>
            Consulta reportes, avances, documentos de apoyo y referencias generadas alrededor de Enlace Rosa.
        </p>
    </section>

    <section class="content-section publication-list">
        <article>
            <span>Material de apoyo</span>
            <h3>Guías informativas para prevención</h3>
            <p>Recursos preparados para fortalecer la comunicación de conceptos clínicos esenciales.</p>
        </article>
        <article>
            <span>Investigación</span>
            <h3>Avances computacionales</h3>
            <p>Documentación de métodos, análisis y resultados conforme evolucione el proyecto.</p>
        </article>
        <article>
            <span>Divulgación</span>
            <h3>Presentaciones y reportes</h3>
            <p>Materiales para compartir el alcance de Enlace Rosa con comunidades académicas y de salud.</p>
        </article>
    </section>
@endsection
