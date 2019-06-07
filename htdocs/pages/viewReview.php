<?php
include('../layout/bdd.php');
include('../partials/Destination.php');
include('../partials/Manager.php');
include('../partials/TourOperator.php');
include('../partials/Review.php');

$manager = new Manager($bdd);
$operators = $manager->getReviewByOperator($_GET['review']);

foreach ($operators as $operator) {
    $reviews = new Review(
        $operator['id'],
        $operator['message'],
        $operator['author'],
        $operator['id_tour_operator']
    );

    $operatorName = new TourOperator(
        $operator['id_tour_operator'],
        $operator['name'],
        $operator['grade'],
        $operator['link'],
        $operator['is_premium']
    );
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComparOperator | Avis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/png" href="../assets/img/logofirst.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Quicksand&display=swap" rel="stylesheet"> 
</head>

<body>

<style>
input[name=author] {
    font-size: 0.7em;
    height: 20px;
}

input[name=message]{
    font-size: 0.7em;
    height: 20px;
}

</style>
    <div id="main">
        <?php include('../partials/navbar.php'); ?>
        <header id="body-home">
            <a class="tusersarien">.</a>
            <h1 class="title-op">ComparOperator</h1>
            <h2 class="subtitle-op">TRAVEL THE WORLD</h2>
        </header>
        <h2 class="subtitle-ap"><?= $operator['name'] ?></h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 view-review-user">
                    <div class="text-edit-title">Rédiger un commentaire</div>
                    <hr>
                    <form action="../layout/traitementReview.php" method="post" name="viewReview">
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text" id="icon-op"></i>
                            <input type="text" maxlength="16" class="form-control" name="author" id="pseudoUser" placeholder="Pseudonyme" required>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-comment prefix grey-text" id="icon-op"></i>
                            <input type="text" class="form-control" name="message" id="textUser" placeholder="Écrire un message.." required>
                            <input type="hidden" name="id_tour_operator" value="<?= $operator['id_tour_operator'] ?>">
                        </div>
                        <div class="text-center py-4">
                            <button type="submit" class="btn btn-outline-pink"> Envoyer <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 view-review-user">
                    <div class="view-review-user-commentaire">
                        <div class="text-edit-title">Commentaires</div>
                        <hr>
                        <div class="review-op"><?php
                                                foreach ($operators as $operator) {
                                                    $reviews = new Review(
                                                        $operator['id'],
                                                        $operator['message'],
                                                        $operator['author'],
                                                        $operator['id_tour_operator']
                                                    );

                                                    $operatorName = new TourOperator(
                                                        $operator['id_tour_operator'],
                                                        $operator['name'],
                                                        $operator['grade'],
                                                        $operator['link'],
                                                        $operator['is_premium']
                                                    );
                                                    echo '<b><p class="comment-op">' . $reviews->getAuthor() . '</b> : ' . $reviews->getMessage() . '</p>';
                                                } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 view-review-user">
                    <div class="text-edit-title">Avis</div>
                    <hr>
                    <div class="review-op"><?php
                                            if ($operator['grade'] == 5) {
                                                echo "★★★★★";
                                            } else if ($operator['grade'] == 4) {
                                                echo "★★★★";
                                            } else if ($operator['grade'] == 3) {
                                                echo "★★★";
                                            } else if ($operator['grade'] == 2) {
                                                echo "★★";
                                            } else if ($operator['grade'] == 1) {
                                                echo "★";
                                            }
                                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>