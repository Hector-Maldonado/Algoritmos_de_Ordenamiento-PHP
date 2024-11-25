<?php 
/**
 * Ejercicio 3
 * 
 * Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort. 
 * Muestra la lista antes y después de aplicar el algoritmo.
 */


 function insertionSort($arr) {
    //Verificamos si el array dado contenga 1 o menos elementos y si es asi mostramos el mensaje.
    if (count($arr) <= 1 ) return "necesito al menos 2 datos en el array";
   
    // Recorre desde el segundo elemento hasta el final
    for ($i = 1; $i < count($arr); $i++) {
        //guardamos la primera posicion de $i
        $key = $arr[$i]; 
        // creamos una segunda variable donde vamos a iniciarla desde la posicion 0
        $j = $i - 1; 
        // Mueve los elementos que son mayores que la key una posición adelante
        while ($j >= 0 && strcmp($arr[$j], $key) > 0) {
            // asignamos el mismo valor de la celda 0 a la celda 1
            $arr[$j + 1] = $arr[$j];
            //hacemos el funcionamiento de insercion moviendo los datos hacia atras
            $j--; 
        }
        // Coloca la key en la posicion correcta
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Ejemplo 
$arr = ["Alma","Elena","Zulma","Besy","Hector", "Carlos", "Deysi"];

print("Lista sin ordenar: \n");
print_r($arr);

print("Lista ordenada alfabeticamente usando Insertion Sort : \n");
print_r(insertionSort($arr));
?>