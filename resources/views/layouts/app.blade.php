<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('./css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="padding-top: 0px;">
    <div id="app">
       @include('includes.front_nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/libs.js"></script>
</body>
</html>
