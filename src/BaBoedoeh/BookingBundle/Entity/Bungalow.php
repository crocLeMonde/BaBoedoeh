<?php

namespace BaBoedoeh\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bungalow.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BaBoedoeh\BookingBundle\Entity\BungalowRepository")
 */
class Bungalow
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="persons", type="integer")
     */
    private $persons;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Bungalow
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Bungalow
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set persons.
     *
     * @param int $persons
     *
     * @return Bungalow
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;

        return $this;
    }

    /**
     * Get persons.
     *
     * @return int
     */
    public function getPersons()
    {
        return $this->persons;
    }
}
