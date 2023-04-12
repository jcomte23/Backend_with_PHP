<?php

class mascotas
{
    public readonly string $nombre;
    public readonly int $edad;
    public readonly int $pesoKg;

    public function __construct(string $nombre, int $edad, int $pesoKg)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pesoKg = $pesoKg;
    }

    public function Saludar()
    {
        return "hola mundo";
    }
}
