<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.components.meta-head')
        @include('layouts.components.head-scripts')
        @include('layouts.components.styles')
    </head>
    <body>
        <div id="app">
            @include('layouts.components.nav')
            <main class="py-4">
                @yield('main')
            </main>
        </div>
        @include('layouts.components.bottom-scripts')
    </body>
</html>
