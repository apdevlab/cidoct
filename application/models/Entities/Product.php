<?php
namespace Entities;

/**
 * @Entity @Table(name="product")
 **/
class Product {
    /**
     * @Id @Column(type="integer", nullable=false) @GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", length=80, nullable=false)
     * @var string
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
