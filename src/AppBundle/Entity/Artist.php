<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 */
class Artist {

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
     * @ORM\Column(name="Surname", type="string", length=54)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=9, unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Dni", type="string", length=9, unique=true)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="ArtisticName", type="string", length=64, unique=true)
     */
    private $artisticName;

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
     * @return Artist
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
     * @return Artist
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Artist
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
     * Set dni
     *
     * @param string $dni
     *
     * @return Artist
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
     * Set artisticName
     *
     * @param string $artisticName
     *
     * @return Artist
     */
    public function setArtisticName($artisticName) {
        $this->artisticName = $artisticName;

        return $this;
    }

    /**
     * Get artisticName
     *
     * @return string
     */
    public function getArtisticName() {
        return $this->artisticName;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Patron", inversedBy="artists")
     * @ORM\JoinColumn(name="patrons_id", referencedColumnName="id")
     */
    private $patronArtist;

}
