<?php

$peso =$_GET['peso'];
$altura = $_GET['altura'];
$imc = $peso / pow($altura,2);
if($imc < 18.5){
    echo "abaixo do peso";
}
if($imc >18.5 && $imc<=25){
    echo "peso normal";
}
if($imc >25 && $imc<=30){
    echo "acima do peso";
}
if($imc > 30){
    echo "obeso";
}