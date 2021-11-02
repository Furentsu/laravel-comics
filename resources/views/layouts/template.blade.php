<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">    <title> @yield('title') </title>
</head>
<body>

    @include('partials.header', ['header_options' => config('header_menu')])

    <main>
        @yield('content')
    </main>

    @include('partials.footer', ['comics' => config('footer_dc_comics'), 'shop' => config('footer_shop'), 'dc' => config('footer_dc'), 'sites' => config('footer_sites')])

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>