<?php
class Coalision {

  private $id;
  private $Nombre;
  private $Apellido;
  
  

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


}

  ?>