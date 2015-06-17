<?php
namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="BugRepository") @Table(name="bug")
 */
class Bug {
    /**
     * @Id @Column(type="integer", nullable=false) @GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", nullable=false)
     * @var string
     */
    protected $description;

    /**
     * @Column(type="datetime", nullable=false)
     * @var DateTime
     */
    protected $created;

    /**
     * @Column(type="string", length=10, nullable=false)
     * @var string
     */
    protected $status;

    /**
     * @ManyToMany(targetEntity="Product")
     * @var Product[]
     */
    protected $products = null;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     * @var User
     */
    protected $engineer;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     * @var User
     */
    protected $reporter;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function assignedToProduct($product)
    {
        $this->products[] = $product;
    }

    public function getEngineer()
    {
        return $this->engineer;
    }

    public function setEngineer($engineer)
    {
        $this->engineer = $engineer;
    }

    public function getReporter()
    {
        return $this->reporter;
    }

    public function setReporter($reporter)
    {
        $this->reporter = $reporter;
    }
}
