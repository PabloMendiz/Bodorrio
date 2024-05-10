<?php
require 'config.php';

$erro = false;

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $numAsistentes = $_POST['asistentes'];

    for ($i = 1; $i <= $numAsistentes; $i++) {
        if (strlen($_POST['nombre'.$i])<10){
            header("Status: 301 Moved Permanently");
            header("Location: http://bodamariapablo.es/index.php?msg=na#asistencia");
            exit;
        }
    }

    for ($i = 1; $i <= $numAsistentes; $i++) {

        $name = $_POST['nombre' .$i];
        $alergias = $_POST['alergia' .$i];

        if ($alergias == null) {
            $alergias = "Sin alergias";
        }
        $bus = $_POST['bus'];
        $sql = "INSERT INTO listadeboda (Nombre, Alergias, Bus) VALUES ('$name', '$alergias', '$bus')";

        if (!mysqli_query($connection, $sql)) {
            unset($_REQUEST);
            echo '<script type="text/javascript">
        	alert("Si estás recibiendo esta alerta, no se te ha incluido en la lista de invitados " +
         	"Por favor, ponte en contacto con Pablo A-Mendizábal.");
        	</script>';
            mysqli_close($connection);
            exit;
        }
    }

    if ($numAsistentes == 1) {
        mysqli_close($connection);
        header('Location: http://bodamariapablo.es/thanks.html');
        echo '<script type="text/javascript">
        alert("Añadida ' . $numAsistentes . ' persona a la lista de invitados");
        </script>';
    } else if($numAsistentes > 1) {
        mysqli_close($connection);
        header('Location: http://bodamariapablo.es/thanks.html');
        echo '<script type="text/javascript">
        alert("Añadidas ' . $numAsistentes . ' personas a la lista de invitados");
        </script>';
    }
}
mysqli_close($connection);