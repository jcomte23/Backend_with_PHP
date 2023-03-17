<?php

if (isset($_POST["btnEnviarDato"])) {
    if (isset($_POST["dato"]) && !empty($_POST["dato"])) {
        echo "dato= ".$_POST["dato"];
    }else{
        echo "no llego ningun dato";
    }
}else{
    echo "el servidor no ha recibido ninguna solicitud";
}





?>