<?php 

$value = $_REQUEST["user"];
$pass = $_REQUEST["password"];

// if(str_ends_with($value ,".exe" )){
//     echo strtoupper($value);
// } else if (str_ends_with($value, ".db")){
//     echo strtolower($value);
// }

if ($value == "Ricardo"){
    echo "esta registrado";
} else {
    echo "no esta registrado";
}