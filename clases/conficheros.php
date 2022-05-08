<?php 

file_put_contents("mi-fichero.txt", "Esta es la primera linea. \n", FILE_APPEND);



echo "Fichero guardado <br>";
$contenido=file_get_contents("mi-fichero.txt");

file_put_contents("mi-fichero.txt", "otra linea. \n", FILE_APPEND);


echo str_replace("\n","<br>",$contenido);