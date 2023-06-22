<?php

use composer as GlobalReserver;

class composer {
    private $Id_Circuit  ;

    function __construct($Id_Circuit  ){
        $this->$Id_Circuit   = $$Id_Circuit  ;

    }

    function getId_Circuit  (){
        return $this->Id_Circuit  ;
    }
 
}
    ?>