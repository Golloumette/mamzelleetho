<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ComponentStyle.css">

    <title>MamzelleAccueil</title>
</head>

<body>
    <header>
        <?php
        include '../views/partials/headerCarroussel.php';
        ?>
    </header>
    <nav>
        <?php
        include '../views/partials/nav.php';
        ?>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <h2>Bienvenue sur le site de Mamzelle Etho </h2>
                <p>Si vous êtes ici c'est parce que vous avez une vision plus éthologique de l'équitation ou que vous avez envie de décrouvrir ce qu'est l'équitation éthologique</p>
            </div>
            <h2>Qu'est ce que l'éthologie équine ?</h2>
            <p>L'éthologie équine est la branche de l'éthologie, science du comportement, qui étudie les chevaux, aussi bien en ce qui concerne le
                comportement en milieu naturel que les relations intra-spécifiques (entre chevaux) et inter-spécifiques (avec les autres espèces), parfois en milieu non-naturel.</p>
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/anneso.jpg" class="card-img-top" alt="presentation">
                        <div class="card-body">
                            <h5 class="card-title">Qui suis je ?</h5>
                            <p class="card-text">Ma présentation et mon parcours</p>
                            <a class="linkButton" href="../views/PresentationView.php" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/event.jpg" class="card-img-top" alt="evenement">
                        <div class="card-body">
                            <h5 class="card-title">Mes événements !!!</h5>
                            <p class="card-text">Inscrivez-vous </p>
                            <a class="linkButton" href="../views/PresentationView.php" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/cours.jpg" class="card-img-top" alt="cours">
                        <div class="card-body">
                            <h5 class="card-title">Mes cours individuels</h5>
                            <p class="card-text">Ce que je propose </p>
                            <a class="linkButton" href="../controllers/PrestationCTRL.php">Aller voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <footer>
        <?php
        include '../views/partials/footer.php';

        ?>

    </footer>
</body>

</html>