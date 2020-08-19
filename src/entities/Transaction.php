<?php

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="transaction")
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $montant;

    /**
     * @ORM\Column(type="string")
     */

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * Many transactions have one compte. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="transaction")
     * @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     */
    private $compte;

    /**
     * Many transactions have one type_transaction. This is the owning side.
     * @ORM\ManyToOne(targetEntity="TypeTransaction", inversedBy="transaction")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * Transaction constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * @param mixed $compte
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}