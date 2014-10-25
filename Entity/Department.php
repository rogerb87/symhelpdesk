<?php

namespace SymHelpDesk\Entity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="symhelpdesk_departments")
 */
class Department
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
     * @ORM\OneToMany(targetEntity="DepartmentAssignee", mappedBy="department", cascade={"persist"})
     * @var DepartmentAssignee[]
     */
    protected $assignees;

    /**
     * @param int $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}