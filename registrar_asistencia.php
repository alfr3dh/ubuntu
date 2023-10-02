<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera la información de la asistencia enviada desde el formulario
    $registroAsistencia = $_POST['registro'];

    // Abre o crea un archivo de registro (puedes ajustar la ubicación y el nombre del archivo)
    $archivoRegistro = fopen("/var/www/html/registro_asistencia.txt", "a");

    // Escribe la información de la asistencia en el archivo
    fwrite($archivoRegistro, $registroAsistencia . "\n");

    // Cierra el archivo
    fclose($archivoRegistro);

    // Respuesta de confirmación al cliente
    echo "Asistencia registrada con éxito";
}
?>