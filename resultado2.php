<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
       
         <?php
            //Entrada datos
         $nombre = "";
            if (isset ($_REQUEST['nombre']))
            {
            $nombre = $_REQUEST['nombre'];
            }
            
            $edad= $_REQUEST['edad'];
            
            //Validar datos
            $error = false;
            $mensaje_error = "ERROR: ";
            
            //Validar nombre
            if ($nombre == "")
            {
              $error = true;
              $mensaje_error .= "El nombre esta en blanco";
            }
            
            //Validar edad
            if (!is_numeric($edad))
            {
                $error = true;
                $mensaje_error .= "Edad debe ser un numero";
            }  
            else 
            {
                //Es un numero--> Verificar (0,100)
                if ($edad <= 0 || $edad >100)
                {
                    $error = true;
                    $mensaje_error .= "Edad debe estar (0,100) <br>";
                }
                
            }    
            
            //Calculo y salida
            if(!$error) 
              {
             
                 if ($edad >=18)
                   {
                     echo $nombre. " es mayor de edad";
                   }
                 else
                   {
                     echo $nombre. " es menor de edad";
                   }
              } 
            else
              {
                //Si hay error
                echo $mensaje_error;
                echo "<a href='formulario2.html'> Volver al formulario";
              }
              
         ?>
    </body>
</html>