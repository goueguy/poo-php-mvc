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
    public $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom
     * @param string $montant
     */
    
    public function __construct(string $nom,float $montant=100){
        //on attribue le nom à la propriété titulaire de l'instance créee
        $this->titulaire = $nom;
        $this->solde = $montant;
       //on attribue le montant à la propriété solde de l'instance créee
    }
    /**
     * Déposer l'argent sur le compte bancaire
     *
     * @param float $montant montant déposé
     * @return void
     */
    public function deposer(float $montant){
        //On vérifie si le  montant est positif

        if($montant > 0){
            $this->solde += $montant;
        }
    }
    /**
     * Retirer un montant du solde du Compte Bancaire
     *
     * @param float $montant
     * @return void
     */
    public function retirerMontant(float $montant){
        //On vérifie si le  montant est positif et le solde
        if($this->solde >= $montant && $montant > 0){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }
    /**
     * Retourner une chaine de caractère affichant le solde
     *
     * @return void
     */
    public function afficherSolde(){
        return " Le solde du compte est de : ". $this->solde ." FCFA";
    }

}
