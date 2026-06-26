@extends('layouts.app')

@section('title', 'Información Clínica - Enlace Rosa')

@section('content')
    <section class="page-hero compact clinical-hero">
        <span class="eyebrow">Información Clínica</span>
        <h2>Información Clínica</h2>
        <p>
            Contenido educativo sobre cáncer, cáncer de mama, detección, mamografía, clasificación BI-RADS y referencias clínicas.
        </p>
    </section>

    <section class="content-section clinical-story">
        <article class="clinical-chapter">
            <div class="clinical-section-label">01</div>
            <div class="clinical-section-body">
                <h3>El cáncer y el objetivo del tratamiento oncológico</h3>
                <p>El cáncer es una anormalidad, desde el punto de vista biológico, es un trastorno caracterizado por la alteración del equilibrio entre la proliferación y los mecanismos normales de muerte celular. El principal objetivo del tratamiento oncológico es la curación o erradicación de la afección. </p>
                <p>El principal factor que limita las posibilidades de curación es la presencia o desarrollo de enfermedad metastásica, aunque en algunas neoplasias la curación es factible aún en presencia de metástasis. Una alternativa es el diagnóstico temprano mediante el escrutinio o tamizaje.</p>
            </div>
        </article>

        <article class="clinical-chapter clinical-media-chapter">
            <div class="clinical-section-label">02</div>
            <div class="clinical-section-body">
                <h3>Cáncer de mama</h3>
                <p>El cáncer de mama consiste en la proliferación acelerada e incontrolada de células del epitelio glandular. Son células que han aumentado enormemente su capacidad reproductiva.</p>
                <p>Las células del cáncer de mama pueden diseminarse a través de la sangre o de los vasos linfáticos y llegar a otras partes del cuerpo. Allí pueden adherirse a los tejidos y crecer formando metástasis.</p>  
            </div>
            <figure class="clinical-image-slot">
                <img src="{{ asset('images/anatomia_mama.png') }}" alt="anatomia_mama.png">
            </figure>
        </article>

        <article class="clinical-chapter">
            <div class="clinical-section-label">03</div>
            <div class="clinical-section-body">
                <h3>Detección, prevención y autoexploración</h3>
                <p>Los programas de detección de cáncer mamario señalan lo siguiente:</p>
                <ul class="clinical-list clinical-checklist">
                    <li>Mamografía anual a partir de los 40 años</li>
                    <li>Exploración física por personal de salud capacitado, a partir de los 25 años</li>
                    <li>Autoexploración mamaria a partir de los 20 años</li>
                </ul>
                <p class="clinical-callout"><a class="clinical-link" href="https://www.imss.gob.mx/salud-en-linea/infografias/infografia-cancermama" target="_blank" rel="noopener">Recomendaciones para una Autoexploración.</a></p>
            </div>
        </article>

        <article class="clinical-chapter">
            <div class="clinical-section-label">04</div>
            <div class="clinical-section-body">
                <h3>Factores de riesgo y tamizaje</h3>
                <p>La incidencia del cáncer varía según la edad, género, grupo étnico, país o región y tiempo. Los estudios epidemiológicos han identificado un gran número de factores de riesgo, o sucesos relacionados con la aparición de cáncer, que con frecuencia no son la causa directa, sino indicadores de los factores reales.</p>
                <p>La mamografía es un procedimiento para obtener una imagen radiográfica de las glándulas mamarias, cuya finalidad es reconocer posibles lesiones, la escala de este tamizaje es <a class="clinical-link" href="https://www.cancer.org/es/cancer/cancer-de-seno/pruebas-de-deteccion-y-deteccion-temprana-del-cancer-de-seno/mamogramas/como-entender-su-informe-de-mamograma.html" target="_blank" rel="noopener">BI-RADS</a>.</p>
                <p>La literatura reporta que el BI-RADS es un instrumento de garantía de la calidad concebido con el fin de normalizar el informe de los estudios por imágenes de la mama, disminuir la discordancia entre la interpretación de las imágenes y las recomendaciones, así como facilitar la vigilancia de los resultados.</p>
                </div>
        </article>

        <article class="clinical-chapter birads-chapter">
            <div class="clinical-section-label">05</div>
            <div class="clinical-section-body">
                <h3>Clasificación BI-RADS</h3>
                <p>El sistema BI-RADS se compone de:</p>

                <div class="birads-spectrum" aria-label="Escala de riesgo BI-RADS">
                    <div class="birads-step birads-0">
                        <span>BI-RADS 0</span>
                        <strong>Neutral/Gray</strong>
                        <p>la categoría 0 corresponde a tener insuficiente información para realizar un diagnóstico;</p>
                    </div>
                    <div class="birads-step birads-1">
                        <span>BI-RADS 1</span>
                        <strong>Green</strong>
                        <p>la categoría 1 corresponde a un resultado negativo;</p>
                    </div>
                    <div class="birads-step birads-2">
                        <span>BI-RADS 2</span>
                        <strong>Light Green</strong>
                        <p>en la categoría 2 es posible identificar hallazgos benignos;</p>
                    </div>
                    <div class="birads-step birads-3">
                        <span>BI-RADS 3</span>
                        <strong>Yellow</strong>
                        <p>en la categoría 3 se presentan hallazgos benignos con una probabilidad del 2% de malignidad;</p>
                    </div>
                    <div class="birads-step birads-4">
                        <span>BI-RADS 4</span>
                        <strong>Orange</strong>
                        <p>en la categoría 4 se identifican hallazgos malignos con posibilidad de solicitar una biopsia como estudio para reafirmar el diagnóstico;</p>
                    </div>
                    <div class="birads-step birads-5">
                        <span>BI-RADS 5</span>
                        <strong>Red</strong>
                        <p>en la categoría 5 corresponde a un hallazgo de malignidad</p>
                    </div>
                    <div class="birads-step birads-6">
                        <span>BI-RADS 6</span>
                        <strong>Dark Red</strong>
                        <p>y para la categoría 6 corresponde a un diagnóstico histológico de malignidad.</p>
                    </div>
                </div>

                <p>Esta clasificación es utilizada por los médicos profesionales y el diagnóstico lo emiten con el análisis visual detallado de la mamografía en la cual, por citar un ejemplo, identifican microcalcificaciones de morfología heterogénea, es decir, de forma, tamaño y densidad diferentes, con distribución agrupada, segmentaria o regional.</p>
            </div>
        </article>

        <article class="clinical-chapter clinical-media-chapter">
            <div class="clinical-section-label">06</div>
            <div class="clinical-section-body">
                <h3>Estudios adicionales</h3>
                <p>Aunque en términos médicos está definido un resultado de la mamografía, es posible que el radiólogo sugiera estudios adicionales con el objetivo de señalar un diagnóstico más completo.</p>
            </div>
            <figure class="clinical-image-slot">
                <img src="{{ asset('images/Radiografia.png') }}" alt="Radiografia.png">
                <figcaption>Radiografia.png</figcaption>
            </figure>
        </article>

        <article class="clinical-chapter clinical-media-chapter">
            <div class="clinical-section-label">07</div>
            <div class="clinical-section-body">
                <h3>Mamografía o mastografía</h3>
                <p>La mamografía o también llamada mastografía es un estudio que obtiene cuatro radiografías: dos céfalo caudal y dos oblicuo-lateral, una para cada seno.</p>
            </div>
            <figure class="clinical-image-slot">
                <img src="{{ asset('images/Mastografia.png') }}" alt="Mastografia.png">
                <figcaption>Mastografia.png</figcaption>
            </figure>
        </article>

        <article class="clinical-chapter references-card">
            <div class="clinical-section-label">08</div>
            <div class="clinical-section-body">
                <h3>Referencias</h3>
                <ul class="clinical-list references-list">
                    <li>Granados, M., Herrera, A. Manual de Oncología, Procedimientos Médicos Quirúrgicos. 4ª Edición. Mc Graw Hill (2010).</li>
                    <li>Sánchez, J. C., Rocha, E. B., Valle, A. E., Molina, E. M., &amp; Chacón, A. P. (2013). Consenso Mexicano sobre diagnóstico y tratamiento del cáncer mamario Consenso Mexicano (Vol. 5ta versión). Retrieved from http://consensocancermamario.com</li>
                    <li>Sociedad Española de Oncología Médica, https://seom.org</li>
                </ul>
            </div>
        </article>
    </section>
@endsection
