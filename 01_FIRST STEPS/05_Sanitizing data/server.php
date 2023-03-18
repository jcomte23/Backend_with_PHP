<?php

if (isset($_POST["btnEnviarDato"])) {
    echo "<pre>";
    print_r($_POST);
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $htmlentities = htmlentities($name);
    $addslashes = addslashes($username);
    $onlywords = preg_replace("/\d/", "", $username);
    $onlynumbers = preg_replace("/\D/", "", $username);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
    echo "</pre>";
} else {
    echo "el servidor no ha recibido ninguna solicitud";
}
