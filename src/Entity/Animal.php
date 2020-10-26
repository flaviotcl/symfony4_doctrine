<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnimalRepository::class)
 */
class Animal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
     *  @ORM\Column(type="date")
     */
    private $data_nascimento;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="animal")
     */
    private $cliente;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;

    /**
     * @return object
     */
    public function getCliente(): object
    {
        return $this->cliente;
    }

    /**
     * @param object $cliente
     * @return Animal
     */
    public function setCliente(object $cliente): Animal
    {
        $this->cliente = $cliente;
        return $this;
    }



    public function getId(): ?int
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
     * @return Animal
     */
    public function setNome(string $nome): Animal
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento(?\DateTimeInterface $data_nascimento): self
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    /**
     * @return object
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * @param object $raca
     * @return Animal
     */
    public function setRaca(object $raca): Animal
    {
        $this->raca = $raca;
        return $this;
    }



}
