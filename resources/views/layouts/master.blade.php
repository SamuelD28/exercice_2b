<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials._head')
    @include('partials._navbar')
    <body>
        @section('content')
        <!-- The content of the page goes here -->
        @show
    </body>
</html>
