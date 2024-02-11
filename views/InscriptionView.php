<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ComponentStyle.css">
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
        <br>
        <div class="container">
            <form method="post" id="formInsertClient" action="../controllers/InscriptionCTRL.php">
                <fieldset>
                    <legend>Inscription</legend>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_nom"> Nom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_nom" name="user_nom" value="" required autofocus>
                        </div>
                        <div class="col-2">
                            <label for="user_pseudo"> Pseudo :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_pseudo" name="user_pseudo" value="<?php if (isset($client)) {
                                                                                                echo $client->getPseudo();
                                                                                            } ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_prenom"> Prénom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_prenom" name="user_prenom" value="<?php if (isset($client)) {
                                                                                                echo $client->getPrenom();
                                                                                            } ?>">
                        </div>
                        <div class="col-2">
                            <label for="user_tel"> Téléphone :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="user_tel" name="user_tel" value="<?php if (isset($client)) {
                                                                                        echo $client->getPrenom();
                                                                                    } ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_anniv"> Date de naissance :</label>
                        </div>
                        <div class="col-10">
                            <input type="date" id="user_anniv" name="user_anniv" value="<?php if (isset($client)) {
                                                                                            echo $client->getDateDeNaissance();
                                                                                        } ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_mail">E-mail :</label>
                        </div>
                        <div class="col-3">
                            <input type="email" id="user_mail" name="user_mail" value="<?php if (isset($client)) {
                                                                                            echo $client->getMail();
                                                                                        } ?>">
                        </div>
                        <div class="col-2">
                            <label for="verif_mail">Retapez l'e-mail :</label>
                        </div>
                        <div class="col-3">
                            <input type="email" id="verif_mail" name="verif_mail" value="<?php if (isset($verifMail)) {
                                                                                                echo $verifMail;
                                                                                            } ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_mdp">Mot de passe :</label>
                        </div>
                        <div class="col-3">
                            <input type="password" id="user_mdp" name="user_mdp" value="<?php if (isset($client)) {
                                                                                            echo $client->getMdp();
                                                                                        } ?>">
                        </div>
                        <div class="col-2">
                            <label for="verif_mdp"> Retapez le mot de passe :</label>
                        </div>
                        <div class="col-3">
                            <input type="Password" id="verif_mdp" name="verif_mdp" value="<?php if (isset($verifMdp)) {
                                                                                                echo $verifMdp;
                                                                                            } ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_adresse">Adresse :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_adress" name="user_adresse" size="100" value="<?php if (isset($client)) {
                                                                                                            echo $client->getAdresse();
                                                                                                        } ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="user_cp">Code Postal :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="user_cp" name="user_cp" size="10" value="<?php if (isset($cp)) {
                                                                                                echo $cp;
                                                                                            } ?>" required>
                            <a class=linkButton id="refVille">Valider la ville</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="id_ville">Ville :</label>
                        </div>
                        <div class="col-10">
                            <select name="id_ville" id="id_ville">
                                <?php
                                if (isset($contenuListe)) {
                                    echo $contenuListe;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
            </form>
            <br>
            <br>
            <br>
            <div>
                <button id=btValider>Valider</button>
                <label id="lblbMessage">message</label>
            </div>
            </fieldset>
        </div>
        <?php
        if (isset($message)) {
            echo $message;} ?>
        </form>
    </section>
    <footer>
        <?php
        include '../views/partials/footer.php';?>
    </footer>
    <script type="module" src="../js/Inscription.js"></script>
    <script src="../js/ControleER.js"></script>
</body>
</html>
