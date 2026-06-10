<nav>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
        <span class="menu-toggle-icon" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <span class="menu-toggle-text">Menú</span>
    </button>

    <ul id="primary-navigation">
        <li><a class="{{ request()->routeIs('home', 'inicio') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
        <li><a class="{{ request()->routeIs('clinica') ? 'active' : '' }}" href="{{ route('clinica') }}">Información Clínica</a></li>
        <li><a class="{{ request()->routeIs('computacional') ? 'active' : '' }}" href="{{ route('computacional') }}">Investigación Computacional</a></li>
        <li><a class="{{ request()->routeIs('publicaciones') ? 'active' : '' }}" href="{{ route('publicaciones') }}">Publicaciones</a></li>
        <li><a class="{{ request()->routeIs('sitios') ? 'active' : '' }}" href="{{ route('sitios') }}">Sitios Relacionados</a></li>
        <li><a class="{{ request()->routeIs('acerca') ? 'active' : '' }}" href="{{ route('acerca') }}">Acerca de</a></li>
    </ul>
</nav>

<script>
    document.querySelectorAll('.menu-toggle').forEach((button) => {
        const nav = button.closest('nav');

        button.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');
            button.setAttribute('aria-expanded', String(isOpen));
        });
    });
</script>
