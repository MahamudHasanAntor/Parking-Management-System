<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Send form data with vue js in laravel</title>
</head>
<body>
     
    <div id="app">
    <div class="py-4">
        @yield('content')
    </div>
     
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html> 