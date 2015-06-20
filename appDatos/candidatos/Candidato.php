<?php
class Candidato {

  private $id;
  private $DUI;
  private $Apellido;
  private $Nombre;
  private $depto;
  private $municipio;
  private $OC;
  private $TI;
  private $Partido;
  private $Coalision;

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

  public function getApellido() {
    return $this->Apellido;
  }

  public function setApellido($Apellido) {
    $this->Apellido = $Apellido;
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

  public function getTendencia() {
    return $this->OC;
  }

  public function setTendencia($OC) {
    $this->OC = $OC;
  }

   public function getTipoInscripcion() {
    return $this->TI;
  }

  public function setTipoInscripcion($TI) {
    $this->TI = $TI;
  }


  public function getPartido() {
    return $this->Partido;
  }

  public function setPartido($Partido) {
    $this->Partido = $Partido;
  }

  public function getCoalision() {
    return $this->Coalision;
  }

  public function setCoalision($Coalision) {
    $this->Coalision = $Coalision;
  }


}

  ?>