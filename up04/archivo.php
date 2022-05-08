<!-- Crear una clase llamada PasswordValidator,
que tenga un método `isValid()`,
que reciba una contraseña e indique si cumple
con las siguiente condiciones:
* Tiene 8 o más caracteres de longitud
* Tiene alguno de los siguientes caracteres ( '.' ',' '-' '_' ';')
Implementar otro método que te diga cuan segura
es la contraseña.
(buscar patrones para crear 3 niveles:
fuerte, medio y débil)
Para probarlo, incluir el fichero de la clase,
crear un objeto y llamar al método pasándole
una contraseña -->

<?php

class PasswordValidator{

    var $pass;

    function __construct($pass){
        $this->pass = $pass;
    }

    function isValid($passwordInput){
         return (strlen($passwordInput) >= 8 && $this->charValue($passwordInput))? true : false;
    }
    
    function charValue ($passwordInput){
        $array = ['.', ',', '-', '_', ';'];
        $state = false;
        foreach($array as $char){
            if (strpos($passwordInput, $char)!== false){
                $state = true;
            }
        }
        return $state;
    }
         

}