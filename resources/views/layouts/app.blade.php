<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/css/bootsrap.min.css', 'resources/css/style.css', 'resources/css/custom.css'])
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.foot')
</body>

</html>
