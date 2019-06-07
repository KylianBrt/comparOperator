<?php
include('../layout/bdd.php');
include('../partials/Destination.php');
include('../partials/Manager.php');
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
    <div id="main">
        <?php include('../partials/navbar.php'); ?>
        <header id="body-home">
            <a class="tusersarien">.</a>
            <h1 class="title-op">ComparOperator</h1>
            <h2 class="subtitle-op">TRAVEL THE WORLD</h2>
        </header>

        <h2 class="subtitle-ap">Promotions</h2>

        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="multi_item">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/fram.png" alt="1 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/tui.jpg" alt="2 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/clubmed.png" alt="3 slide"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/jet-tours.jpg" alt="4 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/kappa-c.png" alt="5 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="/assets/img/logo.png" alt="6 slide"></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h2 class="subtitle-ap">Toutes nos destinations en un seul clic !</h2>

        <div class="container-fluid container-color">
            <div class="row justify-content-center">
                <?php
                $tableauDestinations = ['Paris', 'Ajaccio', 'Newyork', 'Tokyo', 'Sydney'];

                foreach ($tableauDestinations as $tableauDestination) {
                    echo    '<div class="col-lg-3 col-md-2 carde">
                            <form action="viewDestinations.php" method="get" name="viewDestination' . $tableauDestination . '">
                                <div class="image-destination">
                                    <input type="hidden" class="add-destination" name="destination" id="destination" value="' . $tableauDestination . '">
                                    <img src="../assets/img/' . $tableauDestination . '.jpg" width="100%" height="250px" class="carde-img">
                                    <div class="carde-text" onClick="viewDestination' . $tableauDestination . '.submit();">
                                        <div class="carde-title">
                                            ' . $tableauDestination . '
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>';
                }
                ?>

            </div>
        </div>
    </div>
    <hr>
    <?php include('../partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery-3.4.0.min.js"></script>
</body>

</html>