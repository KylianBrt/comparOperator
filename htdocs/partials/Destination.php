<?php

class Destination 
{
    private $id,
            $location,
            $price,
            $id_tour_operator,
            $image;

    function __construct($id, $location, $price, $id_tour_operator, $image)
    {
        $this->id = $id;
        $this->location = $location;
        $this->price = $price;
        $this->id_tour_operator = $id_tour_operator;
        $this->image = $image;

    }

    function getId()
    {
        return $this->id;
    }

    function getLocation()
    {
        return $this->location;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getId_tour_operator()
    {
        return $this->id_tour_operator;
    }

    function getImg()
    {
        return $this->image;
    }
}