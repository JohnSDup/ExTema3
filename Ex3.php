<?php


/*
 Crea una funció que rebi com a paràmetres un array de paraules i un caràcter.
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

$palabras = ['Casa', 'Avion', 'Coche'];
var_dump ($palabras);

//Añadir una letra 
$caracter = 'o';

function comprovarLetras($palabras, $caracter) {
    foreach($palabras as $palabra) {
        for ($i = 0; isset($palabra[$i]); $i++) {
            if ($palabra[$i] == $caracter) {
                return true;
            }
        }
    }
    return false;
}
        
$resultado = comprovarLetras($palabras, $caracter);

if ($resultado) {
    echo "Contiene la letra $caracter";
}else{
    echo "No contiene la letra $caracter ";
}





/*
//cambiar el if de la letra que se quiere buscar
REVISAR 
function comprovarPalabras($palabras) {
    for ($i = 0; $i < count($palabras); $i++) {
        if (strpos($palabras[$i], 'm') !== false) {    
         return true;
        }
    }
    return false;
}
*/

?>