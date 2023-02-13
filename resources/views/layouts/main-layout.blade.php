<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel one to many</title>

    <!-- token CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- usando vite -->
    @vite("resources/js/app.js")
</head>
<body>
    
    @yield('content')

</body>
</html>