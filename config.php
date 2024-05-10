<?php
  $host_name = 'localhost';
  $database = 'dbs228156';
  $user_name = 'root';
  $password = '';

  if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
