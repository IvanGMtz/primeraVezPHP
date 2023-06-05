<?php
echo "<pre>";

/**
 * ! Isset() y Empty()*
 */

/**
 * @param miVariable *Variable principalmente declarada pero vacía
 * ? Ejemplo de metodo Isset, verifica sí la variable está definida además de contener algun valor*
 */
echo "<h2>Isset</h2>";
 $miVariable;
if(isset($miVariable)){
   echo "La variable está definida y tiene un valor";
}else{
   echo "La variable no está definida o no tiene valor";
};
$miVariable="Hola mundo";
echo "<br>";
$resultado= (isset($miVariable))? "La variable está definida y tiene un valor": "La variable no está definida o no tiene valor";
echo $resultado;

echo "<br><h2>Empty</h2>";
$miVariable="";
/**
 *  ? Ejemplo metodo Empty, verifica sí la variable está vacia o no está definida* 
 */
if(empty($miVariable)){
   echo "La variable está vacia o no está definida";
}else{
   echo "La variable tiene un valor";
};
echo "<br>";

$clientes=[];
$clientes2=array();
$clientes3=array("Pedro", "Juan", "Karen");
$clientes=[
   "nombre"=>"Juan",
   "saldo"=>300
];

// Empty - Revisión de los arrays anteriores
var_dump(empty($clientes)); //false
var_dump(empty($clientes2));//true
var_dump(empty($clientes3));//false
echo "<br>";
// Isset - Revision de los arreglos
var_dump(isset($clientes4));//false
var_dump(isset($clientes));//true
var_dump(isset($clientes2));//true
var_dump(isset($clientes3));//true
echo "<br>";
// Isset - Revision de las propiedades del arreglo
var_dump(isset($clientes["nombre"]));//true
var_dump(isset($clientes["saldo"]));//true
echo "<br>";

?>