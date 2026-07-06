# Enlace Rosa Code Organization

This project is organized as a small Laravel site with shared layout pieces and page-specific content.

## Main Structure

```text
resources/views/layouts/app.blade.php      Shared HTML shell
resources/views/components/header.blade.php Header, logos, language button
resources/views/components/navbar.blade.php Navigation and hamburger behavior
resources/views/components/footer.blade.php Contact footer
resources/views/*.blade.php                Public page content
public/css/estilos.css                     Site styles
public/js/language-toggle.js               Spanish/English language toggle
routes/web.php                             Public page routes
```

## Blade Page Pattern

Use this shape for public pages:

```blade
@extends('layouts.app')

@section('title', 'Page Title - Enlace Rosa')

@section('content')
    {{-- Page hero --}}
    <section class="page-hero compact">
        ...
    </section>

    {{-- Main content --}}
    <section class="content-section">
        ...
    </section>
@endsection
```

## CSS Section Pattern

Keep `public/css/estilos.css` grouped by purpose:

```css
/* Base global */
/* Shared components */
/* Home */
/* Clinical / cl-* pages */
/* Computational research */
/* About */
/* Responsive rules */
```

Responsive rules can stay close to their page section when they only affect that section.

## Translation Pattern

Add new visible Spanish text to `public/js/language-toggle.js` in the matching dictionary section:

```js
// Información clínica
"Texto en español": "English text",
```

Use `data-no-translate` on elements that must never change, such as:

```html
<h1 data-no-translate>ENLACE ROSA</h1>
```

## Cleanup Rule

Only remove a class or file after searching for it first:

```powershell
rg -n "class-or-file-name"
```

If it appears only in the stylesheet and not in any view, it is usually safe to remove.
