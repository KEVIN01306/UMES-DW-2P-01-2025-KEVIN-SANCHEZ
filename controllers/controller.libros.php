<?php

function readData() {
    $rute = './data/libros.txt';
    if (!file_exists($rute)){
        return null;
    };

    $libros = fopen($rute,'r');

    $librosList = [];

    while (($fila = fgets($libros)) !== false) {
        $lineaLimpia = trim($fila); 
        $partes = explode(';', $lineaLimpia); 
        $librosList[] = $partes;
    };

    fclose($libros); 
    return $librosList;


}

?>