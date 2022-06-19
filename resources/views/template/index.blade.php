<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 
<link rel="stylesheet"  href="{{ url('css/app.css') }}">
    <title>app usa map</title>
</head>
<body class="bg-gradient-to-r from-red-800 to-blue-800 ...">
    <header>
        <nav>

                <a class="logo" href="{{ route('states.index') }}">USA HISTORICAL</a>
        
        </nav>
    </header>
    <main class="mx-40  bg-white">
        @yield('content')
    </main>

<script>
    let map = document.querySelector('#map')
let paths = map.querySelectorAll('.map-image a')
let links = map.querySelectorAll('.map-list a')



paths.forEach(function (path) {
    path.addEventListener('mousseenter', function (e) {

        console.log('coucou')

    })
})
</script>
</body>
</html>