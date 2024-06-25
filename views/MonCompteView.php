<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/screen.css?v=1.0">
    <link rel="stylesheet" href="../css/ComponentStyle.css">
    <link rel="icon" href="../images/chevalFav.PNG">
    <title>Mon Compte</title>
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
          <form method="post" id="formModifCompte">
                <fieldset>
                    <legend>Mes informations</legend>
                    <br>
                    <input type="hidden" name=id_client value="<?php echo $message["id_client"] ?>">
                    <div class="row">
                        <div class="col-2">
                            <label for="user_nom"> Nom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_nom" name="user_nom" value="<?php echo $message["nom"] ?>">
                        </div>
                        <div class="col-2">
                            <label for="user_pseudo"> Pseudo :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_pseudo" name="user_pseudo" value="<?php echo $message["pseudo"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_prenom"> Prénom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_prenom" name="user_prenom" value="<?php echo $message["prenom"] ?>">
                        </div>
                        <div class="col-2">
                            <label for="user_tel"> Téléphone :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_tel" name="user_tel" value="<?php echo $message["tel"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_anniv"> Date de naissance :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_anniv" name="user_anniv" value="<?php echo $message["date_de_naissance"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_mail">E-mail :</label>
                        </div>
                        <div class="col-3">
                            <input type="email" id="user_mail" name="user_mail" value="<?php echo $message["mail"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_mdp">Mot de passe :</label>
                        </div>
                        <div class="col-3">
                            <input type="password" id="user_mdp" name="user_mdp" value="<?php echo $message["mdp"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_adresse">Adresse :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_adresse" name="user_adresse" size="100" value="<?php echo $message["adresse"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_cp">Code Postal :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_cp" name="user_cp" size="10" value="<?php echo $message["cp"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_ville">Ville :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_ville" name="user_ville" size="50" value="<?php echo $message["ville"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_photo">Ajouter une photo de vous ou votre cheval :</label>
                        </div>
                        <div class="col-10">
                            <input type="file" id="user_photo" name="user_photo" accept="image/jpeg, image/png" size="1000">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="submit" value="modifier mes informations" name="btModifier">
                    </div>
                </fieldset>
            </form>
      </div>
    </section>
    <footer>
        <?php
        include '../views/partials/footer.php';

        ?>

    </footer>
</body>

</html>