<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["año"])) {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $año = $_POST["año"];

        $linea = $titulo . ";" . $autor . ";" . $año . "\n";
        $nombre_archivo = "./data/libros.txt";

        $archivo = fopen($nombre_archivo, "a");

        if ($archivo) {
            fwrite($archivo, $linea);
            fclose($archivo);
        }
    } 
}
?>