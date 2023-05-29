<?php
    /**
     * FUNCIONES DE SALIDA
     *  @param echo *Función basica para imprimir desde el PHP al html.
     * @param printif *Parecida a la anterior pero con una cadena de texto a la vez.
     * @param sprintif *Parecida a la anterior pero devuelve la cadena formateada.
     */
    echo "Texto a imprimir<br>";

    $texto = "Mundo";
    printf("Hola %s", $texto);

    echo"<br>";

    $texto1 = "Mundooo";
    $mensaje = sprintf("Hola %s", $texto1);
    echo $mensaje;
    
?>