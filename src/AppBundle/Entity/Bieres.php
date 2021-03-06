<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bieres
 *
 * @ORM\Table(name="bieres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BieresRepository")
 */
class Bieres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomsbieres", type="string", length=255)
     */
    private $nomsbieres;
    
    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Images")
     * @ORM\JoinColumn(name="fk_images", referencedColumnName="id")
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="composition", type="text")
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="degres", type="decimal", precision=4, scale=2)
     */
    private $degres;

    /**
     * @var string
     *
     * @ORM\Column(name="amertume", type="decimal", precision=4, scale=2)
     */
    private $amertume;

    /**
     * @var bool
     *
     * @ORM\Column(name="ajouter", type="boolean")
     */
    private $ajouter;
    
    function getAjouter() {
        return $this->ajouter;
    }

    function setAjouter($ajouter) {
        $this->ajouter = $ajouter;
    }

        

        /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomsbieres
     *
     * @param string $nomsbieres
     *
     * @return Bieres
     */
    public function setNomsbieres($nomsbieres)
    {
        $this->nomsbieres = $nomsbieres;

        return $this;
    }

    /**
     * Get nomsbieres
     *
     * @return string
     */
    public function getNomsbieres()
    {
        return $this->nomsbieres;
    }

    /**
     * Set composition
     *
     * @param string $composition
     *
     * @return Bieres
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return string
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set degres
     *
     * @param string $degres
     *
     * @return Bieres
     */
    public function setDegres($degres)
    {
        $this->degres = $degres;

        return $this;
    }

    /**
     * Get degres
     *
     * @return string
     */
    public function getDegres()
    {
        return $this->degres;
    }

    /**
     * Set amertume
     *
     * @param string $amertume
     *
     * @return Bieres
     */
    public function setAmertume($amertume)
    {
        $this->amertume = $amertume;

        return $this;
    }

    /**
     * Get amertume
     *
     * @return string
     */
    public function getAmertume()
    {
        return $this->amertume;
    }
    
    function getImages() {
        return $this->images;
    }

    function setImages($images) {
        $this->images = $images;
    }
    
    public function __toString() {
        return $this->getNomsbieres();
    }
}

