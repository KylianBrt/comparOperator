<?php

class Review {

    private $id;
    private $message;
    private $author;
    private $id_tour_operator;

    public function __construct($id, $message, $author, $id_tour_operator)
    {
        $this->id = $id;
        $this->message = $message;
        $this->author = $author;
        $this->id_tour_operator = $id_tour_operator;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getId_tour_operator()
    {
        return $this->id_tour_operator;
    }
}