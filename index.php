<?php
/**
* Todo Array indexado*
* Array que a cada posición se le asigna un número partiendo de 0.
*/

/**
* ? nombres Ejemplo de Array indexado*
*/
$nombres = array("Juan", "Pedro", "Santiago", "Jesus", "Ivan", "Diego", "Cristian");

var_dump($nombres);
echo("<hr>");

/**
* Todo Array asociativo*
* Array llave => valor.
*/

/**
* ? nombres Ejemplo de Array asociativo*
*/

$edades = array(
   "Juan" => 35,
   "Pedro" => 37,
   "Santiago" =>43);

var_dump($edades);
echo("<hr>");

/**
* Todo Array Multidimensional*
* Array asociativo con uno o más arrays asociativos por dentro.
*/

/**
* ? nombres Ejemplo de Array Multidimensional*
*/

$personas= array(
   "Juan" => array("Edad"=>23, "Ciudad"=> "Madrid", "País" => "España"),
   "Pedro" => array("Edad"=>37, "Ciudad"=> "Paris", "País" => "Francia"),
   "Santiago" =>array("Edad"=>43, "Ciudad"=> "Bogota", "País" => "Colombia"));
/**
* ? Agregar información al array*
*/
   $personas["Pedro"]["Altura"] = 1.63;
   print_r($personas);

/**
* ? Ejemplo consulta al array*
*/
   print_r($personas["Pedro"]["Ciudad"]);

   echo("<hr>");
   echo("<hr>");
   echo("<hr>");
/**
* ! METODOS MÁS USADOS PARA ARRAYS*
* array_flip(): Intercambia las claves con sus valores correspondientes en un array.
* array_fill(): Rellena un array con un valor especificado.
* array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
* array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
* array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
* array_key_exists(): Comprueba si una clave existe en un array.
* in_array(): Comprueba si un valor existe en un array.
* array_rand(): Devuelve una o varias claves aleatorias de un array.
* array_unique(): Elimina los valores duplicados de un array.
* array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
* array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
* array_push(): Agrega uno o más elementos al final de un array.
* array_pop(): Extrae y elimina el último elemento de un array.
* array_reverse(): Revierte el orden de los elementos en un array.
* array_sum(): Devuelve la suma de todos los valores de un array numérico.
* array_product(): Devuelve el producto de todos los valores de un array numérico.
array_chunk(): Divide un array en fragmentos más pequeños.
array_keys(): Devuelve todas las claves de un array.
array_values(): Devuelve todos los valores de un array.
array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
*/

/**
* ? Ejemplo de array_flip(): con array nombres*
*/
echo("<h1>array_flip</h1>"); 
$Flip = array_flip($nombres);
print_r($Flip);

/**
* ? Ejemplo de array_fill()*
*/
echo("<h1>array_fill</h1>"); 
$LoteriaA= array_fill(0, 11, "Número");
$LoteriaB= array_fill(-10, 5, "Número");
print_r($LoteriaA);
echo("<br>");echo("<br>");
print_r($LoteriaB);

/**
* ? Ejemplo de array_filter() con array nombres*
*/
echo("<h1>array_filter</h1>"); 

print_r(array_filter($nombres, function($k) {
   return $k > 4;
}, ARRAY_FILTER_USE_KEY));
echo("<br>");echo("<br>");
print_r(array_filter($nombres, function($v, $k) {
   return $k > 4 || $v ==="Ivan";
}, ARRAY_FILTER_USE_BOTH));

/**
* ? Ejemplo de array_map() con array nombres*
*/
echo("<h1>array_map</h1>");

function saludos($arr){
   return "Hola me llamo $arr";
}
$saludo= array_map("saludos", $nombres);
print_r($saludo);

/**
* ? Ejemplo de array_reduce()*
*/
echo("<h1>array_reduce</h1>");

$PruebaReduce = array(0,1,2,3,4,5,6,7,8,9,10);

function Sum($carry, $item)
{
   $carry += $item;
   return ($carry);
}
$Suma =array_reduce($PruebaReduce, "Sum");
print_r($Suma);
echo("<br>");echo("<br>");
print_r($Suma/count($PruebaReduce)); //Promedio, usando el metodo count()

/**
* ? Ejemplo de array_key_exists() con array edades*
*/
echo("<h1>array_key_exists</h1>");
if (array_key_exists("Juan", $edades)) {
   echo "Si se encuentra";
}else{
   echo "No se encuentra";
};

/**
* ? Ejemplo de in_array() con array edades*
*/
echo("<h1>in_array</h1>");
if(in_array(43, $edades)){
   echo "Si se encuentra";
}else{
   echo "No se encuentra";
};

/**
* ? Ejemplo de array_rand() con array nombres despues del metodo Flit*
*/
echo("<h1>array_rand</h1>");
$nombresAlt = array_rand($Flip, 3);
print_r($nombresAlt);

/**
* ? Ejemplo de array_unique()*
*/
echo("<h1>array_unique</h1>");
$A = array(1,2,3,3,2,2,2);
print_r(array_unique($A));

/**
* ? Ejemplo de array_intersect()*
*/
echo("<h1>array_intersect</h1>");
$B= array(1,2);
print_r(array_intersect($A,$B));

/**
* ? Ejemplo de array_diff()*
*/
echo("<h1>array_diff</h1>");
print_r(array_diff($A,$B));

/**
* ? Ejemplo de array_push()*
*/
echo("<h1>array_push</h1>");
array_push($B, 3, 4);
print_r($B);

/**
* ? Ejemplo de array_pop()*
*/
echo("<h1>array_pop</h1>");
array_pop($B);
print_r($B);

/**
* ? Ejemplo de array_reverse()*
*/
echo("<h1>array_reverse</h1>");
print_r(array_reverse($B));

/**
* ? Ejemplo de array_sum()*
*/
echo("<h1>array_sum</h1>");
print_r($A);
echo "<br>";
print_r(array_sum($A));

/**
* ? Ejemplo de array_product()*
*/
echo("<h1>array_product</h1>");
print_r($A);
echo "<br>";
print_r(array_product($A));

?>