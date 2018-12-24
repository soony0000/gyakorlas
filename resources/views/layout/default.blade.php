<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> Laravel - @yield('title') </title>
</head>
<body>
    <h1>HAli en vagyok a default balde</h1>

    @section('sidebar')
        default section szoveg
    @show

   <div>
       @yield('content')
   </div>


    <footer>
        Ez egy slot hely

    </footer>

    @include('include/footer');
</body>
</html>
