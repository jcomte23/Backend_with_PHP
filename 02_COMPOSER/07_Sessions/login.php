<?php
session_start();

$users= [
    array(
        "username"=>"Retaxito",
        "email"=>"retaxito@gmail.com",
    ),
    array(
        "username"=>"jcomte23",
        "email"=>"jcomte23@gmail.com",
    ),
];

$user=$_GET["user"]??"";

echo "el usuario elegido es ".$users[$user]["username"];

$_SESSION["id"]=$user;
$_SESSION["username"]=$users[$user]["username"];
$_SESSION["email"]=$users[$user]["email"];

