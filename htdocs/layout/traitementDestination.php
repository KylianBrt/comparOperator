<?php
include('../layout/bdd.php');
include('../partials/Manager.php');


$manager = new Manager($bdd);
$manager->getAllOperators($_POST['location'], $_POST['price'], $_POST['tour'], $_POST['img']);

header('location: ../pages/home.php');
