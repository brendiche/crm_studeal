<?php

namespace BG\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BG\PlateformBundle\Entity\CompanyRepository")
 */
class Company
{   

    /**
    * @ORM\ManyToOne(targetEntity="BG\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $User;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="text")
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="SIRET", type="integer")
     */
    private $sIRET;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Company
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Company
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set sIRET
     *
     * @param integer $sIRET
     * @return Company
     */
    public function setSIRET($sIRET)
    {
        $this->sIRET = $sIRET;

        return $this;
    }

    /**
     * Get sIRET
     *
     * @return integer 
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Set User
     *
     * @param \BG\UserBundle\Entity\User $user
     * @return Company
     */
    public function setUser(\BG\UserBundle\Entity\User $user)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \BG\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}
