<?php
//use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @ORM\Entity @ORM\Table(name="client_moral")
 **/
class Clientmoral
{
    /** @ORM\Id @ORM\column(type ="integer")  @ORM\GeneratedValue **/
    private $id;
     /** @ORM\column(type ="string") **/
    private $nom_entreprise;
     /** @ORM\column(type ="string") **/
    private $type_entreprise;
     /** @ORM\column(type ="string") **/
    private $raison_social; 
     /** @ORM\column(type ="string") **/
    private $identifiant_entreprise;
     /** @ORM\column(type ="string") **/
    private $adresse_entreprise; 
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
    public function getNom_entreprise()
    {
    return $this->nom_entreprise;
    }
    public function setNom_entreprise($nom_entreprise)
    {
     $this->nom_entreprise= $nom_entreprise;
    }
    public function getType_entreprise()
    {
    return $this->type_entreprise;
    }
    public function setType_entreprise($type_entreprise)
    {
     $this->type_entreprise= $type_entreprise;
    }
    public function getRaison_social()
    {
    return $this->raison_social;
    }
    public function setRaison_social($raison_social)
    {
     $this->raison_social= $raison_social;
    }
    public function getIdentifiant_entreprise()
    {
    return $this->identifiant_entreprise;
    }
    public function setIdentifiant_entreprise($identifiant_entreprise)
    {
     $this->identifiant_entreprise= $identifiant_entreprise;
    }
    public function getAdresse_entreprise()
    {
    return $this->adresse_entreprise;
    }
    public function setAdresse_entreprise($adresse_entreprise)
    {
     $this->adresse_entreprise= $adresse_entreprise;
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
