<?php
//use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @ORM\Entity @ORM\Table(name="client_salarie")
 **/
class Clientsalarie
{
    /** @ORM\Id @ORM\column(type ="integer")  @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type ="string") **/
    private $nom;
    /** @ORM\column(type ="string") **/
    private $prenom;
    /** @ORM\column(type ="string") **/
    private $profession; 
    /** @ORM\column(type ="decimal") **/
    private $salaire_actuel; 
    /** @ORM\column(type ="string") **/
    private $nom_entreprise;
    /** @ORM\column(type ="string") **/
    private $adresse_entreprise;
      /** @ORM\column(type ="string") **/
    private $identifiant_entreprise;
    /** @ORM\column(type ="integer") **/
    private $numero_CNI;
    /** @ORM\column(type ="integer") **/
    private $id_client;

    public function __construct()
    {
        
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
     $this->id= $id;
    }
    public function getNom()
    {
    return $this->nom;
    }
    public function setNom($nom)
    {
     $this->nom= $nom;
    }
    public function getPrenom()
    {
    return $this->prenom;
    }
    public function setPrenom($prenom)
    {
     $this->prenom= $prenom;
    }
    public function getProfession()
    {
    return $this->profession;
    }
    public function setProfession($profession)
    {
     $this->profession= $profession;
    }
    public function getSalaire_actuel()
    {
    return $this->salaire_actuel;
    }
    public function setSalaire_actuel($salaire_actuel)
    {
     $this->salaire_actuel= $salaire_actuel;
    }
    public function getNom_entreprise()
    {
    return $this->nom_entreprise;
    }
    public function setNom_entreprise($nom_entreprise)
    {
     $this->nom_entreprise= $nom_entreprise;
    }
    public function getAdresse_entreprise()
    {
    return $this->adresse_entreprise;
    }
    public function setAdresse_entreprise($adresse_entreprise)
    {
     $this->adresse_entreprise= $adresse_entreprise;
    }
    public function getIdentifiant_entreprise()
    {
    return $this->identifiant_entreprise;
    }
    public function setIdentifiant_entreprise($identifiant_entreprise)
    {
     $this->identifiant_entreprise= $identifiant_entreprise;
    }
    public function getNumero_CNI()
    {
    return $this->numero_CNI;
    }
    public function setNumero_CNI($numero_CNI)
    {
     $this->numero_CNI= $numero_CNI;
    }
    public function getId_client()
    {
    return $this->id_client;
    }
    public function setId_client($id_client)
    {
     $this->id_client= $id_client;
    }
}
?>
 