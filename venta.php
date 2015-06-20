<?php
class venta { 
  private $id_producto;
  private $nombre;
  private $precio;
  private $categoria;
  private $codigo;
  
  
   public function getid_producto() { 
    return $this->id_producto;
  }

  public function setid_producto($id_producto) {
    $this->id_producto = $id_producto;
  }
  
//-------------------------------------------------------
  public function getnombre() {
    return $this->nombre;
  }

  public function setnombre($nombre) {
    $this->nombre = $nombre;

  }
   //-------------------------------------------------------
  public function getcategoria() {
    return $this->categoria;
  }

  public function setcategoria($categoria) {
    $this->categoria = $categoria;
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
