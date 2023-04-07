<?php

if (!isset($_COOKIE["exampleCookie"])) {

    setcookie(
        name: "exampleCookie",
        value: "Cookie de ejemplo",
        expires_or_options:0,//SS:MM:HH:DIAS o pon un zero para que se elimine cuando se cierre el navegador
        path:"/",//la cookie estara disponible en todo el sitio web,o puedes espcificar la ruta:/compras
        domain:"http://localhost:8000/",
        secure:false,
        //httponly:true,
    );
    echo "cookie definida";
}

setcookie(
    name: "header_color",
    value: "#000000"
);


$color = $_COOKIE["header_color"] ?? "#121f3d";

