<!DOCTYPE html>

<html lang="fr">>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="styleAuthentification.css">
</head>

<body>
    <header>
        <?php
        include '../views/partials/headerCarroussel.php';
        ?>
    </header>
    <hr />
    <nav>
        <?php
        include '../views/partials/nav.php';
        ?>
    </nav>
    <hr />
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
            <form method="POST" action="../controllers/AuthentificationCTRL.php"
             id="formulaireAuthentification">
                <fieldset class="the-fieldset">
                    <legend>Authentification</legend>
                    <div class="row">
                        <div class="col-2">
                            <label for="pseudo"> Pseudo : </label>
                        </div>
                        <div class="col-3">
                            <input type="text" name="pseudo" id="pseudo" placeholder="Identifiant?">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-2">
                            <label for="mdp">Mot de passe :</label>
                        </div>
                        <div class="col-3">
                            <input type="password" name="mdp"  id="mdp" placeholder="Mot de passe ?">
                        </div>
                    </div><br>
                    <label>Afficher le mot de passe</label>
                    <input type="checkbox" name="afficherMdp"  id="afficherMdp"><br>
                    <label>Se souvenir de moi</label>
                    <input type="checkbox" name="memory"><br>
                    
                    <input type="reset" value="Réinitialiser">

                    <input type="submit" value="Valider" id="btSubmit">
                    <a href="../views/MotDePasseOublieView.php">Mot de passe oublié </a><br>
                   
                </fieldset>

            </form>
            <label id="lblMessage"></label>
            </div>
            <div class="col-6">
                 <?php
        // Si LA VARIALBE $message existe alors on affiche son contenu (Sa Valeur)
        if (isset($message)) {
           ?> <img src="../images/cheval_interdit.jpg" alt="" width="200px"> <br> <?php
            echo $message;
        }
        ?>
        
            </div>
            </div>
        </div>
        <br><br>

       
        <br><br>

       
        </label>
        <?php
        ?>
    </section>



    <hr />



    <footer>
        <?php
        include "../views/partials/footer.php";
        ?>
    </footer>
    <script src="../js/Authentification.js"></script>
</body>



</html>