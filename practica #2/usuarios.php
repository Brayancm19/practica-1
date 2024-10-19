<?php
// Verifica si se ha enviado el parámetro 'id' a través de la URL
if (isset($_GET['id'])) {
    // Captura el valor del parámetro 'id'
    $id = htmlspecialchars($_GET['id']);
    
    // Si el parámetro 'id' está presente, muestra el mensaje con el id
    echo "El id del usuario es " . $id;
} else {
    // Si no se ha proporcionado el parámetro 'id', muestra el mensaje genérico
    echo "Lista de todos los usuarios";
}
?>
