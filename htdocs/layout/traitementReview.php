<?php
include('../layout/bdd.php');
include('../partials/Manager.php');


$manager = new Manager($bdd);
$manager->createReview($_POST['message'], $_POST['author'], $_POST['id_tour_operator']);

header('location: ../pages/home.php');

