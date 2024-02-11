<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navBar.css">
</head>

<body>
  <div class="container" id="navBar">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#366464;">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="../controllers/AccueilCTRL.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../views/InscriptionView.php">Inscription</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="../controllers/AuthentificationAfficherCTRL.php">Authentification</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="../views/MonCompteView.php">Mon compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../views/PresentationView.php">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../controllers/PrestationCTRL.php">Prestation</a>
          </li>
          <button type="submit" class="btn btn-outline-white btn-sm nav-bar-right" name="deconnexion">Déconnexion </button>


        </ul>
      </div>
    </nav>
  </div>
</body>

</html>