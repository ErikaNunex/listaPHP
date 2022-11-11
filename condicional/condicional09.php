<!-- http://localhost:8000/condicional/condicional09.php?genero=m&altura=1.79 -->

<?php
$altura = $_GET['altura'];
$genero = $_GET['genero'];
if($genero == 'm'){
    $pesoIdealm  = (62.1 * $altura) - 44.7;
    echo "{$pesoIdealm}";
}
if($genero == 'h'){
    $pesoIdealh = (72.7 * $altura) - 58;
  echo "{$pesoIdealh}";
}

