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
        <a href="http://www.incan.salud.gob.mx/" target="_blank" rel="noopener">
            <strong>Instituto Nacional de Cancerología</strong>
            <span>Centro de referencia nacional para diagnóstico, tratamiento e investigación oncológica en México.</span>
        </a>
        <a href="https://www.elsevier.es/es-revista-gaceta-mexicana-oncologia-305" target="_blank" rel="noopener">
            <strong>Gaceta Mexicana de Oncología</strong>
            <span>Revista científica especializada en oncología clínica y avances en el tratamiento del cáncer.</span>
        </a>
        <a href="https://www.cancer.gov/espanol" target="_blank" rel="noopener">
            <strong>Instituto Nacional del Cáncer</strong>
            <span>Organismo líder en investigación oncológica de Estados Unidos con recursos en español.</span>
        </a>
        <a href="https://gco.iarc.fr/en" target="_blank" rel="noopener">
            <strong>Observatorio de Cáncer, WHO</strong>
            <span>Base de datos global de la OMS con estadísticas e incidencia del cáncer por país y región.</span>
        </a>
    </section>
@endsection
