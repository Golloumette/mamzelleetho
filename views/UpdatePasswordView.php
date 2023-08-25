<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Mam'Zelle Etho</title>
</head>

<body>
    <header>
        <?php
        include '../views/partials/header.php';

        ?>
    </header>
    <nav>
        <?php
        include '../views/partials/nav.php';

        ?>
    </nav>

    <section> <br><br><br>
        <div class="container">
            <div class="row">

                <form action="../controllers/UpdatePassword.php" method="post">
                    <label for="updateMdp">Modifier le mot de passe</label>
                    <input type="text" name="updateMdp">
                    <input type="hidden" name="id_client" value="<?php echo $id_client; ?>">
                    <input type="submit" name="btUpdateMdp" value="Modifier">
                </form>
                <?php if (isset($message)) {
                    echo $message;
                } ?>


                <br><br><br>
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