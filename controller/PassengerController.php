<?php
include_once 'model/Passenger.php';

class PassengerController
{
    public function passengerPage()
    {
        include_once 'view/passenger.php';
    }

    public function addPassengers()
    {
        $passengers = new Passenger();
        $passengers->insertPassengers($_POST);
    }
}