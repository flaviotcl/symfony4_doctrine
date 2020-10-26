<?php

namespace App\Entity;

use App\Repository\EspecieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EspecieRepository::class)
 */
class Especie
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
     *
     */
    private $nome;

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
     * @return Especie
     */
    public function setNome(string $nome): Especie
    {
        $this->nome = $nome;
        return $this;
    }

    public function __toString()
    {
        return $this->nome;
    }
}
