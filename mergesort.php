<?php 
/**
 * Ejercicio 2
 * Implementa una función que ordene una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort.
 *  Muestra la lista antes y después de aplicar el algoritmo.
 */

 
function mergeSort($arr) {
    //Si el arreglo tiene 1 o menos elementos, ya esta ordenado.
    if (count($arr) <= 1) return $arr;

    // Dividimos el arreglo en dos mitades
    $mid = floor(count($arr) / 2);

    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    // Ordenamos cada mitad recursivamente
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinamos ambas mitades ordenadas
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];

    // Fusionamos las dos mitades
    while (count($left) > 0 && count($right) > 0) {
        // Comparamos y agregamos al resultado la palabra menor alfabeticamente.
        if (strcasecmp($left[0], $right[0]) <= 0) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    // Añadimos los elementos restantes de la mitad izquierda 
    while (count($left) > 0) {
        array_push($result, array_shift($left));
    }

    // Añadimos los elementos restantes de la mitad derecha
    while (count($right) > 0) {
        array_push($result, array_shift($right));
    }

    return $result;
}

// Lista de palabras
$words = ["Hija", "Mamá", "Papá", "Tia", "Esposa", "Prima"];

// Mostramos la lista de palabras original
echo "Lista original: ";
print_r($words);

// Ordenamos la lista usando Merge Sort
$sortedWords = mergeSort($words);

// Mostrar la lista ordenada
echo "\nLista ordenada: ";
print_r($sortedWords);


