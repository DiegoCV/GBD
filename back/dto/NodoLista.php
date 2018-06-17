<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\


class NodoLista {

  private $contador;
  private $texto;
  private $precio;

    /**
     * Constructor de Productos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idPRODUCTOS
     * @return idPRODUCTOS
     */
  public function getcontador(){
      return $this->contador;
  }

    /**
     * Modifica el valor correspondiente a  idPRODUCTOS
     * @param idPRODUCTOS
     */
  public function setcontador($contador){
      $this->contador = $contador;
  }
    /**
     * Devuelve el valor correspondiente a PROVEEDORES_idPROVEEDORES
     * @return PROVEEDORES_idPROVEEDORES
     */
  public function gettexto(){
      return $this->texto;
  }

    /**
     * Modifica el valor correspondiente a PROVEEDORES_idPROVEEDORES
     * @param PROVEEDORES_idPROVEEDORES
     */
  public function settexto($texto){
      $this->texto = $texto;
  }

  public function getPrecio(){
      return $this->precio;
  }
  public function setPrecio($precio){
      $this->precio = $precio;
  }
    
}
//That´s all folks!