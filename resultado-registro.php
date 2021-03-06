<?php
require_once 'funciones-registro.php';
/**
 * Verifica que los datos recibidos por $_REQUEST son válidos
 * @return bool True si son válidos, False en caso contrario
 */
function validarDatosRegistro() {
    /**
     * validar login
     * validar password
     * validar passwordr es igual a password
     * validar email
     */
    $resultadoValidacion = True;
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['passwordr']))?
            $_REQUEST['passwordr']:"";
    
    if (!validarLogin($login)) {
        $resultadoValidacion = False;
    }
    
    if (!validarPassword($password)) {
        $resultadoValidacion = False;
    } else {
        if ($password != $passwordr) {
            $resultadoValidacion = False;
        }          
    }
    
    return $resultadoValidacion;
} 
?>
<html>
    <head>
        <title>Resultado Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado Registro</div>
        <?php
            if (validarDatosRegistro()) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                echo "Error en los datos";
            }
        ?>    
    </body>
</html>