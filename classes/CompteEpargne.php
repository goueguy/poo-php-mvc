<?php 
/**
 * Compte avec taux d'intérêts
 */
class CompteEpargne extends Compte
{
    /**
     * Taux d'intérets de compte
     *
     * @var int
     */
    private $taux_interets;
    /**
     * Constructeur du compte épargne
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     * @param integer $taux Taux d'intérêts
     */
    public function __construct(string $nom, float $montant, int $taux)
    {
        //on transfère les valeurs nécessaires au constructeur parent
        parent::__construct($nom,$montant);
        $this->taux_interets = $taux;
    }

    /**
     * Get taux d'intérets de compte
     *
     * @return  int
     */ 
    public function getTauxInterets(): int
    {
        return $this->taux_interets;
    }

    /**
     * Set taux d'intérets de compte
     *
     * @param  int  $taux_interets  Taux d'intérets de compte
     *
     * @return  self
     */ 
    public function setTauxInterets(int $taux_interets): self
    {
        if($taux_interets >= 0){
            $this->taux_interets = $taux_interets;
        }
        return $this;
    }

    public function verserInterets()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interets /100);
    }
}