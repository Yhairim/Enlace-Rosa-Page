@extends('layouts.app')

@section('title', 'Acerca de - Enlace Rosa')

@section('content')

    <section class="page-hero compact">
        <span class="eyebrow">Acerca de</span>
        <h2>Un puente entre salud, datos e investigación</h2>
    </section>

    <section class="cl-page">

        <div class="cl-divider"></div>

        {{-- ── Presentación del proyecto ─────────────────────── --}}
        <div class="cl-prose">
            <p>Este proyecto es financiado por el Fideicomiso 23871 de Multas Electorales, en el marco de la Convocatoria 2023-01 de Proyectos de investigación, desarrollo tecnológico e innovación del Consejo Potosino de Ciencia y Tecnología (COPOCYT).</p>
            <p>Los contenidos expuestos en este sitio tienen un fin académico y de divulgación científica.</p>
        </div>

        {{-- ── Resumen del proyecto ──────────────────────────── --}}
        <div class="cl-about-card">
            <div class="cl-about-card-header">
                <div class="cl-about-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                </div>
                <span class="cl-about-card-label">Resumen del proyecto</span>
            </div>
            <p class="cl-about-card-body">Desarrollar un sistema computacional y realizar el equipamiento tecnológico de procesamiento para apoyar a médicos radiólogos en la interpretación de estudios mamográficos, el seguimiento de éstos y la capacitación de nuevos expertos, mediante el almacenamiento de la información que resulte de las interpretaciones y hallazgos de los estudios de mujeres potosinas, con el propósito de contribuir en el inicio de la creación de una parte del registro poblacional relacionado con cáncer de mama.</p>
        </div>

        {{-- ── Logos institucionales ─────────────────────────── --}}
        <div class="cl-logos">
            <p class="cl-logos-label">Instituciones participantes</p>
            <div class="cl-logos-grid">
                <div class="cl-logo-slot">
                    <a href="https://www.uaslp.mx" target="_blank" rel="noopener">
                    <img src="{{ asset('images/logo_uaslp.png') }}" alt="Universidad Autónoma de San Luis Potosí">
                    </a>
                </div>
                <div class="cl-logo-slot">
                    <a href="https://hospitalcentral.gob.mx/" target="_blank" rel="noopener">
                    <img src="{{ asset('images/Logo_HRAE_HORIZONTAL.png') }}" alt="Hospital Regional de Alta Especialidad">
                    </a>
                </div>
            </div>
        </div>

        {{-- ── Equipo ────────────────────────────────────────── --}}
        <div class="cl-team">

            {{-- Responsable técnico --}}
            <div class="cl-team-block">
                <h2 class="cl-heading">Responsable técnico</h2>
                <div class="cl-team-lead">
                    <div class="cl-team-avatar" aria-hidden="true">FM</div>
                    <div class="cl-team-lead-info">
                        <p class="cl-team-lead-name">Dr. Francisco Eduardo Martínez Pérez</p>
                        <p class="cl-team-lead-role">Facultad de Ingeniería · Universidad Autónoma de San Luis Potosí</p>
                        <a href="mailto:eduardo.perez@uaslp.mx" class="cl-team-email">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            eduardo.perez@uaslp.mx
                        </a>
                    </div>
                </div>
            </div>

            {{-- Investigadores y estudiantes en dos columnas --}}
            <div class="cl-team-cols">

                <div class="cl-team-block">
                    <h2 class="cl-heading">Investigadores asociados</h2>
                    <ul class="cl-team-list">
                        <li>Dra. Sandra E. Nava Muñoz</li>
                        <li>Dr. Alberto S. Núñez Varela</li>
                        <li>Dr. José Ignacio Núñez Varela</li>
                        <li>Dr. Fco. Edgar Castillo Barrera</li>
                        <li>Dr. Héctor G. Pérez González</li>
                    </ul>
                </div>

                <div class="cl-team-block">
                    <h2 class="cl-heading">Estudiantes y egresados</h2>
                    <ul class="cl-team-list">
                        <li>Angélica Martínez Vidaña</li>
                        <li>César A. Ramírez Gámez</li>
                        <li>José Luis de J. Negrete Espino</li>
                        <li>Mario César Velez Zamarrón</li>
                        <li>Yhairim Gamboa Durán</li>
                        <li>Zazil J. Ibarra Cuevas</li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- ── Contacto ──────────────────────────────────────── --}}
        <div class="cl-contact">
            <div class="cl-contact-inner">
                <div class="cl-contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <div>
                    <p class="cl-contact-label">¿Deseas contactarnos?</p>
                    <a href="mailto:preveem22@gmail.com" class="cl-contact-email">preveem22@gmail.com</a>
                </div>
            </div>
        </div>

    </section>

@endsection