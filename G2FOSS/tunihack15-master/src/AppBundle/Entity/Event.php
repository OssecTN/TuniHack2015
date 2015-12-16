<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="privateKeyUser", type="string", length=255)
     */
    private $privateKeyUser;

    /**
     * @var string
     *
     * @ORM\Column(name="privateKeyObject", type="string", length=255)
     */
    private $privateKeyObject;

    /**
     * @var array
     *
     * @ORM\Column(name="vals", type="array")
     */
    private $values;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

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
     * Set privateKeyUser
     *
     * @param string $privateKeyUser
     *
     * @return Event
     */
    public function setPrivateKeyUser($privateKeyUser)
    {
        $this->privateKeyUser = $privateKeyUser;

        return $this;
    }

    /**
     * Get privateKeyUser
     *
     * @return string
     */
    public function getPrivateKeyUser()
    {
        return $this->privateKeyUser;
    }

    /**
     * Set privateKeyObject
     *
     * @param string $privateKeyObject
     *
     * @return Event
     */
    public function setPrivateKeyObject($privateKeyObject)
    {
        $this->privateKeyObject = $privateKeyObject;

        return $this;
    }

    /**
     * Get privateKeyObject
     *
     * @return string
     */
    public function getPrivateKeyObject()
    {
        return $this->privateKeyObject;
    }

    /**
     * Set values
     *
     * @param array $values
     *
     * @return Event
     */
    public function setValues($values)
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Get values
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Event
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
