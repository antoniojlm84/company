<?php

namespace Company\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=20, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Company\DatabaseBundle\Entity\Office", inversedBy="employee")
     * @ORM\JoinTable(name="employee_office",
     *   joinColumns={
     *     @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="office_id", referencedColumnName="id")
     *   }
     * )
     */
    private $office;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->office = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return Employee
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
     * Set occupation
     *
     * @param string $occupation
     * @return Employee
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Employee
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add office
     *
     * @param \Company\DatabaseBundle\Entity\Office $office
     * @return Employee
     */
    public function addOffice(\Company\DatabaseBundle\Entity\Office $office)
    {
        $this->office[] = $office;

        return $this;
    }

    /**
     * Remove office
     *
     * @param \Company\DatabaseBundle\Entity\Office $office
     */
    public function removeOffice(\Company\DatabaseBundle\Entity\Office $office)
    {
        $this->office->removeElement($office);
    }

    /**
     * Get office
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffice()
    {
        return $this->office;
    }
}
