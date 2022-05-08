<?php
$password = $_POST["password"];
require_once("archivo.php");

$validator = new PasswordValidator($password);

$valido = $validator->isValid($password) ? "Valido" : "No Valido";
echo $valido;