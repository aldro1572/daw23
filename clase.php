<?php
/**
 *@author Alejandro
 *@access public
 *@example $verdura = new Verdura($comestible,$color);
 *@static $color="verde"
 *@todo Se implementará una clase hija en el futuro
 *@version 1.0
*/
class Verdura {
   /**
   *@param boolean $comestible
   */
   var $comestible;
/**
 *@param string $color
*/
   var $color;

   function __construct($comestible, $color="verde")
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   function es_comestible()
   {
       return $this->comestible;
   }

   function que_color()
   {
       return $this->color;
   }

}

?>
