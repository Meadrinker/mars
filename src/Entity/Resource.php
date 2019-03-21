<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name = "resources")
 */
class Resource {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @OneToOne(targetEntity="Player")
     * @JoinColumn(name="player", referencedColumnName="id")
     */
    private $player;

    /**
     * @Column(type="integer")
     */
    private $megacredit;

    /**
     * @Column(type="integer")
     */
    private $iron;

    /**
     * @Column(type="integer")
     */
    private $titan;

    /**
     * @Column(type="integer")
     */
    private $plant;

    /**
     * @Column(type="integer")
     */
    private $energy;

    /**
     * @Column(type="integer")
     */
    private $heat;

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
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getMegacredit()
    {
        return $this->megacredit;
    }

    /**
     * @param mixed $megacredit
     */
    public function setMegacredit($megacredit)
    {
        $this->megacredit = $megacredit;
    }

    /**
     * @return mixed
     */
    public function getIron()
    {
        return $this->iron;
    }

    /**
     * @param mixed $iron
     */
    public function setIron($iron)
    {
        $this->iron = $iron;
    }

    /**
     * @return mixed
     */
    public function getTitan()
    {
        return $this->titan;
    }

    /**
     * @param mixed $titan
     */
    public function setTitan($titan)
    {
        $this->titan = $titan;
    }

    /**
     * @return mixed
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * @param mixed $plant
     */
    public function setPlant($plant)
    {
        $this->plant = $plant;
    }

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }

    /**
     * @return mixed
     */
    public function getHeat()
    {
        return $this->heat;
    }

    /**
     * @param mixed $heat
     */
    public function setHeat($heat)
    {
        $this->heat = $heat;
    }

}