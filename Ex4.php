<?php

/*Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

    nom
    edat
    email
    menjar favorit
*/

$informacion =  [
    'usuario1' => [
        'nombre' => 'John',
        'edad' => 33,
        'email' => 'john.bcn9@gmail.com',
        'comida_favorita' => 'fricando'
    ],
    'usuario2' => [
        'nombre' => 'John',
        'edad' => 33,
        'email' => 'john.bcn9@gmail.com',
        'comida_favorita' => 'fricando'
    ]
];
    
print_r ($informacion ['usuario1']);

//var_dump ($informacion);



?>