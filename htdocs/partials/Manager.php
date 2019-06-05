<?php
include ('../layout/bdd.php');

class Manager {
    
    private $bdd;


    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }
    
    public function getAllDestination()
    { 
        $req = $this->bdd->prepare("SELECT * FROM destinations WHERE location = ?");
        $req->execute(array($_GET['destination']));
        $destination = $req->fetchAll();
        return $destination;
    }

    public function getDestination($id)
    {
        
    }

    public function getOperatorByDestination($location)
    {
        $req = $this->bdd->prepare("SELECT * FROM destinations INNER JOIN tour_operators ON destinations.id_tour_operator = tour_operators.id WHERE destinations.location = ?");
        $req->execute(array($location));
        $destination = $req->fetchAll();
        return $destination;
    }

    public function createReview()
    {
        //AAA
    }

    public function getReviewByOperator()
    {
        //AAA
    }
}