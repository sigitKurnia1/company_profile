<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.admin.head')

</head>
<body>
    @include('sweetalert::alert')

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.admin.topbar')

            @include('layouts.admin.sidebar')

            @yield('content')

            @include('layouts.admin.footer')
        </div>
    </div>

    @include('layouts.admin.script')
</body>
</html>