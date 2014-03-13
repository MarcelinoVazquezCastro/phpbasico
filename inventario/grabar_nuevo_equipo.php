<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validarDatosRegistro()
{
    $datos = Array();
    $datos[0] = (isset($_REQUEST['nombre']))?
            $_REQUEST['nombre']:"";
    $datos[1] = (isset($_REQUEST['desc']))?
            $_REQUEST['des']:"";
    $datos[2] = (isset($_REQUEST['ip']))?
            $_REQUEST['ip']:"";
    $datos[3] = (isset($_REQUEST['ram']))?
            $_REQUEST['ram']:"";
    
    $errores = Array();
    $errores[0] = validarNombre($datos[0]);
    $errores[1] = validarDesc($datos[1]);
    $errores[2] = validarIp($datos[2]);
    $errores[3] = validarRam($datos[3]);
    
    $_SESSION['datos'] = $datos;
    $_SESSION['errores'] = $errores;
}


function hayErrores($)
{
    
}

validarDatosRegistro();
print_r($_SESSION['datos'] = $datos);
print_r($_SESSION['errores'] = $errores);