<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Ecommerce</title>
        @include('partials.styles')

    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')
    </div>
    
    @include('partials.scripts')
</body>
</html>