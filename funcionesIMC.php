<?php
/* 
 * Calculo IMC
 * Calcula el valor IMC
 * @param masa expresada en kgs (0,500)
 * @param estatura expresada en cms (0,300)
 * @return float resultado del calculo imc redondeado a 2 decimales
 */

function calculoIMC ($masa, $estatura)
{
    $estatura = $estatura / 100; // cms a m
    $imc = $masa / ($estatura * $estatura); 
    return round($imc, 2);
}

/* 
 * ClasificacionIMC
 * Calcula la clasificacion
 * @param imc valor valido de IMC
 * @return string Contiene clasificaion segun valor
 */
function clasificacionIMC($imc)
{
    if ($imc < 18.5){
    $clasificacion = "Bajo peso";
    } 

    elseif ($imc < 25){
    $clasificacion = "Normal";
    } 

    elseif ($imc < 30){
    $clasificacion = "Sobrepeso";
    } 
    else {
    $clasificacion = "Obesidad";
    }  
    return $clasificacion;
}

/*
 * enRango
 * Indica si un avlor esta en un rango determinado (inicio,fin)
 * @param inicio
 * @param fin
 * @param valor
 * @return true si el valor esta en el rango (inicio,fin)
 */

function enRango($inicio,$fin,$valor)
{
    return ($valor>=$inicio && $valor<=$fin);
}        

/*
 * validarPeso
 * Validar peso: Indica si el valor de peso es correcto
 * @param peso debe ser un valor numerico entre (1-500)
 * @return boolean True si cumple y False en caso contrario
 */

define('PESO_MIN',1);
define('PESO_MIN',500);

function validarPeso($peso)
{
    $resultado = FALSE;
    if (is_int($peso))
    {
       $resultado = enRango(PESO_MIN,PESO_MAX, $peso); 
    }    
    
    return $resultado;
    
}        

/*
 * validarEstatura
 * Validar estatura: Indica si el valor de estatura es correcto
 * @param estatura debe ser un valor numerico entre (50-300)
 * @return boolean True si cumple y False en caso contrario
 */

define('EST_MIN',50);//cms
define('EST_MAX',300);//cms

function validarEstatura($estatura)
    $resultado = FALSE;
    if (is_int($estatura))
    {
       $resultado = enRango(EST_MIN,EST_MAX, $estatura); 
    }    
    
    return $resultado;
    
 define('MSG_ERR_PESO', 'El peso debe ser el valor...');
 define('MSG_ERR_ESTATURA', 'El estatura debe ser el valor...');