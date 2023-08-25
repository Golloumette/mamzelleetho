<?php

// Ville.php

class Ville{
    // propriétés
    private int $idVille;
    private string $codeCommuneInsee;
    private string $codePostal;
    private int $latitude;
    private int $longitude;
    private string $nomCommune;
    private string $codeDepartement;
    private string $nomDepartement;


    // Constructeur
    public function __construct(int $idVille =0,string $codeCommuneInsee ="",string $codePostal="",int $latitude=0,int $longitude=0,string $nomCommune="",string $codeDepartement="",string $nomDepartement="") {
        $this->idVille = $idVille;
        $this->codeCommuneInsee = $codeCommuneInsee;
        $this->codePostal = $codePostal;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->nomCommune = $nomCommune;
        $this->codeDepartement = $codeDepartement;
        $this->nomDepartement = $nomDepartement;
    }


    /**
     * Get the value of idVille
     */
    public function getIdVille(): int
    {
        return $this->idVille;
    }


    public function setIdVille(int $idVille): void
    {
        $this->idVille = $idVille;

       
    }

    /**
     * Get the value of codeCommuneInsee
     */
    public function getCodeCommuneInsee(): string
    {
        return $this->codeCommuneInsee;
    }

    /**
     * Set the value of codeCommuneInsee
     */
    public function setCodeCommuneInsee(string $codeCommuneInsee): void
    {
        $this->codeCommuneInsee = $codeCommuneInsee;

        
    }

    /**
     * Get the value of codePostal
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;

       
    }

    /**
     * Get the value of latitude
     */
    public function getLatitude(): int
    {
        return $this->latitude;
    }

    /**
     * Set the value of latitude
     */
    public function setLatitude(int $latitude): void
    {
        $this->latitude = $latitude;

        
    }

    /**
     * Get the value of longitude
     */
    public function getLongitude(): int
    {
        return $this->longitude;
    }

    /**
     * Set the value of longitude
     */
    public function setLongitude(int $longitude): void
    {
        $this->longitude = $longitude;

       
    }

    /**
     * Get the value of nomCommune
     */
    public function getNomCommune(): string
    {
        return $this->nomCommune;
    }

    /**
     * Set the value of nomCommune
     */
    public function setNomCommune(string $nomCommune): void
    {
        $this->nomCommune = $nomCommune;

       
    }

    /**
     * Get the value of codeDepartement
     */
    public function getCodeDepartement(): string
    {
        return $this->codeDepartement;
    }

    /**
     * Set the value of codeDepartement
     */
    public function setCodeDepartement(string $codeDepartement): void
    {
        $this->codeDepartement = $codeDepartement;

       
    }

    /**
     * Get the value of nomDepartement
     */
    public function getNomDepartement(): string
    {
        return $this->nomDepartement;
    }

    /**
     * Set the value of nomDepartement
     */
    public function setNomDepartement(string $nomDepartement): void
    {
        $this->nomDepartement = $nomDepartement;

        
    }

    // // setter
    // public function setIdVille(int $idVille) : void {$this->idVille = $idVille;}
    // public function setCodeCommuneInsee(string $codeCommuneInsee) : void {$this->codeCommuneInsee = $codeCommuneInsee;}
    
    // // getter
    // public function getIdVille() : int {return $this->idVille;}
    // public function getCodeCommuneInsee() : string {return $this->codeCommuneInsee;}
    // public function getNomCommune() : string {return $this->nomCommune;}    
}

?>
