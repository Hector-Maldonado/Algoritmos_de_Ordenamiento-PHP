<?php

/**
 * Ejercicio 1
 * 
 * Escribe un programa que ordene una lista de números de forma descendente utilizando el algoritmo Bubble Sort. \
 * La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos casos y 
 * muestra la lista antes y después de aplicar el algoritmo.
 */


function bubbleShort($arr)
{
    //Verificamos si el array dado contenga 1 o menos elementos y si es asi mostramos el mensaje.
    if (count($arr) <= 1) return "necesito al menos 2 datos en el array";

    //Recorremos el array completo 
    for ($i = 0; $i < count($arr); $i++) {
        //Comparamos elementos adyacentes del principio al final 
        for ($j = 0; $j + 1 < count($arr); $j++) {
            //verificamos si el elemento actual es menor al siguiente, si eso se cumple intercambiamos sus valores
            if ($arr[$j] < $arr[$j + 1]) {
                //Guardamos el valor actual en una variable temporal.
                $temp = $arr[$j];
                //Asignamos al indice actual el valor del siguiente elemento
                $arr[$j] = $arr[$j + 1];
                //cambiamos el valor de la variable temporal con el nuevo valor.
                $arr[$j + 1] = $temp;
            }
        }
    }
    //Retornamos el array ordenado
    return $arr;
}

$arraycito = [8, 8, -3, -6, 10, 5, 40, 7, 0];

print("Lista sin ordenar: \n");
print_r($arraycito);

print("Lista Ordenada con Bubble Short: \n");
print_r(bubbleShort($arraycito));
