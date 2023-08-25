/*
 * Inscription.js
 */
import ObjectClient from "./ObjetClient";

function init() {
  console.log("init");
  document.getElementById("user_pseudo").value = "pseudoTest2";
  document.getElementById("user_tel").value = "0604040404";
  document.getElementById("user_anniv").value = "1986-05-21";
  document.getElementById("user_mail").value = "test2@orange.fr";
  document.getElementById("verif_mail").value = "test2@orange.fr";
  document.getElementById("user_mdp").value = "mdp12";
  document.getElementById("verif_mdp").value = "mdp12";
  document.getElementById("user_adress").value = "adress";
  document.getElementById("user_cp").value = "59510";

  document.getElementById("refVille").addEventListener("click", listeVille);
  document.getElementById("btValider").addEventListener(
    "click",
    (event) => {
      event.preventDefault();
      recupSaisie();
      emptyField();
      verification();
      valider();
    } /// corps de la fonction anonyme
  ); /// addeventListener
} /// init

function listeVille() {
  // Création d'un objet JSON
  let cp = document.getElementById("user_cp").value;
  let params = { cp: cp };

  // https://developer.mozilla.org/fr/docs/Web/API/URLSearchParams

  // L’interface URLSearchParams définit des méthodes utilitaires pour travailler avec la chaîne de requête (les paramètres GET) d’une URL.

  let searchParams = new URLSearchParams(params).toString();
  const URL = `http://localhost/ProjetMamzelleOuiOui/controllers/InscriptionSelectCpCTRL.php?${searchParams}`;
  fetch(URL)
    .then((response) => {
      console.log("RESPONSE");
      console.log(response);
      return response.json();
    })
    .then(
      (result) => {
        // Tableau ordinal d’objets JSON
        console.log("RESULT");
        console.log(result);
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

function recupSaisie() {
  let client = new ObjectClient();
  // setter les variables
  client.nom = document.getElementById("user_nom").value;
  client.prenom = document.getElementById("user_prenom").value;
  client.date_Naissance = document.getElementById("user_anniv").value;
  client.mail = document.getElementById("verif_mail").value;
  client.mdp = document.getElementById("user_mdp").value;
  client.verif_mdp = document.getElementById("verif_mdp").value;
  client.adress = document.getElementById("user_adresse").value;
  client.id_ville = document.getElementById("id_ville").value;
  client.tel = document.getElementById("user_tel").value;
  console.log("nom client" + client.nom + "prenom client" + client.prenom);
  return client;

  // //   return objetClient
}

function emptyField(client) {
  // on vérifie que tous les champs sont complétés

  /**if(client.getnom.trim() === "" || prenom.trim() === "" || anniv.trim() === ""
      || mail.trim() === "" || verifmail.trim() === "" || pseudo.trim() === ""
      || mdp.trim() === "" || verifMdp.trim() === "" || adresse.trim() === ""
      || tel.trim() === "") {
         document.getElementById("lblMessage").innerHTML = "Toutes les saisies sont obligatoires "

      } else {
         document.getElementById("lblMessage").innerHTML = "Tout va bien "
      }**/
  return (
    client.trim() === "" ||
    prenom.trim() === "" ||
    anniv.trim() === "" ||
    mail.trim() === "" ||
    verifmail.trim() === "" ||
    pseudo.trim() === "" ||
    mdp.trim() === "" ||
    verifMdp.trim() === "" ||
    adresse.trim() === "" ||
    tel.trim() === ""
  );
}

function verification(client) {
  console.log("entrée dans la fonction verification");
  let message = "";
  let nom = document.getElementById("user_nom").value;
  let prenom = document.getElementById("user_prenom").value;

  console.log("valeur de nom: " + nom);
  let ok = isNomAvecAccent(nom);
  //  si faux
  if (!ok) {
    message += "Nom incorrect";
  } else {
    message += "nom correct";
  }
  ok = isNomAvecAccent(prenom);
  if (!ok) {
    message += "Prénom incorrect";
  } else {
    message += "prénom correct";
  }
  let mail = document.getElementById("user_mail").value;
}

function valider() {
  console.log("entrée dans la fonction valider");
  let message = "";
  let nom = document.getElementById("user_nom").value;
  let prenom = document.getElementById("user_prenom").value;

  console.log("valeur de nom: " + nom);
  let ok = isNomAvecAccent(nom);
  //  si faux
  if (!ok) {
    message += "Nom incorrect";
  } else {
    message += "nom correct";
  }
  ok = isNomAvecAccent(prenom);
  if (!ok) {
    message += "Prénom incorrect";
  } else {
    message += "prénom correct";
  }

  let pseudo = document.getElementById("user_pseudo").value;

  document.getElementById("lblMessage").innerHTML = message;
  // let anniv = document.getElementById("user_anniv").value

  // let verifmail = document.getElementById("verif_mail").value

  // let mdp = document.getElementById("user_mdp").value
  // let verifMdp = document.getElementById("verif_mdp").value
  // let adresse = document.getElementById("user_adresse").value
  // let id_ville = document.getElementById("id_ville").value
  // let tel = document.getElementById("user_tel").value

  // let formElement = document.getElementById("formInsertClient")
  // let formaData = new FormData(formElement)
  // const URL = formElement.action
  // fetch(URL, {

  //    method: 'POST',
  //    body: formaData
  // }).then(response => {

  //    console.log("RESPONSE")

  //    console.log(response)

  //    return response.json()

  // }).then(result => {

  //    console.log("RESULT")

  //    // Un objet JSON

  //    console.log(result)

  //    let message = ""

  //    if (result.affected == 1) {

  //       message = "Insertion réussie"

  //    } else {

  //       // erreur : duplicate key ...

  //       message = result.affected

  //       //message = "Problème d'insertion"

  //    }

  //    document.getElementById("lblMessage").innerHTML = message

  // },

  //    error => {

  //       console.log("ERROR")

  //       console.log(error)

  //       document.getElementById("lblMessage").innerHTML = error

  //    }
  // )
} ///fin fonction valider

window.onload = init;
