<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distributore
 *
 * @ORM\Table(name="distributore")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\DistributoreRepository")
 */
class Distributore
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true, unique=true)
     */
    private $address;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float")
     */
    private $lng;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_sigarette", type="boolean")
     */
    private $isSigarette;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_tabacco", type="boolean")
     */
    private $isTabacco;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_condom", type="boolean")
     */
    private $isCondom;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_kitcartine", type="boolean")
     */
    private $isKitcartine;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_accendini", type="boolean")
     */
    private $isAccendini;

    /**
     * @var int
     *
     * @ORM\Column(name="restomax", type="integer")
     */
    private $restomax;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     *
     * @return Distributore
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Distributore
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Distributore
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Distributore
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set isSigarette
     *
     * @param boolean $isSigarette
     *
     * @return Distributore
     */
    public function setIsSigarette($isSigarette)
    {
        $this->isSigarette = $isSigarette;

        return $this;
    }

    /**
     * Get isSigarette
     *
     * @return bool
     */
    public function getIsSigarette()
    {
        return $this->isSigarette;
    }

    /**
     * Set isTabacco
     *
     * @param boolean $isTabacco
     *
     * @return Distributore
     */
    public function setIsTabacco($isTabacco)
    {
        $this->isTabacco = $isTabacco;

        return $this;
    }

    /**
     * Get isTabacco
     *
     * @return bool
     */
    public function getIsTabacco()
    {
        return $this->isTabacco;
    }

    /**
     * Set isCondom
     *
     * @param boolean $isCondom
     *
     * @return Distributore
     */
    public function setIsCondom($isCondom)
    {
        $this->isCondom = $isCondom;

        return $this;
    }

    /**
     * Get isCondom
     *
     * @return bool
     */
    public function getIsCondom()
    {
        return $this->isCondom;
    }

    /**
     * Set isKitcartine
     *
     * @param boolean $isKitcartine
     *
     * @return Distributore
     */
    public function setIsKitcartine($isKitcartine)
    {
        $this->isKitcartine = $isKitcartine;

        return $this;
    }

    /**
     * Get isKitcartine
     *
     * @return bool
     */
    public function getIsKitcartine()
    {
        return $this->isKitcartine;
    }

    /**
     * Set isAccendini
     *
     * @param boolean $isAccendini
     *
     * @return Distributore
     */
    public function setIsAccendini($isAccendini)
    {
        $this->isAccendini = $isAccendini;

        return $this;
    }

    /**
     * Get isAccendini
     *
     * @return bool
     */
    public function getIsAccendini()
    {
        return $this->isAccendini;
    }

    /**
     * Set restomax
     *
     * @param integer $restomax
     *
     * @return Distributore
     */
    public function setRestomax($restomax)
    {
        $this->restomax = $restomax;

        return $this;
    }

    /**
     * Get restomax
     *
     * @return int
     */
    public function getRestomax()
    {
        return $this->restomax;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Distributore
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

