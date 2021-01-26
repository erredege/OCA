<html>
    <head>
        <title>
            @yield('OCA temporal')
        </title>
    </head>
    <body>
        <div class='header'>
            <br>
            <div class='navigation-menu'>
                <center>
                    <a href='index.php'>INICIO<a> |
                    <a href='{{route("user.index")}}'>USER<a> |
                    <a href='{{route("multimedia.index")}}'>MULTIMEDIA<a> |
                    <a href='{{route("theme.index")}}'>TEMATICAS<a> |
                </center>
            </div>
            <h2>OCA temporal</h2>
            @yield('header')
        </div>

        

        <div class='main-content'>
            @yield('content')
        </div>
        
        <footer>
            <br><br>
            <center>
                <small> proyecto Celia Viñas 2ºDAW 2020/2021</small>
            </center>
        </footer>
    </body>
</html>