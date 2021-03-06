<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('head-title', 'DC Comics | Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- MAIN STYLES--}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">


    </head>

    <body>

        {{-- HEADER --}}
        @include('partials.header')
        {{-- MAIN --}}
        <main>
            @yield('content')
        </main>
        {{-- FOOTER --}}
        @include('partials.footer')

        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
