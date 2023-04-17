<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion scolaire</title>

        <!-- Botstrap v4 -->
        <link href="{{ asset('asset/bootstrap.min.css') }}" rel="stylesheet">

        <!-- le fontawesome pour les icones -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- sweet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @routes
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @inertiaHead
    </head>

    <body>
    @inertia
    
    <script src="{{ asset('asset/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('asset/datatables.min.js') }}"></script>
    <script src="{{ asset('asset/perfect-scrollbar.min.js') }}"></script>
    
    </body>
</html>
