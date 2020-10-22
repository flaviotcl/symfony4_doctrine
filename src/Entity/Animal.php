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
     * @var date
     *
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

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

    /**
     * @return date
     */
    public function getDataNascimento(): date
    {
        return $this->data_nascimento;
    }

    /**
     * @param date $data_nascimento
     * @return Animal
     */
    public function setDataNascimento(date $data_nascimento): Animal
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }



}
