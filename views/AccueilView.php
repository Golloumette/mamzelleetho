<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamzelle Etho Accueil</title>
    <meta name="description" content="L'éthologie équine une autre forme d'équitation pour le bien être du cheval">
    <link rel="stylesheet" href="../css/screen.css?v=1.0">
    <link rel="stylesheet" href="../css/ComponentStyle.css">
    <link rel="icon" href="../images/chevalFav.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
            <h1>Qu'est ce que l'éthologie équine ?</h1>
            <p>L'éthologie équine est la branche de l'éthologie, science du comportement, qui étudie les chevaux, aussi bien en ce qui concerne le
                comportement en milieu naturel que les relations intra-spécifiques (entre chevaux) et inter-spécifiques (avec les autres espèces), parfois en milieu non-naturel.</p>
            <div class="container-card">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/anneso2.jpg" class="card-img-top" alt="cavalier et cheval" title="cavalier sur son cheval marron">
                        <div class="card-body">
                            <h2 class="card-title">Qui suis je ?</h2>
                            <p class="card-text">Ma présentation et mon parcours</p>
                            <a class="linkButton" href="../views/PresentationView.php" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/event.webp" class="card-img-top" alt="cheval au pas avec cavalier sur son dos" title="cavalier et cheval au pas">
                        <div class="card-body">
                            <h2 class="card-title">Mes événements !!!</h2>
                            <p class="card-text">Inscrivez-vous </p>
                            <a class="linkButton" href="../views/PresentationView.php" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/cours.webp" class="card-img-top" alt="cheval qui marche" title="cheval qui travaille à pied avec le cavalier">
                        <div class="card-body">
                            <h2 class="card-title">Mes cours individuels</h2>
                            <p class="card-text">Ce que je propose </p>
                            <a class="linkButton" href="../controllers/PrestationCTRL.php">Aller voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="vignette-phone">
            <div class="square"><a href="../controllers/AuthentificationAfficherCTRL.php" data-page=Authentification style="text-decoration: none;color: black">Authentification</a></div>
            <div class="square"><a href="../views/InscriptionView.php" data-page="Inscription" style="text-decoration: none;color: black" >Inscription</a></div>
            <div class="square"><a href="../views/PresentationView.php" data-page="Presentation" style="text-decoration: none;color: black">Présentation</a></div>
            <div class="square" ><a href="../controllers/PrestationCTRL.php" data-page="Prestation" style="text-decoration: none;color: black">Prestation</a></div>
        <div>
        </div>
    </section>
    <footer>
        <?php
        include '../views/partials/footer.php';
        ?>
    </footer>
    <script src="../js/NavBar.js"></script>
</body>
</html>