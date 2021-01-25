<html>
    <head>
        <title>
            @yield('titulo')
        </title>
    </head>
    <body>
        <div class='header'>
            <h2>OCA temporal</h2>
            @yield('header')
        </div>

        <div class='navigation-menu'>
            <center>
                <h2>MENU AQUI</h2>
            </center>
        </div>

        <div class='main-content'>
            @yield('content')
        </div>
        
        <footer>
            <center>
                <small> proyecto Celia Viñas 2ºDAW 2020/2021</small>
            </center>
        </footer>
    </body>
</html>