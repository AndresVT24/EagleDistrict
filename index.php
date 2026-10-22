<?php

// 1. Recogemos la acción que viene en la URL.
// Por ejemplo: index.php?accio=productos
// Si no se indica ninguna acción, mostramos la portada.
$accio = $_GET['accio'] ?? 'portada';

// 2. Decidimos qué recurso cargar según la acción.
switch ($accio) {

    // Si el usuario quiere ver los productos
    case 'productos':
        require __DIR__ . '/resource_productos.php';
        break;

    // Si el usuario quiere ir a contacto
    case 'contacto':
        require __DIR__ . '/resource_contacto.php';
        break;

    // Si no indica una acción, mostramos la portada
    default:
        require __DIR__ . '/resource_portada.php';
        break;
}