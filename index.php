<?php
/**
 *  ! ESTRUCTURAS DE CONTROL*
 * 
 * ? Control condicionales (if, switch)*
 * ? Control De repetición (for, while, do-while)*
 * ? Control De excepciones (try, catch)*
 */


   /**
    * todo ESTRUCTURAS DE CONTROL CONDICIONALES
    */

$autenticado=true;
$admin=false;
echo "<h3>If</h3>";
if ($autenticado && $admin){
   echo "Usuario autenticado correctamente";
}else{
   echo "Usuario no autenticado, inicia sesión";
}
echo "<br>";echo "<br>";

echo "<h3>If Anidado</h3>";
$cliente=[
   "name"=>"Juan",
   "balance"=> 0,
   "info"=>[
      "tipo"=>"regular"
   ]
];
if(!empty($cliente)){
   echo "El arreglo cliente no está vacio<br>";
   if($cliente["balance"]>0){
      echo "El cliente está largo";
   }else{
      echo "Está limpio";
   }
}
echo "<br>";echo "<br>";
echo "<h3>Switch</h3>";
$tecnologia="HTML";
switch($tecnologia){
   case "PHP":
      echo "Excelente lenguaje";
      break;
   case "JavaScript":
      echo "Lenguaje de la web";
      break;
   case "HTML":
      echo "Emmmmm...";
      break;
   default:
      echo "Algún lenguaje, no sé cual";
      break;

}

   /**
    * todo ESTRUCTURAS DE CONTROL REPETITIVAS
    */
echo "<h3>While</h3>";
$i=0;
while($i<10){
   echo $i . "-";
   $i++;
}
echo "<h3>Do While</h3>";
$i=100;
do{
   echo $i . "-";
   $i++;
}while($i<10);
echo "<h3>For Each</h3>";
$clients= array("Pedro", "Juan", "Karen");
foreach($clients as $user):
   echo $user."<br>";
endforeach;
echo "<br>";echo "<br>";
$Usuario=[
   "Name"=>"Juan",
   "Balance"=>200,
   "Type"=>"Premium"
];
foreach($Usuario as $key => $value):
   echo $key." ==> ".$value."<br>";
endforeach;
?>