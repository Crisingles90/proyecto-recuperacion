<?php
class Ciudadano {

  private $id;
  private $Nombre;
  private $Apellido;
  private $Genero;
  private $DUI;
  private $fechaEx;
  private $files;
  private $fechaNac;
  private $depto;
  private $municipio;
  private $Direccion;
  

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getDUI() {
    return $this->DUI;
  }

  public function setDUI($DUI) {
    $this->DUI = $DUI;
  }

  public function getExpiracionDui() {
    return $this->fechaEx;
  }

  public function setExpiracionDui($fechaEx) {
    $this->fechaEx = $fechaEx;
  }

  public function getApellido() {
    return $this->Apellido;
  }

  public function setApellido($Apellido) {
    $this->Apellido = $Apellido;
  }

  public function getGenero() {
    return $this->Genero;
  }

  public function setGenero($Genero) {
    $this->Genero = $Genero;
  }

  public function getNombre() {
    return $this->Nombre;
  }

  public function setNombre($Nombre) {
    $this->Nombre = $Nombre;
  }

  public function getDepartamento() {
    return $this->depto;
  }

  public function setDepartamento($depto) {
    $this->depto = $depto;
  }

  public function getMunicipio() {
    return $this->municipio;
  }

  public function setMunicipio($municipio) {
    $this->municipio = $municipio;
  }

  public function getFile() {
    return $this->files;
  }

  public function setFile($files) {
    $this->files = $files;
  }

   public function getFechaNacimiento() {
    return $this->fechaNac;
  }

  public function setFechaNacimiento($fechaNac) {
    $this->fechaNac = $fechaNac;
  }


  public function getDireccion() {
    return $this->Direccion;
  }

  public function setDireccion($Direccion) {
    $this->Direccion = $Direccion;
  }


}

  ?>