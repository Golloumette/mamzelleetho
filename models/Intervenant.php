<?php

class Intervenant {

    // propriété
    private int $idIntervenant;
    private string $nomIntervenant;
    private string $prenomIntervenant;
    private string $telIntervenant;
    private string $mailIntervenant;
    private string $adresseIntervenant;
    private int $idVille;
    private string $siteInternet;
    private string $photoIntervenant;

    // constructeur 
    public function __construct(
        string $nomIntervenant="",
        string $prenomIntervenant="",
        string $telIntervenant="",
        string $mailIntervenant="",
        string $adresseIntervenant="",
        int $idVille=0,
        string $siteInternet="",
        string $photoIntervenant="",
        int $idIntervenant=0)
        {
            $this->nomIntervenant = $nomIntervenant;
            $this->prenomIntervenant = $prenomIntervenant;
            $this->telIntervenant = $telIntervenant;
            $this->mailIntervenant = $mailIntervenant;
            $this->adresseIntervenant = $adresseIntervenant;
            $this->idVille = $idVille;
            $this->siteInternet = $siteInternet;
            $this->photoIntervenant = $photoIntervenant;
            $this->idIntervenant = $idIntervenant;
        }

        




    /**
     * Get the value of idIntervenant
     */
    public function getIdIntervenant(): int
    {
        return $this->idIntervenant;
    }

    /**
     * Set the value of idIntervenant
     */
    public function setIdIntervenant(int $idIntervenant): void
    {
        $this->idIntervenant = $idIntervenant;

    
    }

    /**
     * Get the value of nomIntervenant
     */
    public function getNomIntervenant(): string
    {
        return $this->nomIntervenant;
    }

    /**
     * Set the value of nomIntervenant
     */
    public function setNomIntervenant(string $nomIntervenant): void
    {
        $this->nomIntervenant = $nomIntervenant;

  
    }

    /**
     * Get the value of prenomIntervenant
     */
    public function getPrenomIntervenant(): string
    {
        return $this->prenomIntervenant;
    }

    /**
     * Set the value of prenomIntervenant
     */
    public function setPrenomIntervenant(string $prenomIntervenant): void
    {
        $this->prenomIntervenant = $prenomIntervenant;

      
    }

    /**
     * Get the value of telIntervenant
     */
    public function getTelIntervenant(): string
    {
        return $this->telIntervenant;
    }

    /**
     * Set the value of telIntervenant
     */
    public function setTelIntervenant(string $telIntervenant): void
    {
        $this->telIntervenant = $telIntervenant;


    }

    /**
     * Get the value of mailIntervenant
     */
    public function getMailIntervenant(): string
    {
        return $this->mailIntervenant;
    }

    /**
     * Set the value of mailIntervenant
     */
    public function setMailIntervenant(string $mailIntervenant): void
    {
        $this->mailIntervenant = $mailIntervenant;

      
    }

    /**
     * Get the value of adresseIntervenant
     */
    public function getAdresseIntervenant(): string
    {
        return $this->adresseIntervenant;
    }

    /**
     * Set the value of adresseIntervenant
     */
    public function setAdresseIntervenant(string $adresseIntervenant): void
    {
        $this->adresseIntervenant = $adresseIntervenant;

     
    }

    /**
     * Get the value of idVille
     */
    public function getIdVille(): int
    {
        return $this->idVille;
    }

    /**
     * Set the value of idVille
     */
    public function setIdVille(int $idVille): void
    {
        $this->idVille = $idVille;

       
    }

    /**
     * Get the value of siteInternet
     */
    public function getSiteInternet(): string
    {
        return $this->siteInternet;
    }

    /**
     * Set the value of siteInternet
     */
    public function setSiteInternet(string $siteInternet): void
    {
        $this->siteInternet = $siteInternet;

       
    }

    /**
     * Get the value of photoIntervenant
     */
    public function getPhotoIntervenant(): string
    {
        return $this->photoIntervenant;
    }

    /**
     * Set the value of photoIntervenant
     */
    public function setPhotoIntervenant(string $photoIntervenant): void
    {
        $this->photoIntervenant = $photoIntervenant;

    }
}




?>