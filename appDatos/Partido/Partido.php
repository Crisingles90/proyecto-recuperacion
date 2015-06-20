<?php
class Partido {

  private $id;
  private $Nombre;
  private $files;
  private $DUI;
  private $Representante;
  

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getNombre() {
    return $this->Nombre;
  }

  public function setNombre($Nombre) {
    $this->Nombre = $Nombre;
  }

  public function getFile() {
    return $this->files;
  }

  public function setFile($files) {
    $this->files = $files;
  }

  public function getDUI() {
    return $this->DUI;
  }

  public function setDUI($DUI) {
    $this->DUI = $DUI;
  }

  public function getRepresentante() {
    return $this->Representante;
  }

  public function setRepresentante($Representante) {
    $this->Representante = $Representante;
  }

  

 


}

  ?>