<?php 
/**
 * Compte Bancaire (hérite de la classe Compte)
 */

class CompteCourant extends Compte
{

    private $decouvert;
    /**
     * Constructeur de compte courant
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant à l'ouverture
     * @param integer $decouvert découvert autorisé
     */
    public function __construct(string $nom, float $montant, int $decouvert)
    {
        //on transfère les informations nécessaire au constructeur de compte
        parent::__construct($nom,$montant);
        $this->decouvert = $decouvert;
    }
    /**
     * Setter Découvert
     *
     * @param integer $montant
     * @return void
     */
    public function setDecouvert(int $montant): self
    {
        if($montant>=0){
            $this->decouvert = $montant;
        }
        return $this;
        
    }
    /**
     * Getter Découvert
     *
     * @return integer
     */
    public function getDecouvert(): int
    {
        return $this->decouvert;
    }

    public function retirer(float $montant){

        //On vérifie si le découvert permet le retrait

        if($montant>0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -=$montant;
        }else{
            echo "Solde insuffisant";
        }
    }   
}