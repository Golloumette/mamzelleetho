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
        include '../views/partials/header.php';
        

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
            <form method="post" action="../controllers/IntervenantInsertCTRL.php">
                <fieldset>
                    <legend>Ajouter un intervenant</legend>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="nom"> Nom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="nom" name="nom" value="booth">
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="prenom"> Prénom :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="prenom" name="prenom" value="andy">
                        </div>
                        <div class="col-2">
                            <label for=""> Téléphone :</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="tel" name="tel" value="07.45.53.00.00">
                        </div>
                    </div>
                                   
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="mail">E-mail :</label>
                        </div>
                        <div class="col-3">
                            <input type="email" id="mail" name="mail" value="gollou@gmail.com">
                        </div>
                        <div class="col-2">
                            <label for="verifmail">Retapez l'e-mail :</label>
                        </div>
                        <div class="col-3">
                            <input type="email" id="verif_mail" name="verif_mail" value="gollou@gmail.com">
                        </div>
                    </div>
                    <br>
                   
                    <div class="row">
                        <div class="col-2">
                            <label for="adresse">Adresse :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="adresse" name="adresse" size="100" value="rue des intervenant">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="cp">Code Postal :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="cp" name="cp" size="10" value="69100">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="ville">Ville :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="ville" name="ville" size="50" value="Chevalland">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="site_internet">Adresse du site internet :</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="site_internet" name="site_internet" size="50" value="https://www.andybooth.fr/">
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-2">
                            <label for="adresse">Ajouter une photo de l'intervenant :</label>
                        </div>
                        <div class="col-10">
                            <input type="file" id="photo" name="photo" accept="image/jpeg, image/png" size="1000">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="submit" value="valider">
                    </div>
                </fieldset>
        </div>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
        </form>
        
       

    

    </section>

    <footer>
        <?php
        include '../views/partials/footer.php';

        ?>

    </footer>
</body>

</html>