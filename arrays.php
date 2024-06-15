<?php 
    /**
     *      Array, Matriz, Vector
     *      Es un espacio en memoria que permite almacenar
     *      diversos datos, de forma ordenada,
     * 
     *      Los arrays se dividen en 2 grupos:
     *          - arrays indexados
     *          - arrays asociativos
     * 
     * 
     *      Array indexado
     *          cada elemento tiene una posición numerica que inicia en 0 (cero)
     *      
     *      Sintaxis:
     *          $variable = array(valor, valor, valor);
     *      
     *          $variable = [valor, valor, valor];
     */

    $hobbies = array("Leer", "Programar", 'Musica');
    $numbers = [9,8,334,81,92,37,85,3,5,900, 764, 62, 3,0,4];
    $mixto = [3.1416, 20000, "Mexico", true, "Chiapas", 0];

    echo $hobbies[1];
    echo " Numero : " .$numbers[6];
    echo "<br> Total de numeros: " . count($numbers). ", 14 posiciones";

    $hobbies[0] = "Bailar"; //modificando valor
    echo "<br>";
    var_dump($mixto);

    //agregar elementos a un array existente
    
    array_push($hobbies, 'Leer'); //al final
    array_unshift($hobbies, 'Cine');//al principio


    echo "<br>";
    print_r($hobbies);

