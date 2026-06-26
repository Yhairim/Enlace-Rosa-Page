@extends('layouts.app')

@section('title', 'Información Clínica - Enlace Rosa')

@section('content')

    <section class="page-hero compact clinical-hero">
        <span class="eyebrow">Información Clínica</span>
        <h2>Lo que debes saber sobre el cáncer de mama</h2>
    </section>

    <section class="cl-page">


        <div class="cl-prose">
            <p>El cáncer es una anormalidad: desde el punto de vista biológico, es un trastorno caracterizado por la alteración del equilibrio entre la proliferación y los mecanismos normales de muerte celular.</p>
            <p>El principal factor que limita las posibilidades de curación es la presencia o desarrollo de enfermedad metastásica, aunque en algunas neoplasias la curación es factible aún en presencia de metástasis. Una alternativa es el diagnóstico temprano mediante el escrutinio o tamizaje.</p>

            {{-- ── Cáncer de mama ──────────────────────────── --}}
            <h2 class="cl-heading">Cáncer de mama</h2>

            <p>El cáncer de mama consiste en la proliferación acelerada e incontrolada de células del epitelio glandular. Son células que han aumentado enormemente su capacidad reproductiva.</p>
            <p>Las células del cáncer de mama pueden diseminarse a través de la sangre o de los vasos linfáticos y llegar a otras partes del cuerpo. Allí pueden adherirse a los tejidos y crecer formando metástasis.</p>

            {{-- ── Pull list flotante ──────────────────────── --}}
            <div class="cl-clearfix">
                <aside class="cl-pull-list">
                    <h4>Programas de detección mamaria</h4>
                    <ul>
                        <li>Mamografía anual a partir de los 40 años</li>
                        <li>Exploración física por personal de salud capacitado, desde los 25 años</li>
                        <li>Autoexploración mamaria a partir de los 20 años</li>
                    </ul>
                </aside>

                <p>Los programas de detección de cáncer mamario buscan identificar lesiones en etapas tempranas, cuando las posibilidades de tratamiento exitoso son mayores. La detección oportuna es la herramienta más eficaz disponible para reducir la mortalidad asociada a esta enfermedad.</p>

                <div class="cl-callout">
                    <p>→ <a href="https://www.cancer.org/es/cancer/cancer-de-seno/pruebas-de-deteccion-y-deteccion-temprana-del-cancer-de-seno/mamogramas/como-entender-su-informe-de-mamograma.html" target="_blank" rel="noopener">Recomendaciones para una Autoexploración correcta</a></p>
                </div>
            </div>

            {{-- ── Epidemiología y mamografía ──────────────── --}}
            <p>La incidencia del cáncer varía según la edad, género, grupo étnico, país o región y tiempo. Los estudios epidemiológicos han identificado un gran número de factores de riesgo relacionados con la aparición de cáncer, que con frecuencia no son la causa directa, sino indicadores de los factores reales.</p>
            <p>La mamografía es un procedimiento para obtener una imagen radiográfica de las glándulas mamarias, cuya finalidad es reconocer posibles lesiones. La escala de este tamizaje es <strong><a href="https://www.imss.gob.mx/salud-en-linea/infografias/infografia-cancermama" target="_blank" rel="noopener">BI-RADS</a></strong>, un instrumento de garantía de la calidad concebido para normalizar el informe de estudios por imágenes de la mama, disminuir la discordancia entre interpretaciones y facilitar la vigilancia de los resultados.</p>
        </div>

        {{-- ── Clasificación BI-RADS ────────────────────────── --}}
        <div class="cl-birads">
            <h2 class="cl-heading">Clasificación BI-RADS</h2>
            <p class="cl-birads-sub">Los médicos emiten el diagnóstico con el análisis visual detallado de la mamografía, identificando microcalcificaciones de morfología heterogénea —de forma, tamaño y densidad diferentes— con distribución agrupada, segmentaria o regional.</p>

            <div class="cl-birads-grid" aria-label="Escala de riesgo BI-RADS">
                <div class="cl-b-step cl-b0">
                    <span class="cl-b-cat">BI-RADS 0</span>
                    <span class="cl-b-desc">Información insuficiente para formular diagnóstico</span>
                </div>
                <div class="cl-b-step cl-b1">
                    <span class="cl-b-cat">BI-RADS 1</span>
                    <span class="cl-b-desc">Negativo, sin hallazgos significativos</span>
                </div>
                <div class="cl-b-step cl-b2">
                    <span class="cl-b-cat">BI-RADS 2</span>
                    <span class="cl-b-desc">Hallazgos benignos, sin riesgo de malignidad</span>
                </div>
                <div class="cl-b-step cl-b3">
                    <span class="cl-b-cat">BI-RADS 3</span>
                    <span class="cl-b-desc">Benignos con bajo riesgo de malignidad (2%)</span>
                </div>
                <div class="cl-b-step cl-b4">
                    <span class="cl-b-cat">BI-RADS 4</span>
                    <span class="cl-b-desc">Hallazgos sospechosos, requieren biopsia</span>
                </div>
                <div class="cl-b-step cl-b5">
                    <span class="cl-b-cat">BI-RADS 5</span>
                    <span class="cl-b-desc">Altamente sugestivos de malignidad</span>
                </div>
                <div class="cl-b-step cl-b6">
                    <span class="cl-b-cat">BI-RADS 6</span>
                    <span class="cl-b-desc">Malignidad confirmada por biopsia o histología</span>
                </div>
            </div>
        </div>

        {{-- ── Estudios adicionales ─────────────────────────── --}}
        <div class="cl-estudios">
            <h2 class="cl-heading">Estudios adicionales</h2>

            <div class="cl-estudios-grid">

                {{-- Radiografía --}}
                <div class="cl-estudio-card">
                    <div class="cl-estudio-header">
                        <div class="cl-estudio-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <line x1="3" y1="9" x2="21" y2="9"/>
                                <line x1="9" y1="21" x2="9" y2="9"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Radiografía</h3>
                            <p>Estudio por imagen complementario</p>
                        </div>
                    </div>
                    <figure class="cl-estudio-img">
                        <img src="{{ asset('images/Radiografia.png') }}" alt="Imagen de radiografía de mama">
                    </figure>
                    <div class="cl-estudio-body">
                        Es posible que el radiólogo sugiera estudios adicionales con el objetivo de señalar un diagnóstico más completo
                    </div>
                </div>

                {{-- Mamografía --}}
                <div class="cl-estudio-card">
                    <div class="cl-estudio-header">
                        <div class="cl-estudio-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9"/>
                                <circle cx="12" cy="12" r="4"/>
                                <line x1="12" y1="3" x2="12" y2="6"/>
                                <line x1="12" y1="18" x2="12" y2="21"/>
                                <line x1="3" y1="12" x2="6" y2="12"/>
                                <line x1="18" y1="12" x2="21" y2="12"/>
                            </svg>
                        </div>
                        <div>
                            <h3>Mamografía o mastografía</h3>
                            <p>Estudio de tamizaje principal</p>
                        </div>
                    </div>
                    <figure class="cl-estudio-img">
                        <img src="{{ asset('images/Mastografia.png') }}" alt="Imagen de mastografía">
                    </figure>
                    <div class="cl-estudio-body">
                        La mamografía o también llamada mastografía es un estudio que obtiene cuatro radiografías: dos céfalo caudal y dos oblicuo-lateral, una para cada seno.
                    </div>
                </div>

            </div>
        </div>

        {{-- ── Referencias ──────────────────────────────────── --}}
        <div class="cl-referencias">
            <h2 class="cl-heading cl-heading--refs">Referencias</h2>

            <div class="cl-ref-list">
                <div class="cl-ref-item">
                    <div class="cl-ref-num" aria-hidden="true">1</div>
                    <p class="cl-ref-text">
                        Granados, M., Herrera, A. <em>Manual de Oncología, Procedimientos Médicos Quirúrgicos.</em> 4ª Edición. McGraw Hill (2010).
                    </p>
                </div>
                <div class="cl-ref-item">
                    <div class="cl-ref-num" aria-hidden="true">2</div>
                    <p class="cl-ref-text">
                        Sánchez, J. C., Rocha, E. B., Valle, A. E., Molina, E. M., &amp; Chacón, A. P. (2013). Consenso Mexicano sobre diagnóstico y tratamiento del cáncer mamario (5ª versión).
                        <a href="http://consensocancermamario.com" target="_blank" rel="noopener">consensocancermamario.com ↗</a>
                    </p>
                </div>
                <div class="cl-ref-item">
                    <div class="cl-ref-num" aria-hidden="true">3</div>
                    <p class="cl-ref-text">
                        Sociedad Española de Oncología Médica.
                        <a href="https://seom.org" target="_blank" rel="noopener">seom.org ↗</a>
                    </p>
                </div>
            </div>
        </div>

    </section>

@endsection