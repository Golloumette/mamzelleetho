<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
    <title>Mam'Zelle Etho</title>
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
        <h1>Les prestations  </h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code Produit</th>
                            <th>Nom prestation</th>
                            <th>Prix</th>
                            <th>Ajoute au panier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                    
                            echo $tbody;              
                        ?>   
                    </tbody>
                </table>
                <a href="../controllers/PanierVoir.php">Voir mon panier</a>
        </div>
    </section>

    <footer>
        <?php
        include '../views/partials/footer.php';

        ?>

    </footer>
</body>

</html>