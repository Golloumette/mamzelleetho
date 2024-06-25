<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    
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
         <br><br><br>
        <div class="container">
            <div class="row">
               
      <form action="../controllers/PasswordReinitCTRL.php" method="post">
        <label for="mail"> Saisissez votre mail : </label>
        <input type="mail" name="user_mail" size="50" value="golloumette59@gmail.com">
        <input type="submit" value="Réinitialiser le mot de passe" name="btValider">
      </form>
                <?php if(isset($result)){echo $result->getNom();}?>
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