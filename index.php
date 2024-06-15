<?php 
    // 'echo' permite imprimir texto en pantalla
    echo "Hola mundo...";

    // Este un comentario de una sola línea
    /*
        Este es un comentario de varias líneas
        linea 2
        linea 3
    */

    // Declaración de variables
    $numero = 29.56;
    $edad = 18;
    $nombre = "Juan";
    $casado = false;

    // Declaracion de constantes
    define("PI", 3.1416);

    $nombre = 'Laura';

    echo "<p>$nombre</p>";

    echo "El valor de PI: " . PI;
    echo "<br>";

    echo $edad;

    // Operadores aritméticos
    $numero1 = 10;
    $numero2 = 20;

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    echo "<br>";
    echo "La suma es: " . $suma;

    // Operadores de comparación
    /**
     * == Igual
     * != Diferente
     * < Menor que
     * > Mayor que
     * <= Menor o igual que
     * >= Mayor o igual que
     * === Identico
     */

    echo "<br>";

    echo 22 === "22"; //false

    // Operadores lógicos
    /**
     * && AND
     * || OR
     * ! NOT
     */ 

    echo "<br>";
    
    echo (12 > 5) || (100 < 20);
    echo "<br>";
    
    echo !(90 == 90);
    
    
    echo "<br>";
    // Estructuras de control
    // if
    $edad = 18;

    if($edad >= 18){
        echo "Eres mayor de edad";
    }else{
        echo "Eres menor de edad";
    }

    //Ejercicio:
    /**
     * Crear una variable llamada 'calificacion' y asignarle un valor entre 0 y 100
     * Si la calificación es mayor o igual a 70 imprimir "Aprobado"
     * Si la calificación es menor a 70 imprimir "Reprobado"
     * Si la calificación es menor a 0 o mayor a 100 imprimir "Calificación no válida"
     * 
     * 
     * Crear una variable llamada 'sexo' y asignarle un valor:  'M', 'F', 'B', 'GF', 'G'
     * Si el valor es 'M' imprimir "Masculino"
     * Si el valor es 'F' imprimir "Femenino"
     * Si el valor es 'B' imprimir "Binario"
     * Si el valor es 'GF' imprimir "Genero fluido"
     * Si el valor es 'G' imprimir "Gay"
     * Si el valor no es ninguno de los anteriores imprimir "Valor no válido"
     */
?>