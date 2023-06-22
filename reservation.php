<?php

use reservation as GlobalReserver;

class reservation {
    private $Id_Reservation ;
    private $DateReservation_;
    private $NbPlaceReservee;

    function __construct($Id_Reservation , $DateReservation_, $NbPlaceReservee){
        $this->$Id_Reservation  = $$Id_Reservation ;
        $this->DateReservation_ = $DateReservation_;
        $this->NbPlaceReservee = $NbPlaceReservee;    
    }

    function getId_Reservation (){
        return $this->Id_Reservation ;
    }
 
    function getDateReservation_(){
        return $this->DateReservation_;
    }
    function setDateReservation_($DateReservation_){
        $this->DateReservation_ = $DateReservation_;
        
    }
    
    function getNbPlaceReservee(){
        return $this->NbPlaceReservee;
    }
     function setNbPlaceReservee($NbPlaceReservee){
     $this->NbPlaceReservee= $NbPlaceReservee;       
    }
}
    ?>