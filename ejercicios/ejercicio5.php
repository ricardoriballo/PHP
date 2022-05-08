<?php 

$value = $_GET["fichero"];

if(str_ends_with($value ,".exe" )){
    echo strtoupper($value);
} else if (str_ends_with($value, ".db")){
    echo strtolower($value);
}