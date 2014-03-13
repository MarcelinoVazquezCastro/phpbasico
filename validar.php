<?php
/*Definir constantes*/
 define( 'EDAD_MINIMA', 1);
 define( 'EDAD_MAXIMA', 100);
 


/* Funciones para validar formularios*/
 
/* Indica si un valor es un numero entero*/
function validarEntero($valor)
{
    if(filter_var($valor,FILTER_VALIDATE_INT))
    {
        return true;
    } 
    else 
    {
        return false;
    }
}

function comprobarRango($valor, $inicio, $final)
{
    return($valor>=$inicio && $valor<=$final);
}        
function validarEdad($valor)
{
    return(validarEntero($valor) && comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
}

/**
 * 
 * @param type $valor
 * @return boolean
 */
function limpiarTexto($valor)
{
  if(isset($valor))
  {
      $valor = htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1");
      $valor = strip_tags(trim($valor));
  }
  else
  {
      $valor = "";
  }
  return $valor
}          
    


function validarNombre($valor)
{
  $valor = limpiarTexto($valor);
  if ($valor == "")
  {
      
  }
}
/*Verifica que un nombre solo tenga letras
 * 
 */
function validarNombreEstricto($valor)
{
    $patron = "/^[[:alpha:]]+S/";
    if(preg_match($patron, $valor))
    {
        return true;
    }        
    else
    {
        return false;
    }    
}
