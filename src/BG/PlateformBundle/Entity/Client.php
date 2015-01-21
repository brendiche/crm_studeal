<?php

namespace BG\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BG\PlateformBundle\Entity\Company;
use BG\UserBundle\Entity\User;
/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BG\PlateformBundle\Entity\ClientRepository")
 */
class Client
{

    /**
     * @ORM\ManyToOne(targetEntity="BG\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="BG\PlateformBundle\Entity\Company")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Company;

    /**
     * @ORM\OneToOne(targetEntity="BG\PlateformBundle\Entity\Image", cascade={"persist"})
     */
    private $Image;

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
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="addCompany",type="boolean")
    */
    private $addCompany;

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
     * @return Client
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
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set User
     *
     * @param \BG\UserBundle\Entity\User $user
     * @return Client
     */
    public function setUser(User $user)
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

    /**
     * Set Image
     *
     * @param \BG\PlateformBundle\Entity\Image $image
     * @return Client
     */
    public function setImage(\BG\PlateformBundle\Entity\Image $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * Get Image
     *
     * @return \BG\PlateformBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * Set Company
     *
     * @param \BG\Plateform\Entity\Company $company
     * @return Client
     */
    public function setCompany(Company $company)
    {
            $this->Company = $company;
     
        return $this;
    }

    public function unsetCompany(){
         unset($this->Company);
         return $this;
    }

    /**
     * Get Company
     *
     * @return \BG\Plateform\Entity\Company 
     */
    public function getCompany()
    {
        return $this->Company;
    }

   

    /**
     * Set addCompany
     *
     * @param boolean $addCompany
     * @return Client
     */
    public function setAddCompany($addCompany)
    {
        $this->addCompany = $addCompany;

        return $this;
    }

    /**
     * Get addCompany
     *
     * @return boolean 
     */
    public function getAddCompany()
    {
        return $this->addCompany;
    }
}
