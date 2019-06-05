<?php

class TourOperator {

    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_prenium;
    
    public function __construct($id, $name, $grade, $link, $is_prenium)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
        $this->link = $link;
        $this->is_prenium = $is_prenium;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getGrade()
    {
        return $this->grade;   
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getIsPremium()
    {
        return $this->is_prenium;
    }
}