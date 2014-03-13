<?php

$estatura = $_REQUEST['estatura'];
$masa = $_REQUEST['masa'];

$estatura = $estatura / 100;
$imc = $masa / ($estatura * $estatura); 
 
echo "Tu IMC es ".$imc;
echo "<br>";

if ($imc < 18.5){
    echo "Estas delgado";
} 

if ($imc > 18.5 && $imc < 24.99){
    echo "Estas normal";
} 

if ($imc >= 25 && $imc < 30){
    echo "Tienes sobrepeso";
} 

if ($imc >= 30){
    echo "Estas obeso";
}  