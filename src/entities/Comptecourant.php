<?php
//use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @ORM\Entity @ORM\Table(name="compte_courant")
 **/
class Comptecourant
{
    /** @ORM\Id @ORM\Column(type="integer")  @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="integer") **/
    private $agios;
    /** @ORM\Column(type="integer") **/
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
    public function getAgios()
    {
    return $this->agios;
    }
    public function setAgios($agios)
    {
     $this->agios= $agios;
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
