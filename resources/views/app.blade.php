<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyCars - @yield('title')</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


    @include('layouts.navbar')


    <main class=" pt-20 px-6 mx-auto">
        @yield('content')
    </main>

    @include('layouts.footer')

<script src="https://kit.fontawesome.com/your-awesome-kit.js" crossorigin="anonymous"></script>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
<script src="https://kit.fontawesome.com/your-awesome-kit.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    easing: 'ease-in-out',
    once: true
  });
</script>
</body>
</html>
