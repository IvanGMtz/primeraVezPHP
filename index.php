<?php
    /**
     * Números y Operadores 
     *  @param N1 *Variable númerica.
     * @param N2yN3 *Variable de númerica de igual valor.
     * @param N4 *Variable de valor 30 y tipo string.
     */

    $N1=20;
    $N2=30;
    $N3=30;
    $N4="30";

    var_dump($N1 > $N2); // N1 mayor que N2
    echo("<br>");

    var_dump($N1 < $N2); // N1 menor que N2
    echo("<br>");

    var_dump($N1 >= $N2); // N1 mayor igual que N2
    echo("<br>");

    var_dump($N1 <= $N2); // N1 menor igual que N2
    echo("<br>");

    var_dump($N1 <= $N2); // N1 menor igual que N2
    echo("<br>");

    var_dump($N1 == $N2); // N1 igual valor que N2
    echo("<br>");

    var_dump($N3 === $N4); // N3 igual evaluando tipo y valor que N4
    echo("<br>");
?>