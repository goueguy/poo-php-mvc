<?php 
/**
 * Classe Compte Bancaire
 */
class Compte
{
    //Propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    private $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    private $solde;

    //Constantes
    const TAUX_INTERETS = 5;

    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom
     * @param string $montant
     */
    
    public function __construct(string $nom,float $montant=100)
    {
        //on attribue le nom à la propriété titulaire de l'instance créee
        $this->titulaire = $nom;
        $this->solde = $montant + ($montant * self::TAUX_INTERETS/100);
       //on attribue le montant à la propriété solde de l'instance créee
       
    }
    /**
     * Méthode magique pour la conversion en chaine de caractères
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }
    //Accesseurs
    /**
     * Getter de titulaire - Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }
    //setteurs
    /**
     * Modifie le nom du titulaire et
     * retourne l'objet
     *
     * @param string $nom Nom du tilulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        //on vérifie si on a un titulaire
        if($nom != ""){

            $this->titulaire=$nom;
        }
        return $this;
    }
    /**
     * Accesseur 
     * Getteur de solde - retourne le solde en cours
     *
     * @return float 
     */
    public function getSolde(): float
    {
        return $this->solde;
    }
    /**
     * 
     * Modifie le solde du compte et 
     * retourne l'objet
     *
     * @param float $solde solde du compte
     * @return Compte Compte Bancaire
     */
    public function setSolde(float $montant): self
    {
        if($montant >= 0){

            $this->solde = $montant;
        }
        return $this;
    }

    /**
     * Déposer l'argent sur le compte bancaire
     *
     * @param float $montant montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        //On vérifie si le  montant est positif

        if($montant > 0)
        {
            $this->solde += $montant;
        }
    }
    /**
     * Retirer un montant du solde du Compte Bancaire
     *
     * @param float $montant
     * @return void
     */
    public function retirerMontant(float $montant)
    {
        //On vérifie si le  montant est positif et le solde
        if($this->solde >= $montant && $montant > 0)
        {
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
        //echo $this->decouvert();
    }
    private function decouvert(){
        if($this->solde < 0){
            return "Vous êtes à découvert ! Attention";
        }else{
            return "Vous n'êtes pas à découvert";
        }
    }
    /**
     * Retourner une chaine de caractère affichant le solde
     *
     * @return void
     */
    public function afficherSolde()
    {
        return " Le solde du compte est de : ". $this->solde ." FCFA";
    }

    
}
