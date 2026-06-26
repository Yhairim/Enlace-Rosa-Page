@extends('layouts.app')

@section('title', 'Publicaciones - Enlace Rosa')

@section('content')
    <section class="page-hero compact publications-hero">
        <span class="eyebrow">Publicaciones</span>
        <h2>Producción científica del proyecto de cáncer de mama</h2>
        <p>
            Investigación, divulgación y materiales académicos desarrollados alrededor de Enlace Rosa,
            inteligencia artificial, mamografía digital y valoración de riesgo.
        </p>
    </section>

    <section class="content-section publication-overview" aria-label="Resumen de publicaciones">
        <div class="publication-stat">
            <strong>11</strong>
            <span>Productos académicos y de divulgación</span>
        </div>
        <div class="publication-stat">
            <strong>2022-2025</strong>
            <span>Periodo de producción documentado</span>
        </div>
        <div class="publication-stat">
            <strong>IA + Salud</strong>
            <span>Líneas de análisis computacional y prevención</span>
        </div>
    </section>

    <section class="content-section publication-featured" aria-label="Publicaciones destacadas">
        <article class="publication-card featured">
            <div class="publication-meta">
                <span>Artículo / selección de características</span>
                <time datetime="2024">2024</time>
            </div>
            <h3>Determination of Relevant Risk Factors for Breast Cancer Using Feature Selection</h3>
            <p>
                Zazil Ibarra-Cuevas, Jose Nunez-Varela, Alberto Nunez-Varela, Francisco E. Martinez-Perez,
                Sandra E. Nava-Muñoz, Cesar A. Ramirez-Gamez, Hector G. Perez-Gonzalez.
                <em>Programming and Computer Software</em>.
            </p>
            <a href="https://doi.org/10.1134/S0361768823080091" target="_blank" rel="noopener">Consultar publicación</a>
        </article>

        <article class="publication-card featured">
            <div class="publication-meta">
                <span>Artículo / mamografía digital</span>
                <time datetime="2023">2023</time>
            </div>
            <h3>A New Fat-Removal-Based Preprocessing Pipeline for MLO View in Digital Mammograms</h3>
            <p>
                Juanita Hernández López et al. <em>IEEE Access</em>. Trabajo enfocado en preprocesamiento
                para mejorar el análisis de mamografías digitales.
            </p>
            <a href="https://doi.org/10.1109/ACCESS.2023.3236612" target="_blank" rel="noopener">Consultar publicación</a>
        </article>
    </section>

    <section class="content-section publications-catalog" aria-label="Catálogo de publicaciones">
        <div class="section-heading">
            <span class="eyebrow">Índice completo</span>
            <h3>Producción académica y divulgación</h3>
            <p>Explora los trabajos publicados, capítulos, conferencias, boletines y videos del proyecto.</p>
        </div>

        <div class="publication-grid">
            <article class="publication-card">
                <div class="publication-meta">
                    <span>Video / IA aplicada</span>
                    <time datetime="2025">2025</time>
                </div>
                <h3>Uso de IA para detección oportuna del Cáncer de Mama</h3>
                <p>Video de YouTube orientado a la divulgación del uso de inteligencia artificial para detección oportuna.</p>
                <a href="https://youtu.be/0193cAQkjN4?si=hr83fFjrNzH7aOEF" target="_blank" rel="noopener">Ver recurso</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Conferencia / calcificaciones</span>
                    <time datetime="2024">2024</time>
                </div>
                <h3>Calcification Recognition: A Preliminary Result Based on a Computational Conceptual Model</h3>
                <p>
                    Francisco E. Martínez-Perez, Alberto Núñez-Varela, Sandra Nava-Muñoz, José Ignacio Núñez-Varela,
                    César A. Ramírez-Gámez, Francisco Edgar Castillo-Barrera. UCAMI 2024.
                </p>
                <a href="https://link.springer.com/chapter/10.1007/978-3-031-77571-0_44" target="_blank" rel="noopener">Consultar capítulo</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Interacción humano-computadora</span>
                    <time datetime="2024">2024</time>
                </div>
                <h3>Design guides for the development of a system to create interpretations of breast cancer studies</h3>
                <p>
                    Francisco Eduardo Martínez-Pérez, Rosario Margot Camargo-Zebadúa, Sandra Edith Nava-Muñoz,
                    Alberto Salvador Núñez-Varela, Abel de Jesús Guerrero-Jaime, José Ignacio Núñez-Varela,
                    Francisco Edgar Castillo-Barrera, César A. Ramírez-Gámez. <em>Avances en Interacción Humano-Computadora</em>.
                </p>
                <a href="https://revistaaihc.mx/index.php/aihc/article/view/163" target="_blank" rel="noopener">Consultar artículo</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Capítulo de libro / IA en salud</span>
                    <time datetime="2024">2024</time>
                </div>
                <h3>Sistemas de apoyo en la identificación automática del Cáncer de Mama: Caso práctico</h3>
                <p>
                    Sandra E. Nava-Muñoz, Francisco E. Martinez-Perez, Alberto S. Nuñez-Varela, Cesar A. Ramirez-Gamez,
                    Jose I. Nuñez Varela, Hector G. Perez-Gonzalez. En <em>Aplicaciones de Inteligencia Artificial en el Área de la Salud</em>, pp. 116-136.
                </p>
                <a href="https://amexcomp.mx/media/publicaciones/Libro_IA_Salud_Final_r.pdf" target="_blank" rel="noopener">Consultar libro</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Boletín institucional</span>
                    <time datetime="2024">2024</time>
                </div>
                <h3>Enlace Rosa: un entorno tecnológico para la valoración de cáncer de mama</h3>
                <p>
                    Francisco E. Martínez Pérez. Boletín del Hospital Central “Dr. Ignacio Morones Prieto”.
                </p>
                <a href="https://www.ensenanza.hospitalcentral.gob.mx/vol_3_num_6" target="_blank" rel="noopener">Consultar boletín</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Factores de riesgo</span>
                    <time datetime="2024">2024</time>
                </div>
                <h3>Determining relevant risk factors for breast cancer</h3>
                <p>
                    Z. J. Ibarra-Cuevas, J. I. Nunez-Varela, A. Nunez-Varela, F. E. Martinez-Perez,
                    S. E. Nava-Muñoz, C. A. Ramírez-Gámez, H. G. Perez-Gonzalez.
                    <em>Proceedings of the Institute for System Programming of the RAS</em>.
                </p>
                <a href="https://www.mathnet.ru/php/archive.phtml?wshow=paper&jrnid=tisp&paperid=865&option_lang=eng" target="_blank" rel="noopener">Consultar proceedings</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Conferencia / sistemas activos</span>
                    <time datetime="2023">2023</time>
                </div>
                <h3>Using Reference Points for Detection of Calcifications in Mammograms for Medical Active Systems</h3>
                <p>
                    Francisco E. Martínez-Pérez et al. Proceedings of the 15th International Conference on
                    Ubiquitous Computing & Ambient Intelligence (UCAmI 2023).
                </p>
                <a href="https://doi.org/10.1007/978-3-031-48306-6_4" target="_blank" rel="noopener">Consultar publicación</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Divulgación / prevención</span>
                    <time datetime="2022">2022</time>
                </div>
                <h3>Tócate para que no te toque</h3>
                <p>
                    Sandra E. Nava Muñoz. <em>Universitarios Potosinos</em>. Material de sensibilización
                    y prevención sobre cáncer de mama.
                </p>
                <a href="https://leka.uaslp.mx/index.php/universitarios-potosinos/article/view/174" target="_blank" rel="noopener">Consultar artículo</a>
            </article>

            <article class="publication-card">
                <div class="publication-meta">
                    <span>Video / sensibilización</span>
                    <time datetime="2022">2022</time>
                </div>
                <h3>Sensibilización sobre el cáncer de mama</h3>
                <p>Video de YouTube dedicado a la sensibilización y difusión sobre cáncer de mama.</p>
                <a href="https://www.youtube.com/watch?v=ZbIKSBSnIck&t=766s" target="_blank" rel="noopener">Ver recurso</a>
            </article>
        </div>
    </section>
@endsection
