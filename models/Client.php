<?php

class Client {
    // Propriété
    private int $idClient;
    private string $nom;
    private string $prenom;
    private string $dateDeNaissance;
    private int $idVille;
    private string $adresse;
    private string $pseudo;
    private string $mdp;
    private string $mail;
    private string $tel;
    private string $dateInscription;
    private string $photo;
    // constructeur
    public function __construct(int $idClient
    =0,string $nom ="",string $prenom="",string $dateDeNaissance="",int $idVille=0,
    string $adresse="",string $pseudo="",string $mdp="",string $mail="",string $tel="",string $dateInscription="",string $photo="")
    {
        $this->idClient=$idClient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->idVille = $idVille;
        $this->adresse = $adresse;
        $this->pseudo =$pseudo;
        $this->mdp = $mdp;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->dateInscription = $dateInscription;
        $this->photo = $photo;

    }
    // Les GETTERS ET SETTERS des attributs
    public function getIdClient(): int
    {
        return $this->idClient;
    }
    public function setIdClient(int $idClient): void
    {
        $this->idClient = $idClient;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance(string $dateDeNaissance): void
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }
    public function getIdVille(): int
    {
        return $this->idVille;
    }
    public function setIdVille(int $idVille): void
    {
        $this->idVille = $idVille;
    }
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;

    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;

    }
    public function getMdp(): string
    {
        return $this->mdp;
    }
    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;

    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;

    }

    public function getTel(): string
    {
        return $this->tel;
    }

    public function setTel(string $tel): void
    {
        $this->tel = $tel;

    }

    public function getDateInscription(): string
    {
        return $this->dateInscription;
    }

    public function setDateInscription(string $dateInscription): void
    {
        $this->dateInscription = $dateInscription;

    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;

    }
}
?>
