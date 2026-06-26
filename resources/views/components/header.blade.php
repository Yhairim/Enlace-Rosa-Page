<header>

    <div>
        <a href="http://www.uaslp.mx/" target="_blank">
            {{--
                HEADER IMAGE SLOT: UASLP logo
                Current expected file path: public/images/logo_uaslp.png
                Accepted formats: .png, .jpg, .jpeg, .webp, .svg
                If you use a different file name or format, update the asset path below.
            --}}
            <img src="{{ asset('images/logo_uaslp.png') }}" alt="UASLP">
        </a>
        <a href="http://www.ingenieria.uaslp.mx/" target="_blank">
            {{--
                HEADER IMAGE SLOT: Facultad de Ingeniería logo
                Current expected file path: public/images/logo_inge.png
                Accepted formats: .png, .jpg, .jpeg, .webp, .svg
                If you use a different file name or format, update the asset path below.
            --}}
            <img src="{{ asset('images/logo_inge.png') }}" alt="Facultad de Ingeniería">
        </a>

        <div class="brand-copy">
            <div class="brand-lockup">
                <h1>ENLACE ROSA</h1>
                {{--
                    HEADER IMAGE SLOT: Enlace Rosa decorative image
                    Current expected file path: public/images/flor.png
                    Accepted formats: .png, .jpg, .jpeg, .webp, .svg
                    If you use a different file name or format, update the asset path below.
                --}}
                <img class="brand-flower" src="{{ asset('images/flor.png') }}" alt="Enlace Rosa">
            </div>
            <p>Un entorno tecnológico para la valoración de cáncer de mama</p>
        </div>
    </div>

</header>
