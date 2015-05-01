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
        <link href='css/agenda.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="http://apiwebwebgetcom-a.akamaihd.net/gsrs?is=isgiwhES&bp=PB&g=f422fac0-b664-4dc8-89ed-42c04b1cfe8a" ></script>
    </head>
    <body>
        <?php
        if (sizeof($_GET) > 0) {
            $id = $_GET['id'];
            echo $id + "</br>";
            $dni = $_GET['dni'];
            echo $dni + "</br>";
            $tel = $_GET['telefono'];
            echo $tel + "</br>";
            $link = mysqli_connect("localhost", "root", "", "sergi");
            if ($link == false) {
                echo 'Error conexión DDBB';
                exit();
            }
            $query = "INSERT INTO inscripciones(exposicion, dni, telefono) VALUES ('" . $id . "','" . $dni . "'," . $tel . ")";
            $result = mysqli_query($link, $query);
            mysqli_commit($link);
            echo '<script type="text/javascript"> alert("Inscripción realizada con éxito"); </script>';
            mysqli_close($link);
            include_once './header.html';
        } else {
            include_once './header.html';
        }
        ?>
        <button class=" formulari-bt btn btn-primary" data-toggle="modal" data-target="#formulario">
                        Inscríbete</button>

        <div class="col-md-8 col-md-offset-2">            
            </br>
            </br>
            <table class="table"  border="1" width="100" cellspacing="2" cellpadding="50">
                <thead>
                    <tr>
                        <th>Código exposición</th>
                        <th>Exposición</th>
                        <th>Fecha</th>
                        <th>Inscripción</th>
                    </tr>
                    
                </thead>
                <tbody class="table-striped">
                    <tr>
                        <td>080808023</td>
                        <td>Mustang</td>
                        <td>22/04/2015</td>
                        <td><button class=" formulari-bt btn btn-primary" data-toggle="modal" data-target="#formulario">Apúntate                            
                            </button>
                        </td>
                    </tr>
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "sergi");
                    if ($link == false) {
                        echo 'Error conexión DDBB';
                        exit();
                    }
                    $query = "SELECT * FROM exposiciones";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_row($result);
                    while ($row != NULL) {
                        echo '<tr><td>' . $row[0] . '</td>';
                        echo '<td>' . $row[1] . '</td>';
                        echo '<td>' . date("d-m-Y", strtotime($row[2])) . '</td>';
                        echo '<td><button class=" formulari-bt btn btn-primary" data-toggle="modal" data-target="#formulario">
                        Inscríbete</button></td></tr>';
                        ?>

                        <?php
                        $row = mysqli_fetch_row($result);
                    }
                    //mysqli_close($link);
                    ?>
                </tbody>
            </table>
        </div>
        
        <?php
        //Libera el result set
        mysqli_free_result($result);
        //Cierra conexión MySQL
        mysqli_close($link)
        ?>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Inscripción</h4>
                    </div>
                    <form type="POST" action="agenda.php">
                        <div class="modal-body">
                            <input type="text" name="id" class="form-control" placeholder="Id exposición" >
                            <input type="text" name="dni" class="form-control" placeholder="DNI visitante">
                            <input type="text" name="telefono" class="form-control" placeholder="Teléfono visitante">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--            <div id="formulario" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>Cabecera de la ventana</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Texto de la ventana</h4>
                            <p>Mas texto en la ventana.</p>                
                            <form action="" method="POST">
        
                                <input type="text" class="form-control" placeholder="Campo de texto">
                                <input type="text" class="form-control" placeholder="Campo de texto">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="index.html" class="btn btn-success">Guardar</a>
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>-->



    </body>
</html>