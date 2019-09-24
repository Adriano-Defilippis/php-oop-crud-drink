
<?php

  // ini_set('display_errors','On');
  // error_reporting(E_ALL);

  include "db_connection.php";
  include "query.php";
  include "popo.php";

  $res = $conn -> query($get_all_prodotti);

  $prodotti = [];

  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $prodotti[] = new Prodotto($row);
    }
  }

  // Attraverso Array di popo e stampo con
  //funzione toString();
  echo "<br>----------------------------------------------------<br>";
  echo "Prodotti della tabella prodotti";
  echo "<br>----------------------------------------------------<br>";
  for ($i=0; $i < sizeof($prodotti) ; $i++) {

    $elem = $prodotti[$i];

    echo $elem -> __toString() . "<br>";
  }


  // Attraverso Array di popo e sfruttando la
  // funzione della classe prodotto, getPrezzo(),
  //ritorno i prezzi per fare la somma e trovare max e min
  echo "<br>------------------------------------------------------------------------------<br>";
  echo "Somma dei singoli prezzi, con valore Min e Max";
  echo "<br>------------------------------------------------------------------------------<br>";

  $min = $prodotti[0];
  $max = $prodotti[0];
  $sum = 0;

  for ($i=0; $i < sizeof($prodotti) ; $i++) {

    $elem = $prodotti[$i];
    // SOMMA
    $sum += $elem -> getPrezzo();
    // MINIMO
    if ($min -> getPrezzo() > $elem -> getPrezzo()) {
      $min = $elem;
    }
    // MASSIMO
    if ($max -> getPrezzo() < $elem -> getPrezzo()) {
      $max = $elem;
    }
  }

  echo "Somma Prezzi:<br>"
       . $sum . "<br>"
       . "Minimo Prezzo:<br>"
       . $min . "<br>"
       . "Massimo Prezzo:<br>"
       . $max . "<br>";

 ?>
