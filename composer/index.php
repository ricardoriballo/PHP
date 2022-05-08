<?php
require_once("vendor/autoload.php");

use NifValidator\NifValidator;

$result = new NifValidator();

if($result->isValid("55306297Z") == true){
    echo "Identificacion Valida";
} else {
    echo "Identificacion no Valida";
}



// //CIF
// assert(NifValidator::isValidCif('B65410011'));
// //DNI
// assert(NifValidator::isValidDni('55306297Z'));
// //NIE
// assert(NifValidator::isValidNie('X5102754C'));cd 