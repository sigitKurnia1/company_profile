<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertama Untuk Rakyat | Landing Page</title>
    
    @include('layouts.guest.style')

</head>
<body>
    @include('layouts.guest.navbar')

    <main class="main">
        @yield('content')
    </main>
    
    @include('layouts.guest.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('layouts.guest.script')
</body>
</html>