<?php
include('../layout/bdd.php');
include('../partials/Destination.php');
include('../partials/Manager.php');
include('../partials/TourOperator.php');


$manager = new Manager($bdd);
$destinations = $manager->getOperatorByDestination($_GET['destination']);
foreach ($destinations as $destination) {
    $operatorName = "operator" . $destination['id_tour_operator'];
    $location = new Destination($destination['id'], $destination['location'], $destination['price'], $destination['id_tour_operator'], $destination['img']);
    $$operatorName = new TourOperator($destination['id_tour_operator'], $destination['name'], $destination['grade'], $destination['link'], $destination['is_premium']);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComparOperator | Destinations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/png" href="../assets/img/logofirst.png" />
</head>

<body>
    <div id="main">
        <?php include('../partials/navbar.php'); ?>
        <header id="body-view-<?= $destination['location'] ?>">
            <a class="tusersarien">.</a>
            <h1 class="title-op">ComparOperator</h1>
            <h2 class="subtitle-op">TRAVEL THE WORLD</h2>
        </header>
        <h2 class="subtitle-ap">Faites vous plaisir !</h2>
        <hr>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <p class="subtitle-desti"> Voyager pour <?php echo $destination['location']; ?></p>
                </div>

                <div class="col-sm-7 col-7">
                    <p class="subtitle-desti"> Tours Opérateurs </p>
                </div>
                <div class="col-sm-4">
                    <img src="/assets/img/<?= $destination['img'] ?>" width="100%">
                </div>
                <div class="col-sm-7">
                    <!-- <p>//$$operatorName->getName();</p> -->
                    <div class="row justify-content-center">
                        <div class="col-sm-6 text-edit-color">
                            <div class="text-edit-title">Agence de voyage</div>
                            <hr>
                            <?php
                            foreach ($destinations as $destination) {
                                $operatorName = "operator" . $destination['id_tour_operator'];
                                $location = new Destination($destination['id'], $destination['location'], $destination['price'], $destination['id_tour_operator'], $destination['img']);
                                $$operatorName = new TourOperator($destination['id_tour_operator'], $destination['name'], $destination['grade'], $destination['link'], $destination['is_premium']);
                                echo '
                                <form action="viewReview.php" method="get" name="viewReview' . $destination['name'] . '">
                                    <input type="hidden" class="view-review" name="review" id="review" value="' . $destination['name'] . '">
                                    <div class="text-edit" onClick="viewReview' . $destination['name'] . '.submit();">' . $$operatorName->getName() . '</div>
                                </form>
                                ';
                            }
                            ?>
                        </div>
                        <div class="col-sm-3 text-edit-color-2">
                            <div class="text-edit-title">Prix</div>
                            <hr>
                            <?php
                            foreach ($destinations as $destination) {
                                echo '<div class="text-edit">' . $destination['price'] . ' €</div>';
                            }
                            ?>
                        </div>
                        <div class="col-sm-2 text-edit-color-3">
                            <div class="text-edit-title">Avis</div>
                            <hr>
                            <?php
                            foreach ($destinations as $destination) {
                                if ($destination['grade'] == 5) {
                                    echo '<div class="text-edit-star"> ★★★★★ </div>';
                                } else if ($destination['grade'] == 4) {
                                    echo '<div class="text-edit-star"> ★★★★ </div>';
                                } else if ($destination['grade'] == 3) {
                                    echo '<div class="text-edit-star"> ★★★ </div>';
                                } else if ($destination['grade'] == 2) {
                                    echo '<div class="text-edit-star"> ★★ </div>';
                                } else if ($destination['grade'] == 1) {
                                    echo '<div class="text-edit-star"> ★ </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="background-row">
                <div class="col-sm-4">
                    <!-- <p class="subtitle-desti-color-white">prixphp €</p> -->
                </div>
                <div class="col-sm-7">

                </div>
            </div>
        </div>







        <hr>
        <?php include('../partials/footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>