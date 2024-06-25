<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Nav Barre</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navBar.css">
</head>

<body>
  <div class="container" id="navBar">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#366464;">
      <div class="nav-text-localisation" id="navTextLocalisation">Accueil</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="../views/AccueilView.php" data-page="Accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../views/InscriptionView.php" data-page="Inscription">Inscription</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="../controllers/AuthentificationAfficherCTRL.php" data-page="Authentification">Authentification</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="../views/MonCompteView.php" data-page="Mon Compte">Mon compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../views/PresentationView.php" data-page="Presentation">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../controllers/PrestationCTRL.php" data-page="Prestation">Prestation</a>
          </li>
        </ul>

          <button type="submit" class="btn btn-outline-white btn-sm nav-bar-right" name="deconnexion" hidden>Déconnexion </button>

      </div>
    </nav>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"defer></script>
  <script src="../js/NavBar.js"></script>
</body>

</html>