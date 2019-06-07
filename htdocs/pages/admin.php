<?php
include('../layout/bdd.php');
include('../partials/Destination.php');
include('../partials/Manager.php');
include('../partials/TourOperator.php');

$manager = new Manager($bdd);
$tour_ops = $manager->getAllOperators();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComparOperator | Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/png" href="../assets/img/logofirst.png" />
    <link rel="stylesheet" href="../assets/js/script.js">
</head>
<body>
<p class="pp">Administrateur</p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 admin-card">
                <div class="row">
                    <div class="col-sm-12 admin-card-inter">
                        <p class="admin-card-inter-p">Ajouter Un tour Opérator</p>

                        <form action="../layout/traitementTourOperator.php" method="post" name="adminTourOperator">
                            <div class="form-group">
                                <input type="text" class="admin-card-inter-input" name="name" id="TourOperator" placeholder="Ajouter le nom du tour opérateur ..">
                            </div>
                            <div class="form-group">
                                <input type="text" class="admin-card-inter-input" name="link" id="textUser" placeholder="Ajouter le lien du site ..">
                            </div>
                            <div class="text-center py-4">
                                <button type="submit" class="btn btn-outline-pink"> Ajouter <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 admin-card-inter-destination">
                        <p class="admin-card-inter-p">Ajouter Une destination</p>

                        <form action="../layout/traitementDestination.php" method="post" name="adminDestination">
                            <div class="form-group">
                                <input type="text" class="admin-card-inter-input" name="location" id="destination" placeholder="Ajouter le nom d'une destination ..">
                            </div>
                            <div class="form-group">
                                <input type="text" class="admin-card-inter-input" name="price" id="price" placeholder="Ajouter le prix de la destination ..">
                            </div>
                            <div class="form-group">
                                <select id="pet-select" name="tour">
                                    <?php
                                        foreach ($tour_ops as $tour_op) {
                                            echo '<option value="'. $tour_op['id'] .'">' . $tour_op['name'] . '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="admin-card-inter-input" name="img" id="price" placeholder="Ajouter une image exemple : Paris.jpg">
                            </div>
                            <div class="text-center py-4">
                                <button type="submit" class="btn btn-outline-pink"> Ajouter <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery-3.4.0.min.js"></script>
</body>

</html>
