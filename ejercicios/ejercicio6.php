<?php 

$colores = array('blanco', 'verde', 'rojo');
$result = implode(", ", $colores);

echo "$result";

echo "<br>";


sort($colores);

foreach($colores as $color) {
    echo "<ul>
    <li>$color</li>
    </ul> ";
};