<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
     */
    private $especie;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Raca
     */
    public function setNome(string $nome): Raca
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return object
     */
    public function getEspecie(): object
    {
        return $this->especie;
    }

    /**
     * @param object $especie
     * @return Raca
     */
    public function setEspecie(object $especie): Raca
    {
        $this->especie = $especie;
        return $this;
    }

}
