<?php

namespace SymHelpDesk\Entity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="symhelpdesk_department_assignees")
 */
class DepartmentAssignee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="assignees", cascade={"persist"})
     * @ORM\JoinColumn(name="department", referencedColumnName="id")
     * @var Department[]
     */
    protected $departments;
    
    /**
     * @param int $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
        $this->departments = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \SymHelpDesk\Entity\Department[] $departments
     */
    public function setDepartments($departments)
    {
        $this->departments = $departments;
    }

    /**
     * @return \SymHelpDesk\Entity\Department[]
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}