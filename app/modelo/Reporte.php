<?php

class Reporte {
    private $nombre;
    private $celular;
    private $correo;
    private $animal;
    private $distrito;
    private $referencia;
    private $direccion;
    private $infoAdicional;
    private $fotoAnimal;

    // Constructor
    public function __construct($nombre, $celular, $correo, $animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal) {
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->correo = $correo;
        $this->animal = $animal;
        $this->distrito = $distrito;
        $this->referencia = $referencia;
        $this->direccion = $direccion;
        $this->infoAdicional = $infoAdicional;
        $this->fotoAnimal = $fotoAnimal;
    }

    // Getters y setters adicionales
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }

    public function getDistrito() {
        return $this->distrito;
    }

    public function setDistrito($distrito) {
        $this->distrito = $distrito;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getInfoAdicional() {
        return $this->infoAdicional;
    }

    public function setInfoAdicional($infoAdicional) {
        $this->infoAdicional = $infoAdicional;
    }

    public function getFotoAnimal() {
        return $this->fotoAnimal;
    }

    public function setFotoAnimal($fotoAnimal) {
        $this->fotoAnimal = $fotoAnimal;
    }
}
