/*
 * Inscription.js
 */
function init() {
  document.getElementById("refVille").addEventListener("click", listeVille);
  document.getElementById("btValider").addEventListener(
    "click",
    (event) => {
      event.preventDefault();
      listeVille();
      valider();
    } /// corps de la fonction anonyme
  ); /// addeventListener
} /// init
function listeVille() {
  // Création d'un objet JSON
  let cp = document.getElementById("user_cp").value;
  let params = { cp: cp };
  let searchParams = new URLSearchParams(params).toString();
  const URL = `http://localhost/ProjetMamzelleOuiOui/controllers/InscriptionSelectCpCTRL.php?${searchParams}`;
  fetch(URL)
    .then((response) => {
      return response.json();
    })
    .then(
      (result) => {
        // Tableau ordinal d’objets JSON
        for (let i = 0; i < result.length; i++) {
          let option = document.createElement("option");
          option.value = result[i].id_ville;
          option.innerHTML = result[i].nom_commune;
          document.getElementById("id_ville").appendChild(option);
        }
      },
      (error) => {
        console.log("ERROR");
        console.log(error);
        document.getElementById("lblMessage").innerHTML = error;
      }
    );
}
function valider() {
  let formElement = document.getElementById("formInsertClient");
  let formaData = new FormData(formElement);
  const URL = formElement.action;
  fetch(URL, {
    method: "POST",
    body: formaData,
  })
    .then((response) => {
      return response.json();
    })
    .then(
      (result) => {
        // Un objet JSON
        console.log("result", result);
        if (result === 1) {
          document.getElementById("lblMessage").innerHTML = "Insertion réussie";
          window.location.replace(
            "/ProjetMamzelleOuiOui/views/MonCompteView.php"
          );
        } else {
          // erreur : duplicate key ...
          document.getElementById("lblMessage").innerHTML = result;
        }
      },
      (error) => {
        console.log("ERROR");
        console.log(error);
        document.getElementById("lblMessage").innerHTML = error;
      }
    );
} ///fin fonction valider
window.onload = init;
