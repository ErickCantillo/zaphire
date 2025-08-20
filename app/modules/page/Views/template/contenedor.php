

<?php
$navbar = $this->contenidos[0]['hijos'];
include __DIR__ . '/Components/NavBar.php';
$hero = $this->contenidos[1];

include __DIR__ . '/Components/Hero.php';

for ($index = 2; $index < count($this->contenidos); $index++) {
    $contenido = $this->contenidos[$index];
    include __DIR__ . '/Components/Contenido.php';
    // echo print_r($hero['detalle']->contenido_fondo_imagen, true);
    // $contenedor = $contenido['detalle'];
    // echo print_r($index, true);
    // echo print_r($contenedor, true);
}
?>