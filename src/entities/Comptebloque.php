<?php
//use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @ORM\Entity @ORM\Table(name="compte_bloque")
 **/
class Comptebloque
{
    /** @ORM\Id @ORM\column(type ="integer")  @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type ="decimal") **/
    private $frais_ouverture;

    private $delai_blocage;
    /** @ORM\column(type ="integer") **/
    private $montant_remuneration;
/** @ORM\column(type ="integer") **/
    private $Id_compte;

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
    public function getFrais_ouverture()
    {
    return $this->frais_ouverture;
    }
    public function setFrais_ouverture($frais_ouverture)
    {
     $this->frais_ouverture= $frais_ouverture;
    }
    public function getDelai_blocage()
    {
    return $this->delai_blocage;
    }
    public function setDelai_blocage($delai_blocage)
    {
     $this->delai_blocage= $delai_blocage;
    }
    public function getMontant_remuneration()
    {
    return $this->montant_remuneration;
    }
    public function setMontant_remuneration($montant_remuneration)
    {
     $this->montant_remuneration= $montant_remuneration;
    }

    public function getId_compte()
    {
    return $this->Id_compte;
    }
    public function setId_compte($Id_compte)
    {
     $this->Id_compte= $Id_compte;
    }


}

?>