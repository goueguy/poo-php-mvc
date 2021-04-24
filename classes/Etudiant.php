<?php 

class Etudiant{
    /**
     * matricule de l'étudiant
     *
     * @var string
     */
    private $matricule;
    /**
     * nom de l'étudiant
     *
     * @var string
     */
    private $nom;
    /**
     * prenoms de l'étudiant
     *
     * @var string
     */
    private $prenoms;
    /**
     * date de naissance de l'étudiant
     *
     * @var string
     */
    private $dateNaissance;
    /**
     * montant versé à la comptabilité
     *
     * @var float
     */
    private $versement;
    /**
     * Constructeur du compte étudiant
     *
     * @param string $matricule
     * @param string $nom
     * @param string $prenoms
     * @param string $dateNaissance
     * @param float $scolarite
     */
    public function __construct(string $matricule,string $nom,string $prenoms,string $dateNaissance,float $scolarite=100){
        $this->matricule = $matricule;
        $this->nom=$nom;
        $this->prenoms = $prenoms;
        $this->dateNaissance=$dateNaissance;
        $this->versement = $scolarite;
    }
    /**
     * Effectuer un versement à la comptabilité
     *
     * @param float $montant
     * @return void
     */
    public function payerInscription($montant){

        if($montant > 0){
            $this->versement +=$montant;
        }
    }
    /**
     * Afficher le total des versements
     *
     * @return void
     */
    public function getVersement(){
        return $this->versement;
    }
}