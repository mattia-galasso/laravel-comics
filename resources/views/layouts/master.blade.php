<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/ico">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- HEADER -->
    @include("partials.header")
    
    <!-- MAIN -->
    @yield("content")
    
    <!-- FOOTER -->
    @include("partials.footer")
</body>

</html>