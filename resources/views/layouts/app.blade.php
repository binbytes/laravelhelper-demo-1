<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">

</head>
<body id="app">
    <div class="page">
        <div class="{{ auth()->guest() ? 'page-single' : 'flex-fill'}}">
            @auth
                @include('layouts.partials.top-nav')
                @include('layouts.partials.nav')
            @endauth
            <div class="container">
                @auth
                    <div class="page-header mb-3">
                        <h3 class="page-title">{{ $pageTitle ?? '' }}</h3>
                    </div>
                @endauth

                @yield('content')
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd',
            });
            $('.custom-select').selectize({});
        });
    </script>
    @stack('scripts')
</body>
</html>
