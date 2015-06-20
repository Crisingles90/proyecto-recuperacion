<?php
class producto1{ 
  private $id_ventas;
  private $nombreproducto;
  private $cantidadproducto;
  private $precio;
  private $codigo;
  
  
   public function getid_ventas() { 
    return $this->id_ventas;
  }

  public function setid_ventas($id_ventas) {
    $this->id_ventas = $id_ventas;
  }
  
//-------------------------------------------------------
  public function getnombreproducto() {
    return $this->nombre;
  }

  public function setnombreproducto($nombre) {
    $this->nombre = $nombre;

  }
   //-------------------------------------------------------
  public function getcantidadproducto() {
    return $this->producto;
  }

  public function setcantidadproducto($producto) {
    $this->producto = $producto;
  }

  //-------------------------------------------------------
  public function getprecio() {
    return $this->precio;
  }

  public function setprecio($precio) {
    $this->precio = $precio;
  }
  //-------------------------------------------------------
  public function getcodigo() {
    return $this->codigo;
  }

  public function setcodigo($codigo) {
    $this->codigo = $codigo;
  }

}

?>
