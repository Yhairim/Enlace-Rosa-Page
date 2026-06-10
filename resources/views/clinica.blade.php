@extends('layouts.app')

@section('title', 'Información Clínica - Enlace Rosa')

@section('content')
    <section class="page-hero compact">
        <span class="eyebrow">Información Clínica</span>
        <h2>Conocimiento claro para una valoración oportuna</h2>
        <p>
            Esta sección reúne información esencial sobre prevención, detección temprana y factores
            clínicos relacionados con el cáncer de mama.
        </p>
    </section>

    <section class="content-section two-column">
        <article class="info-block">
            <h3>Prevención y detección</h3>
            <p>
                La identificación de cambios físicos, antecedentes familiares y hábitos de cuidado permite
                orientar mejor la consulta médica y promover acciones preventivas.
            </p>
        </article>
        <article class="info-block">
            <h3>Valoración integral</h3>
            <p>
                El enfoque de Enlace Rosa busca complementar la información clínica con herramientas
                tecnológicas que faciliten el análisis y la organización de datos relevantes.
            </p>
        </article>
    </section>

    <section class="content-section">
        <div class="timeline-list">
            <div><strong>Autoexploración</strong><span>Observación regular de cambios visibles o palpables.</span></div>
            <div><strong>Consulta profesional</strong><span>Revisión médica ante signos persistentes o dudas.</span></div>
            <div><strong>Seguimiento</strong><span>Registro y control de hallazgos para apoyar decisiones clínicas.</span></div>
        </div>
    </section>
@endsection
