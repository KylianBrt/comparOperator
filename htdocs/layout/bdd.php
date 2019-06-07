<?php
// connexion à la base de données comparOperator
try
{
    $bdd = new PDO('mysql:host=192.168.1.47;dbname=ComparOperator-Kyl_Bapt;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
