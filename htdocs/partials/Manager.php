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

    public function getDestination($name)
    {
        $req = $this->bdd->prepare("SELECT * FROM destinations where name = ?");

        $req->execute(array($name));

        $destination = $req->fetchAll();

        return $destination;
    }

    public function getOperatorByDestination($location)
    {
        $req = $this->bdd->prepare("SELECT * FROM destinations INNER JOIN tour_operators ON destinations.id_tour_operator = tour_operators.id WHERE destinations.location = ?");
        
        $req->execute(array($location));
        
        $destination = $req->fetchAll();
        
        return $destination;
    }

    public function createReview($message, $author, $id_tour_operator)
    {
        $req = $this->bdd->prepare('INSERT INTO reviews(message, author, id_tour_operator) 
                                    VALUES(?,?,?)');
        $req->execute(array($message, $author, $id_tour_operator));
    }   

    public function getReviewByOperator($operator)
    {
        $req = $this->bdd->prepare("SELECT * FROM tour_operators
                                    INNER JOIN reviews ON tour_operators.id = reviews.id_tour_operator WHERE tour_operators.name = ?");

        $req->execute(array($operator));

        $reviewByOperator = $req->fetchAll();

        return $reviewByOperator;
    }  

    public function getAjoutTourOperator($name, $link)
    {
        $req = $this->bdd->prepare('INSERT INTO tour_operators(name, link) 
                                    VALUES(?,?)');
        $req->execute(array($name, $link));
    }

    public function getAllOperators()
    {
        $req =  $this->bdd->prepare('SELECT * FROM tour_operators');

        $req->execute();

        return $req->fetchAll();
    }
}