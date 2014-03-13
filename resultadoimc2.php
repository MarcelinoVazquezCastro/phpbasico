<?php require_once 'funcionesIMC.php'; ?>

<?php

$estatura = $_REQUEST['estatura'];
$masa = $_REQUEST['masa'];
$errores = array();
/*
if (!validarPeso($masa))
{
    $errores[] = MSG_ERR_PESO;
}
if (!validarEstatura($estatura))
{
    $errores[] = MSG_ERR_ESTATURA;
} 
if (count($errores>0))
{
    echo "Errores"
    foreach($errores as $error)
    {
        
    }    
} 
*/
//Calculo
$imc = calculoIMC($masa, $estatura);
$clasificacion = clasificacionIMC($imc); 

//Presentacion
echo "Tu IMC es ".$imc;
echo "<br>";
echo "Clasificacion: " .$clasificacion;
