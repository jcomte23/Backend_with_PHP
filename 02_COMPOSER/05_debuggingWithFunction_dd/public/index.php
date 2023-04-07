<?php

require ('../vendor/autoload.php');

class Gatos{
    protected $patas=[];
    protected $color;

    public function __construct(string $_color) {
        $this->color = $_color;
        for ($i=0; $i < 4; $i++) { 
            $this->patas[$i]=new PataDeGato();
        }
    }
}

class PataDeGato{
    protected $nails=4;
    protected $descripcion="La pata de un gato es una estructura ósea y muscular que consta de cuatro dedos con garras retráctiles y almohadillas plantares en la parte inferior. Es flexible y fuerte, lo que permite que los gatos realicen movimientos rápidos y ágiles con gran precisión.";

    public function GetDescription(): string
    {
        return $this->descripcion;
    }
}

$casaDeGatos=array(
    "nombre" => "casa fenila",
    "direccion"=>[
        "pais"=>"Colombia",
        "departamento"=>"Antioquia",
        "Ciudad_municipio"=>"Bello",
        "Barrio"=>"Espiritu Santo",
        "nomenclaruta"=>"CL 49A BR 56-69"
    ],
    "numeroDeGatos"=>[
        new Gatos("blanco"),
        new Gatos("gris"),
        new Gatos("negro"),
    ]
);

echo "<pre>";
var_dump($casaDeGatos);
echo "</pre>";

dd($casaDeGatos);