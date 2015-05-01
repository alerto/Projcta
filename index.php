<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
        <link href='css/main.css' rel='stylesheet' type='text/css'>
        <link href='css/museo.css' rel='stylesheet' type='text/css'>
    </head>
    <body>


        <?php
        include './header.html';
        ?>
        </br>
        <!-- video sin controles -->
        <section class="col-md-8 col-md-offset-2">
            <h2>Bienvenido</h2>
            <p>Bienvenido al <b>Museo del Mustang</b>, un site en el que podrás encontrar todo aquello que caracteriza
                a un gran coche que ha cautivado desde a los coleccionistas de coches más clásicos hasta aquellos apasionados
                por el mundo de los coches deportivos.</p>
            
            <p>
                Te invitamos a que te dés un paseo por nuestro site.</br>
                Esperemos que disfrutes.
            </p>
        </section>
        <section class="col-md-12">
            <video id="vid1" name="vid1" width="680" height="460" autoplay controls>
                <source id="res1" name="res1" src="multimedia/historia" type="video/webm"/>
            </video>
        </section>
</body>
</html>