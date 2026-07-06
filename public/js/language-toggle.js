(function () {
    // 01. Configuración general
    const STORAGE_KEY = "enlace-rosa-language";
    const ENGLISH = "en";
    const SPANISH = "es";

    // 02. Diccionario: textos visibles en español -> inglés
    const translations = new Map(
        Object.entries({
            // Compartido: header, navegación, títulos y footer
            "Un entorno tecnológico para la valoración de cáncer de mama":
                "A technology environment for breast cancer assessment",
            "English": "English",
            "Español": "Español",
            "Menú": "Menu",
            "Inicio": "Home",
            "Información Clínica": "Clinical Information",
            "Investigación Computacional": "Computational Research",
            "Publicaciones": "Publications",
            "Sitios Relacionados": "Related Sites",
            "Acerca de": "About",
            "Inicio - Enlace Rosa": "Home - Enlace Rosa",
            "Información Clínica - Enlace Rosa": "Clinical Information - Enlace Rosa",
            "Investigación Computacional - Enlace Rosa":
                "Computational Research - Enlace Rosa",
            "Publicaciones - Enlace Rosa": "Publications - Enlace Rosa",
            "Sitios Relacionados - Enlace Rosa": "Related Sites - Enlace Rosa",
            "Acerca de - Enlace Rosa": "About - Enlace Rosa",
            "Si desea contactarnos, puede enviar un mensaje al correo del proyecto:":
                "If you would like to contact us, you can send a message to the project email:",
            "© Derechos Reservados": "© All Rights Reserved",

            // Inicio
            "Ver información clínica": "View clinical information",
            "Explorar investigación": "Explore research",
            "Carrusel de infografías": "Infographic carousel",
            "Infografía 1 - Enlace Rosa": "Infographic 1 - Enlace Rosa",
            "Infografía 2 - Enlace Rosa": "Infographic 2 - Enlace Rosa",
            "Infografía 3 - Enlace Rosa": "Infographic 3 - Enlace Rosa",
            "Imagen anterior": "Previous image",
            "Imagen siguiente": "Next image",
            "Problemática": "Problem",
            "El cáncer de mama en México": "Breast cancer in Mexico",
            "En México, el cáncer de mama": "In Mexico, breast cancer",
            "es el cáncer con mayor incidencia entre todos los tipos de cáncer en mujeres. Se desarrolla debido a la aparición de un tumor maligno en las células de las glándulas mamarias, el cual puede invadir tejidos circundantes o propagarse a áreas distantes del cuerpo (metástasis).":
                "has the highest incidence among all cancers in women. It develops when a malignant tumor appears in the cells of the mammary glands, which can invade nearby tissue or spread to distant areas of the body (metastasis).",
            "En cuestión de mortalidad, el cáncer de mama ocupa el":
                "In terms of mortality, breast cancer ranks",
            "segundo lugar (17.2%)": "second (17.2%)",
            "entre todos los tipos de cáncer en mujeres en México. El incremento durante las tres últimas décadas se debe a factores como el envejecimiento poblacional, la carencia de un programa nacional de detección oportuna y la insuficiencia de recursos para el tratamiento.":
                "among all cancers in women in Mexico. The increase over the last three decades is due to factors such as population aging, the lack of a national early detection program, and insufficient treatment resources.",
            "Este proyecto tiene el propósito de desarrollar un sistema para la interpretación automática de mamografías, basado en procesamiento digital de imágenes, inteligencia artificial y aprendizaje para máquinas, permitiendo detecciones tempranas en poblaciones apartadas.":
                "This project aims to develop a system for automatic mammogram interpretation based on digital image processing, artificial intelligence, and machine learning, enabling early detection in remote populations.",
            "Referencias": "References",
            "Folleto Consenso de Cáncer de Mama, México, 2021.":
                "Breast Cancer Consensus Brochure, Mexico, 2021.",
            "Guía médica de Cáncer de Mama, México, INCAN, 2015.":
                "Medical guide to breast cancer, Mexico, INCAN, 2015.",
            "Gráfica de prevalencia de cáncer de mama en México":
                "Breast cancer prevalence chart in Mexico",
            "Figura 1. Prevalencia de casos de cáncer de mama en México":
                "Figure 1. Prevalence of breast cancer cases in Mexico",
            "Instituciones participantes": "Participating institutions",
            "Facultad de Ingeniería UASLP": "UASLP School of Engineering",
            "Hospital Regional de Alta Especialidad": "Regional High Specialty Hospital",

            // Información clínica
            "Lo que debes saber sobre el cáncer de mama":
                "What you should know about breast cancer",
            "El cáncer es una anormalidad: desde el punto de vista biológico, es un trastorno caracterizado por la alteración del equilibrio entre la proliferación y los mecanismos normales de muerte celular.":
                "Cancer is an abnormality: from a biological point of view, it is a disorder characterized by disruption of the balance between proliferation and normal cell death mechanisms.",
            "El principal factor que limita las posibilidades de curación es la presencia o desarrollo de enfermedad metastásica, aunque en algunas neoplasias la curación es factible aún en presencia de metástasis. Una alternativa es el diagnóstico temprano mediante el escrutinio o tamizaje.":
                "The main factor limiting the possibility of cure is the presence or development of metastatic disease, although cure is feasible for some neoplasms even when metastasis is present. One alternative is early diagnosis through screening.",
            "Cáncer de mama": "Breast cancer",
            "El cáncer de mama consiste en la proliferación acelerada e incontrolada de células del epitelio glandular. Son células que han aumentado enormemente su capacidad reproductiva.":
                "Breast cancer consists of the accelerated and uncontrolled proliferation of glandular epithelial cells. These cells have greatly increased their reproductive capacity.",
            "Las células del cáncer de mama pueden diseminarse a través de la sangre o de los vasos linfáticos y llegar a otras partes del cuerpo. Allí pueden adherirse a los tejidos y crecer formando metástasis.":
                "Breast cancer cells can spread through the blood or lymphatic vessels and reach other parts of the body. There they can attach to tissues and grow, forming metastases.",
            "Programas de detección mamaria": "Breast screening programs",
            "Mamografía anual a partir de los 40 años": "Annual mammography starting at age 40",
            "Exploración física por personal de salud capacitado, desde los 25 años":
                "Physical examination by trained health personnel starting at age 25",
            "Autoexploración mamaria a partir de los 20 años":
                "Breast self-examination starting at age 20",
            "Los programas de detección de cáncer mamario buscan identificar lesiones en etapas tempranas, cuando las posibilidades de tratamiento exitoso son mayores. La detección oportuna es la herramienta más eficaz disponible para reducir la mortalidad asociada a esta enfermedad.":
                "Breast cancer screening programs seek to identify lesions at early stages, when the chances of successful treatment are greater. Timely detection is the most effective tool available to reduce mortality associated with this disease.",
            "→ Recomendaciones para una Autoexploración correcta":
                "→ Recommendations for proper self-examination",
            "Recomendaciones para una Autoexploración correcta":
                "Recommendations for proper self-examination",
            "La incidencia del cáncer varía según la edad, género, grupo étnico, país o región y tiempo. Los estudios epidemiológicos han identificado un gran número de factores de riesgo relacionados con la aparición de cáncer, que con frecuencia no son la causa directa, sino indicadores de los factores reales.":
                "Cancer incidence varies according to age, gender, ethnic group, country or region, and time. Epidemiological studies have identified many risk factors related to the appearance of cancer, which are often not the direct cause but indicators of the real factors.",
            "La mamografía es un procedimiento para obtener una imagen radiográfica de las glándulas mamarias, cuya finalidad es reconocer posibles lesiones. La escala de este tamizaje es":
                "Mammography is a procedure for obtaining a radiographic image of the mammary glands in order to recognize possible lesions. The scale for this screening is",
            "un instrumento de garantía de la calidad concebido para normalizar el informe de estudios por imágenes de la mama, disminuir la discordancia entre interpretaciones y facilitar la vigilancia de los resultados.":
                "a quality assurance tool designed to standardize breast imaging reports, reduce disagreement between interpretations, and support outcome monitoring.",
            "Clasificación BI-RADS": "BI-RADS Classification",
            "Los médicos emiten el diagnóstico con el análisis visual detallado de la mamografía, identificando microcalcificaciones de morfología heterogénea —de forma, tamaño y densidad diferentes— con distribución agrupada, segmentaria o regional.":
                "Physicians issue the diagnosis through detailed visual analysis of the mammogram, identifying microcalcifications with heterogeneous morphology - different in shape, size, and density - with clustered, segmental, or regional distribution.",
            "Escala de riesgo BI-RADS": "BI-RADS risk scale",
            "Información insuficiente para formular diagnóstico":
                "Insufficient information to make a diagnosis",
            "Negativo, sin hallazgos significativos": "Negative, no significant findings",
            "Hallazgos benignos, sin riesgo de malignidad":
                "Benign findings, no risk of malignancy",
            "Benignos con bajo riesgo de malignidad (2%)":
                "Probably benign with low risk of malignancy (2%)",
            "Hallazgos sospechosos, requieren biopsia":
                "Suspicious findings, biopsy required",
            "Altamente sugestivos de malignidad": "Highly suggestive of malignancy",
            "Malignidad confirmada por biopsia o histología":
                "Malignancy confirmed by biopsy or histology",
            "Mayor riesgo de malignidad": "Higher risk of malignancy",
            "Estudios adicionales": "Additional studies",
            "Radiografía": "X-ray",
            "Estudio por imagen complementario": "Complementary imaging study",
            "Imagen de radiografía de mama": "Breast X-ray image",
            "Es posible que el radiólogo sugiera estudios adicionales con el objetivo de señalar un diagnóstico más completo":
                "The radiologist may suggest additional studies in order to provide a more complete diagnosis",
            "Mamografía o mastografía": "Mammography",
            "Estudio de tamizaje principal": "Main screening study",
            "Imagen de mastografía": "Mammography image",
            "La mamografía o también llamada mastografía es un estudio que obtiene cuatro radiografías: dos céfalo caudal y dos oblicuo-lateral, una para cada seno.":
                "Mammography is a study that obtains four radiographs: two craniocaudal and two mediolateral oblique views, one for each breast.",

            // Investigación computacional
            "Tecnología aplicada al análisis de imágenes mamarias":
                "Technology applied to breast image analysis",
            "El procesamiento digital de las imágenes radiográficas requiere de varios algoritmos, algunos en términos de las características de las imágenes y otros en el reconocimiento de patrones. El resultado final del sistema también tiene que estar basado en un análisis de las cuatro imágenes que conforman una mamografía, así como en una valoración de los factores de riesgo.":
                "Digital processing of radiographic images requires several algorithms, some based on image characteristics and others on pattern recognition. The final system result must also be based on an analysis of the four images that make up a mammogram, as well as an assessment of risk factors.",
            "A continuación se exponen algunos resultados de las pruebas que se han realizado.":
                "Some results from the tests that have been carried out are presented below.",
            "Distribución de frecuencias para establecer rangos en lesiones":
                "Frequency distribution to establish ranges in lesions",
            "Este análisis permite resumir grandes conjuntos de datos, identificar valores atípicos y representarlos en una gráfica. El objetivo es aislar los valores de la lesión, es decir, quitar las intensidades de aquellos pixeles que no correspondan a la lesión o calcificación.":
                "This analysis makes it possible to summarize large datasets, identify outliers, and represent them in a graph. The goal is to isolate lesion values, that is, remove the intensities of pixels that do not correspond to the lesion or calcification.",
            "En la mamografía de la Figura 1 se pueden observar puntos blancos dentro del recuadro amarillo que representan valores máximos de cada renglón de la imagen, los cuales son puntos de referencia para recorrer el vecindario y delimitar la zona de forma automática.":
                "In the mammogram in Figure 1, white points inside the yellow box represent maximum values for each row of the image. These serve as reference points for scanning the neighborhood and automatically delimiting the area.",
            "La imagen representa un recorte de una calcificación en una mamografía, obteniendo:":
                "The image represents a crop of a calcification in a mammogram, obtaining:",
            "Figura 1": "Figure 1",
            "Recorte sin eliminar los valores distintos de la lesión":
                "Crop without removing values different from the lesion",
            "Recorte eliminando los valores fuera de la lesión":
                "Crop removing values outside the lesion",
            "Histograma de la lesión recortada sin eliminar valores externos":
                "Histogram of the cropped lesion without removing external values",
            "Histograma de los valores de la lesión": "Histogram of lesion values",
            "Estimación del factor de riesgo": "Risk factor estimation",
            "Se realizó un análisis de los factores de riesgo que reporta la literatura para el cáncer de mama y se seleccionaron los que son considerados en México, puesto que algunos estudios son muy costosos y es difícil acceder a ellos. Esta selección fue validada por personal médico de oncología.":
                "An analysis was performed of the risk factors reported in the literature for breast cancer, and those considered in Mexico were selected, since some studies are very expensive and difficult to access. This selection was validated by oncology medical staff.",
            "En el siguiente artículo científico publicado se describen los factores de riesgo seleccionados relevantes para mujeres mexicanas:":
                "The following published scientific article describes the selected risk factors relevant to Mexican women:",
            "Artículo científico publicado": "Published scientific article",
            "Último acceso: 03/11/2021": "Last accessed: 03/11/2021",

            // Publicaciones
            "Producción científica del proyecto de cáncer de mama":
                "Scientific output of the breast cancer project",
            "Investigación, divulgación y materiales académicos desarrollados alrededor de Enlace Rosa,": "Research, outreach, and academic materials developed around Enlace Rosa,",
            "inteligencia artificial, mamografía digital y valoración de riesgo.":
                "artificial intelligence, digital mammography, and risk assessment.",
            "Resumen de publicaciones": "Publication summary",
            "Productos académicos y de divulgación": "Academic and outreach products",
            "Periodo de producción documentado": "Documented production period",
            "IA + Salud": "AI + Health",
            "Líneas de análisis computacional y prevención":
                "Computational analysis and prevention lines",
            "Publicaciones destacadas": "Featured publications",
            "Artículo / selección de características": "Article / feature selection",
            "Artículo / mamografía digital": "Article / digital mammography",
            "Trabajo enfocado en preprocesamiento": "Work focused on preprocessing",
            "para mejorar el análisis de mamografías digitales.":
                "to improve digital mammogram analysis.",
            "Consultar publicación": "View publication",
            "Índice completo": "Complete index",
            "Producción académica y divulgación": "Academic production and outreach",
            "Explora los trabajos publicados, capítulos, conferencias, boletines y videos del proyecto.":
                "Explore the project's published works, chapters, conferences, newsletters, and videos.",
            "Catálogo de publicaciones": "Publication catalog",
            "Video / IA aplicada": "Video / applied AI",
            "Uso de IA para detección oportuna del Cáncer de Mama":
                "Use of AI for timely breast cancer detection",
            "Video de YouTube orientado a la divulgación del uso de inteligencia artificial para detección oportuna.":
                "YouTube video focused on outreach about the use of artificial intelligence for timely detection.",
            "Ver recurso": "View resource",
            "Conferencia / calcificaciones": "Conference / calcifications",
            "Interacción humano-computadora": "Human-computer interaction",
            "Capítulo de libro / IA en salud": "Book chapter / AI in health",
            "Sistemas de apoyo en la identificación automática del Cáncer de Mama: Caso práctico":
                "Support systems for automatic breast cancer identification: Case study",
            "Boletín institucional": "Institutional newsletter",
            "Factores de riesgo": "Risk factors",
            "Conferencia / sistemas activos": "Conference / active systems",
            "Divulgación / prevención": "Outreach / prevention",
            "Sensibilización sobre el cáncer de mama": "Breast cancer awareness",
            "Video de YouTube dedicado a la sensibilización y difusión sobre cáncer de mama.":
                "YouTube video dedicated to breast cancer awareness and outreach.",
            "Consultar capítulo": "View chapter",
            "Consultar artículo": "View article",
            "Consultar libro": "View book",
            "Consultar boletín": "View newsletter",
            "Consultar proceedings": "View proceedings",

            // Sitios relacionados
            "Recursos externos de consulta": "External reference resources",
            "Enlaces de referencia para ampliar información sobre salud, investigación y prevención del cáncer":
                "Reference links to expand information on health, research, and cancer prevention",
            "de mama.": "of the breast.",
            "Instituto Nacional de Cancerología": "National Cancer Institute of Mexico",
            "Centro de referencia nacional para diagnóstico, tratamiento e investigación oncológica en México.":
                "National reference center for cancer diagnosis, treatment, and research in Mexico.",
            "Gaceta Mexicana de Oncología": "Mexican Journal of Oncology",
            "Revista científica especializada en oncología clínica y avances en el tratamiento del cáncer.":
                "Scientific journal specialized in clinical oncology and advances in cancer treatment.",
            "Instituto Nacional del Cáncer": "National Cancer Institute",
            "Organismo líder en investigación oncológica de Estados Unidos con recursos en español.":
                "Leading U.S. cancer research organization with Spanish-language resources.",
            "Observatorio de Cáncer, WHO": "Cancer Observatory, WHO",
            "Base de datos global de la OMS con estadísticas e incidencia del cáncer por país y región.":
                "WHO global database with cancer statistics and incidence by country and region.",

            // Acerca de
            "Un puente entre salud, datos e investigación":
                "A bridge between health, data, and research",
            "Este proyecto es financiado por el Fideicomiso 23871 de Multas Electorales, en el marco de la Convocatoria 2023-01 de Proyectos de investigación, desarrollo tecnológico e innovación del Consejo Potosino de Ciencia y Tecnología (COPOCYT).":
                "This project is funded by Trust 23871 for Electoral Fines, under the 2023-01 call for research, technological development, and innovation projects of the Potosino Council of Science and Technology (COPOCYT).",
            "Los contenidos expuestos en este sitio tienen un fin académico y de divulgación científica.":
                "The content presented on this site is intended for academic and scientific outreach purposes.",
            "Resumen del proyecto": "Project summary",
            "Desarrollar un sistema computacional y realizar el equipamiento tecnológico de procesamiento para apoyar a médicos radiólogos en la interpretación de estudios mamográficos, el seguimiento de éstos y la capacitación de nuevos expertos, mediante el almacenamiento de la información que resulte de las interpretaciones y hallazgos de los estudios de mujeres potosinas, con el propósito de contribuir en el inicio de la creación de una parte del registro poblacional relacionado con cáncer de mama.":
                "Develop a computational system and implement processing technology equipment to support radiologists in the interpretation of mammographic studies, their follow-up, and the training of new experts, by storing information resulting from interpretations and findings from studies of women in San Luis Potosi, with the purpose of contributing to the creation of part of a population registry related to breast cancer.",
            "Universidad Autónoma de San Luis Potosí":
                "Autonomous University of San Luis Potosi",
            "Responsable técnico": "Technical lead",
            "Facultad de Ingeniería · Universidad Autónoma de San Luis Potosí":
                "School of Engineering · Autonomous University of San Luis Potosi",
            "Investigadores asociados": "Associated researchers",
            "Estudiantes y egresados": "Students and graduates",
            "¿Deseas contactarnos?": "Would you like to contact us?"
        })
    );

    // 03. Diccionario inverso: permite volver a español sin recargar
    const reverseTranslations = new Map(
        Array.from(translations.entries()).map(([spanish, english]) => [english, spanish])
    );

    // 04. Selectores que nunca deben traducirse
    const ignoredSelectors = [
        "script",
        "style",
        "noscript",
        "svg",
        "[data-no-translate]"
    ].join(",");

    const shouldIgnore = (node) => {
        const parent = node.parentElement;
        return !parent || parent.closest(ignoredSelectors);
    };

    // 05. Utilidades de traducción
    const normalizeText = (text) => text.replace(/\s+/g, " ").trim();

    const translateText = (text, dictionary) => {
        const trimmed = normalizeText(text);
        if (!trimmed) return text;

        const translated = dictionary.get(trimmed);
        if (!translated) return text;

        const leading = text.match(/^\s*/)[0];
        const trailing = text.match(/\s*$/)[0];
        return `${leading}${translated}${trailing}`;
    };

    const translateAttributes = (root, dictionary) => {
        root.querySelectorAll("[aria-label], [alt], [title]").forEach((element) => {
            if (element.closest(ignoredSelectors)) return;

            ["aria-label", "alt", "title"].forEach((attribute) => {
                if (!element.hasAttribute(attribute)) return;
                element.setAttribute(
                    attribute,
                    translateText(element.getAttribute(attribute), dictionary)
                );
            });
        });
    };

    // 06. Traducción completa de la página actual
    const translatePage = (language) => {
        const dictionary = language === ENGLISH ? translations : reverseTranslations;
        const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT);

        while (walker.nextNode()) {
            const node = walker.currentNode;
            if (shouldIgnore(node)) continue;
            node.nodeValue = translateText(node.nodeValue, dictionary);
        }

        translateAttributes(document, dictionary);
        document.documentElement.lang = language;
        document.title = translateText(document.title, dictionary);

        document.querySelectorAll("[data-language-toggle]").forEach((button) => {
            button.textContent = language === ENGLISH ? "Español" : "English";
            button.setAttribute("aria-pressed", String(language === ENGLISH));
            button.setAttribute(
                "aria-label",
                language === ENGLISH ? "Cambiar a español" : "Switch to English"
            );
        });
    };

    // 07. Inicialización y eventos
    const initialLanguage = localStorage.getItem(STORAGE_KEY) || SPANISH;

    document.addEventListener("DOMContentLoaded", () => {
        translatePage(initialLanguage);

        document.querySelectorAll("[data-language-toggle]").forEach((button) => {
            button.addEventListener("click", () => {
                const nextLanguage =
                    document.documentElement.lang === ENGLISH ? SPANISH : ENGLISH;
                localStorage.setItem(STORAGE_KEY, nextLanguage);
                translatePage(nextLanguage);
            });
        });
    });
})();
