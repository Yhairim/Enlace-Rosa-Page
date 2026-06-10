<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    public function test_every_public_section_route_renders(): void
    {
        $routes = [
            '/',
            '/inicio',
            '/clinica',
            '/computacional',
            '/publicaciones',
            '/sitios',
            '/acerca',
        ];

        foreach ($routes as $route) {
            $this->get($route)->assertOk();
        }
    }

    public function test_public_navigation_named_routes_are_registered(): void
    {
        $routeNames = ['home', 'inicio', 'clinica', 'computacional', 'publicaciones', 'sitios', 'acerca'];

        foreach ($routeNames as $routeName) {
            $this->assertTrue(Route::has($routeName));
        }
    }
}
