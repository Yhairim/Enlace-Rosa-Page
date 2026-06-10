@extends('layouts.app')

@section('title', 'Sitios Relacionados - Enlace Rosa')

@section('content')
    <section class="page-hero compact">
        <span class="eyebrow">Sitios Relacionados</span>
        <h2>Recursos externos de consulta</h2>
        <p>
            Enlaces de referencia para ampliar información sobre salud, investigación y prevención del cáncer
            de mama.
        </p>
    </section>

    <section class="content-section links-grid">
        <a href="https://www.who.int/" target="_blank" rel="noopener">
            <strong>Organización Mundial de la Salud</strong>
            <span>Información internacional sobre salud pública.</span>
        </a>
        <a href="https://www.gob.mx/salud" target="_blank" rel="noopener">
            <strong>Secretaría de Salud</strong>
            <span>Recursos y comunicados oficiales de salud en México.</span>
        </a>
        <a href="https://www.uaslp.mx/" target="_blank" rel="noopener">
            <strong>Universidad Autónoma de San Luis Potosí</strong>
            <span>Institución vinculada al proyecto.</span>
        </a>
    </section>
@endsection
