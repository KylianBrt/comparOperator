<?php
include('../layout/bdd.php');
include('../partials/Manager.php');

$manager = new Manager($bdd);
$manager->getAjoutTourOperator($_POST['name'], $_POST['link']);

header('location: ../pages/admin.php');

