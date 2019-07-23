<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Perfil</title>
        <link
            rel="stylesheet"
            href="css/bootstrap.min.css"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            href="css/perfil.css"
            type="text/css"
            media="all"
        />
    </head>

    <body>
        <div id="app">
            <div class="map"></div>
            <div class="container-fluid">
                <div class="row justify-content-end">
                    @include('perfil.partials.nav')
                    <publicaciones></publicaciones>  
                </div>
            </div>
        </div>
        <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>
        <script
            type="text/javascript"
            src="js/bootstrap.bundle.min.js"
        ></script>
        <script type="text/javascript" src="js/perfil.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
