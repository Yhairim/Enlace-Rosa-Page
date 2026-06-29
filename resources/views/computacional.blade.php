@extends('layouts.app')

@section('title', 'Investigación Computacional - Enlace Rosa')

@section('content')

    <section class="page-hero compact">
        <span class="eyebrow">Investigación Computacional</span>
        <h2>Tecnología aplicada al análisis de imágenes mamarias</h2>
    </section>

    <section class="cl-page">

        <div class="cl-divider"></div>

        {{-- ── Introducción ─────────────────────────────────── --}}
        <div class="cl-prose">
            <p>El procesamiento digital de las imágenes radiográficas requiere de varios algoritmos, algunos en términos de las características de las imágenes y otros en el reconocimiento de patrones. El resultado final del sistema también tiene que estar basado en un análisis de las cuatro imágenes que conforman una mamografía, así como en una valoración de los factores de riesgo.</p>
            <p>A continuación se exponen algunos resultados de las pruebas que se han realizado.</p>
        </div>

        {{-- ── 01 · Distribución de frecuencias ────────────── --}}
        <div class="cl-research-block">
            <div class="cl-research-header">
                <div class="cl-research-num" aria-hidden="true">01</div>
                <h2 class="cl-heading cl-heading--block">Distribución de frecuencias para establecer rangos en lesiones</h2>
            </div>

            <div class="cl-prose">
                <p>Este análisis permite resumir grandes conjuntos de datos, identificar valores atípicos y representarlos en una gráfica. El objetivo es aislar los valores de la lesión, es decir, quitar las intensidades de aquellos pixeles que no correspondan a la lesión o calcificación.</p>
                <p>En la mamografía de la Figura 1 se pueden observar puntos blancos dentro del recuadro amarillo que representan valores máximos de cada renglón de la imagen, los cuales son puntos de referencia para recorrer el vecindario y delimitar la zona de forma automática.</p>
                <p>La imagen representa un recorte de una calcificación en una mamografía, obteniendo:</p>

            </div>

            {{-- Imagen --}}
            <figure class="cl-figure">
                <div class="cl-figure-img">
                    <img src="{{ asset('images/Analisis_val_max.png') }}" alt="Distribución de frecuencias para establecer rangos en lesiones">
                </div>
                <figcaption class="cl-figure-caption">
                    <span class="cl-figure-label">Figura 1</span>
                    Distribución de frecuencias para establecer rangos en lesiones
                </figcaption>
            </figure>

            <div class="cl-prose">
                <div class="cl-clearfix">
                    <aside class="cl-pull-list">
                        <h4>Contenido de la figura</h4>
                        <ul>
                            <li><strong>a)</strong> Recorte sin eliminar los valores distintos de la lesión</li>
                            <li><strong>b)</strong> Recorte eliminando los valores fuera de la lesión</li>
                            <li><strong>c)</strong> Histograma de la lesión recortada sin eliminar valores externos</li>
                            <li><strong>d)</strong> Histograma de los valores de la lesión</li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>

        {{-- ── 02 · Estimación del factor de riesgo ────────── --}}
        <div class="cl-research-block">
            <div class="cl-research-header">
                <div class="cl-research-num" aria-hidden="true">02</div>
                <h2 class="cl-heading cl-heading--block">Estimación del factor de riesgo</h2>
            </div>

            <div class="cl-prose">
                <p>Se realizó un análisis de los factores de riesgo que reporta la literatura para el cáncer de mama y se seleccionaron los que son considerados en México, puesto que algunos estudios son muy costosos y es difícil acceder a ellos. Esta selección fue validada por personal médico de oncología.</p>
                <p>En el siguiente artículo científico publicado se describen los factores de riesgo seleccionados relevantes para mujeres mexicanas:</p>
            </div>

            {{-- Artículo destacado --}}
            <a href="https://doi.org/10.1134/S0361768823080091"
               target="_blank"
               rel="noopener"
               class="cl-article-card">
                <div class="cl-article-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <div class="cl-article-body">
                    <span class="cl-article-type">Artículo científico publicado</span>
                    <p class="cl-article-title">Determination of Relevant Risk Factors for Breast Cancer Using Feature Selection</p>
                    <span class="cl-article-link">doi.org/10.1134/S0361768823080091 ↗</span>
                </div>
            </a>
        </div>

        {{-- ── Referencias ──────────────────────────────────── --}}
        <div class="cl-referencias">
            <h2 class="cl-heading cl-heading--refs">Referencias</h2>

            <div class="cl-ref-list">
                <div class="cl-ref-item">
                    <div class="cl-ref-num" aria-hidden="true">1</div>
                    <p class="cl-ref-text">
                        M. F. Triola, <em>Estadísticas</em>, 12a ed., vol. 11, no. 1. Pearson Education, 2018.
                    </p>
                </div>
                <div class="cl-ref-item">
                    <div class="cl-ref-num" aria-hidden="true">2</div>
                    <p class="cl-ref-text">
                        IBM, <em>Logistic Regression</em>.
                        <a href="https://www.ibm.com/docs/en/spss-statistics/SaaS?topic=regression-logistic"
                           target="_blank" rel="noopener">
                            ibm.com/docs — SPSS Logistic Regression ↗
                        </a>
                        <span class="cl-ref-access">Último acceso: 03/11/2021</span>
                    </p>
                </div>
            </div>
        </div>

    </section>

@endsection