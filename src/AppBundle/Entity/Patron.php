<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patron
 *
 * @ORM\Table(name="patron")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatronRepository")
 */
class Patron {

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
     * @ORM\Column(name="Name", type="string", length=64)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Surname", type="string", length=64)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="Dni", type="string", length=9, unique=true)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=9, unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Company", type="string", length=34)
     */
    private $company;

    /**
     * @var int
     *
     * @ORM\Column(name="Money", type="integer")
     */
    private $money;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="datetime")
     */
    private $birthDate;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Patron
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Patron
     */
    public function setSurname($surname) {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Patron
     */
    public function setDni($dni) {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni() {
        return $this->dni;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Patron
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Patron
     */
    public function setCompany($company) {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Patron
     */
    public function setMoney($money) {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return int
     */
    public function getMoney() {
        return $this->money;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Patron
     */
    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate() {
        return $this->birthDate;
    }

    /**
     * @ORM\OneToMany(targetEntity="Artist", mappedBy="patronArtist")
     */
    private $artists;

    public function __construct() {
        $this->artists = new ArrayCollection();
    }

}
