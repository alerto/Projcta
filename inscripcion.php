<!DOCTYPE HTML>
<html>

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
        $query = "INSERT INTO inscripciones(exposicion, dni, telefono) VALUES ('".$id."','".$dni."',".$tel.")";
        $result = mysqli_query($link, $query);
        mysqli_commit($link);
        echo '<script type="text/javascript"> alert("Inscripción realizada con éxito"); </script>';
        mysqli_close($link);
        include_once './header.html';
        echo 'datros insertados?';
    } else {
        include_once './header.html';
        echo 'No hay datos';
    }
    ?>



</html>