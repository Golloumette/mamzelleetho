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
       <?php
       if(isset($message)){
        echo $message;
       }
       
       ?>
       <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code Produit</th>
                            <th>Nom prestation</th>
                            <th>Prix</th>
                            <th>Supprimer</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php                    
                            if(isset($table)){
                                echo $table; }
                                     
                        ?>   
                    </tbody>
                </table>
                <form action="../controllers/PanierSupprAllCTRL.php" method="get">
                 <!-- <a href="../controllers/PanierCTRL.php?" name="emptyBasket" >Vider le panier</a> -->
                 <button type="submit" name="emptyBasket" value="emptyBasket">Vider le panier </button> 
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