<!-- http://localhost:8000/condicional/condicional03.php?genero=m&altura=1.79 -->
<?php
$valor = $_GET['valor'];
if($valor % 2 === 0){
    echo "par";
}else{
    echo "impar";
}