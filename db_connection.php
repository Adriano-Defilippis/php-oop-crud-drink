<?php

  $servername = "localhost";
  $username = "adriano";
  $password = "root";
  $dbname = "poolBool";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {
    var_dump("errore connessione con il database");
    var_dump ($conn);
    die();
  }


 ?>
