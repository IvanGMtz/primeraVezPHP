<?php
    /**
     * VARIABLES Y CONSTANTES
     * Para declarar variables se utiliza el signo peso($) antes del nombre de cada variable y en caso de ser estricto se coloca el tipo de variable entre parentesis.
     *  @param edad *Variable númerica.
     * @param nombre *Variable de texto.
     * @param es_valido *Variable booleana.
     */

    $edad = (int) "25";
    var_dump($edad); //Se utilizó el var_dumb para imprimir y verificar el tipo de variable.

    echo "<br>"; //Imprimo un salto de linea

    $nombre = "Juan";
    var_dump($nombre);

    echo "<br>"; //Imprimo un salto de linea
    
    $es_valido = true;
    var_dump($es_valido);
?>