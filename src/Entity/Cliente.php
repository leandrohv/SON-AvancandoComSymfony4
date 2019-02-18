<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=130)
     */
    private $email;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco", inversedBy="id")
     */
    private $endereco;

    

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
     * @return Cliente
     */
    public function setNome(string $nome): Cliente
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return Cliente
     */
    public function setTelefone(string $telefone): Cliente
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Cliente
     */
    public function setEmail(string $email): Cliente
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return object
     */
    public function getEndereco(): object
    {
        return $this->endereco;
    }

    /**
     * @param object $endereco
     * @return Cliente
     */
    public function setEndereco(object $endereco): Cliente
    {
        $this->endereco = $endereco;
        return $this;
    }

}
