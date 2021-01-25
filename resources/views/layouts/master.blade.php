<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class='header'>
            <h2>OCA temporal</h2>
            @yield('header')
        </div>

        <div class='navigation-menu'>
            MENU AQUI
        </div>

        <div class='main-content'>
            @yield('content')
        </div>
        
        <div class='footer'>
            <br>
            <small> proyecto Celia Viñas 2ºDAW 2020/2021</small>
        </div>
    </body>
</html>