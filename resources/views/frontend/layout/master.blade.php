<!DOCTYPE html>
<html>
<head>
    @include('frontend.layout.head')
</head>

<body>
    <header>
        @include('frontend.layout.header')
        @yield('connexion')
        @yield('menu')
    </header>

     
       
     @yield('content')

     @include('frontend.layout.footer')


     @include('frontend.layout.script')
</body>
</html>

