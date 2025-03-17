<?php

class FiltroViaje
{
    public $hotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracion;

    // Constructor para inicializar propiedades
    public function __construct($hotel, $ciudad, $pais, $fechaViaje, $duracion)
    {
        $this->hotel = $hotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    // Método para buscar por destino (ciudad o país)
    public function buscarDestino($destino)
    {
        return (stripos($this->ciudad, $destino) !== false || stripos($this->pais, $destino) !== false);
    }

    // Método para buscar por fecha exacta
    public function buscarPorFecha($fecha)
    {
        return ($this->fechaViaje === $fecha);
    }
}

