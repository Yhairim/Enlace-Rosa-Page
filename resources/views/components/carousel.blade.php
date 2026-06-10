<section class="carousel-section" aria-labelledby="carousel-title">
    <div class="section-heading">
        <span class="eyebrow">Galería principal</span>
        <h3 id="carousel-title">Imágenes destacadas</h3>
    </div>

    <div class="carousel-shell" data-carousel aria-label="Carrusel de imágenes de Enlace Rosa">
        {{-- SLIDE 1 --}}
        <article class="carousel-slide is-active">
            <img src="{{ asset('images/carousel/slide-1.jpg') }}" alt="Imagen destacada 1 de Enlace Rosa">
        </article>

        {{-- SLIDE 2 --}}
        <article class="carousel-slide">
            <img src="{{ asset('images/carousel/slide-2.jpg') }}" alt="Imagen destacada 2 de Enlace Rosa">
        </article>

        {{-- SLIDE 3 --}}
        <article class="carousel-slide">
            <img src="{{ asset('images/carousel/slide-3.jpg') }}" alt="Imagen destacada 3 de Enlace Rosa">
        </article>

        <div class="carousel-controls" aria-label="Controles visuales del carrusel">
            <button type="button" aria-label="Imagen anterior">&lsaquo;</button>
            <div class="carousel-dots" aria-hidden="true">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <button type="button" aria-label="Imagen siguiente">&rsaquo;</button>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const slides = [...carousel.querySelectorAll('.carousel-slide')];
        const dots = [...carousel.querySelectorAll('.carousel-dots span')];
        const [previousButton, nextButton] = carousel.querySelectorAll('.carousel-controls button');
        const rotationDelay = 5500;
        const shouldAutoRotate = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let currentIndex = 0;

        const showSlide = (index) => {
            currentIndex = (index + slides.length) % slides.length;
            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle('is-active', slideIndex === currentIndex);
            });
            dots.forEach((dot, dotIndex) => {
                dot.classList.toggle('active', dotIndex === currentIndex);
            });
        };

        previousButton.addEventListener('click', () => {
            showSlide(currentIndex - 1);
        });

        nextButton.addEventListener('click', () => {
            showSlide(currentIndex + 1);
        });

        if (shouldAutoRotate && slides.length > 1) {
            window.setInterval(() => {
                showSlide(currentIndex + 1);
            }, rotationDelay);
        }
    });
</script>