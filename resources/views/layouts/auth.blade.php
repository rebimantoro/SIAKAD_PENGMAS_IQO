<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login 
    </title>
    <!-- Favicon -->
    <link href="http://smkdtbs.com/profil/logo_smk-min.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('auth/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('auth/css/style.css?v=1.1.0') }}" rel="stylesheet" />
    </head>

    <body class="bg-default">
    @yield('content')

    <!--   Core   -->
    <script src="{{ asset('auth/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="{{ asset('auth/js/style.css.min.js') }}?v=1.1.0"></script>
    
    </body>

</html>