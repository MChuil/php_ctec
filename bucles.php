<?php 
    /**
     *  BUCLES for, while, do while
     *  
     *      Ciclo For
     *         for(inicializacion; condicion; incremento/decremento){
     * 
     * 
     *              Codigo a ejecutar
     * 
     * 
     *          }
     */

    Ejemplo:
    for($a =1; $a <=10 ; $a=$a+2){
        echo "$a ";
    }

    echo "<hr>";

    //imprimir de 20 hasta el 1
    /** 
     *  X inicia en 20
     *  el bucle va a continuar mientras X sea mayor a 1
    */

    for($x=20; $x>=1; $x-- ){
        echo "$x ";
    }

    //Ejercicio: Crear la secuencia de Fibonacci de las primeras 50 secuencias
    // 1 1 2 3 5 8 13 21 34 55 89

    /**
     *  Ciclo While
     *      Sintaxis:
     *          while(condición){
     *              codigo
     *          }
     *      Dentro del ciclo debe haber una forma de hacer que la condición se falsa en algun
     *      momento, de lo contrario se estaria creando un bucle infinito...
     * 
     */
    echo "<hr>";
    
    // Ejemplo:
    $y = 100; //inicialización
    while($y<=10){  //condición
        echo "Hola...";
        $y++;
    }
    echo "<hr>";

    /**
     * Ejercicio: Declarar dos variables con los valores: 14 y 62; multiplicar ambas variables sin utilzar
     *          el simbolo de 'por' (*), resultado = 868
     */


    /**
     * Ciclo Do...While
     *      Sixtaxis:
     *          do{
     *              codigo
     * 
     *          }while(condición)
     *       
     *      Dentro del ciclo debe haber una forma de hacer que la condición se falsa en algun
     *      momento, de lo contrario se estaria creando un bucle infinito...
     */

    //  Ejemplo:
    $z =100;
    do{
        echo "Adios...";
        $z++;
    }while($z<=10);

    //Ejercicio: Dividir 2 numeros, sin utilizar el simbolo de 'división' (/)


    //Ejercicio final: Utilizando 2 ciclos (uno dentro de otro), mostrar las 10 tablas de multiplicar
    // Elegir el ciclo que mas te guste....