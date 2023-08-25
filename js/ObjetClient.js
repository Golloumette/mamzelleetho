export default class ObjectClient {
  nom = "";
  prenom = "";
  pseudo = "";
  mail = "";
  anniv = "";
  verif_mail = "";
  mdp = "";
  verif_mdp = "";
  adress = "";
  cp = "";

  get nom() {
    return this.nom;
  }

  set nom(x) {
    this.nom = x;
  }

  get prenom() {
    return this.prenom;
  }

  set prenom(prenom) {
    this.prenom = prenom;
  }
}
