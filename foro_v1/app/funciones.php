<?php
function usuarioOK($usuario,$contraseña){
    if(strlen($usuario)<8)
        return false;
    if($usuario != strrev($contraseña))
        return false;
    return true;
}

?>