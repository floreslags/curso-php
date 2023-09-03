<?php 

echo "<h1>Curso PHP</h1>";
echo "Hola, </br> Hola de nuevo";

// Uso de variables

echo "</br>";
echo "</br>";

$name = "Sergio";
$lastName = "Flores";

$num1 = 5;
$num2 = 78;

// Concatenación de variables

echo $name ."&nbsp;" .$lastName;
echo "</br>";
echo "Hola, soy $name $lastName";

echo "</br>";
echo "</br>";

$suma  = $num1 + $num2;
echo "El resultado de la suma es $suma";

// Impresión de caracteres

echo "</br>";
echo "</br>";
echo "La variable \$suma tiene el valor: $suma";


echo "</br>";
echo "</br>";

// Condicionales

$modulo  = $num2 % 2;

echo "El resultado del módulo es $modulo";

echo "</br>";

if($modulo == 0){
    echo "El número es par";
}else{
    echo "El número es impar";
}

echo "</br>";
echo "</br>";

// Ciclo FOR

for (
    $i=0; // Inicialización
    $i <= 10 ; // Condición
    $i++ // Iteración
  ) { 
     echo $i ."</br>";
}

?>