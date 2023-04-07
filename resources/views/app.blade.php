<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion scolaire</title>

        <link href="{{ asset('asset/bootstrap.min.css') }}" rel="stylesheet">

        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @inertiaHead
    </head>

    <body>
    @inertia
    
    <script src="{{ asset('asset/perfect-scrollbar.min.js') }}"></script>
    
    </body>
</html>
