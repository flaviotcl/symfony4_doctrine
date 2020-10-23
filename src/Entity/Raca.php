<?php

namespace App\Entity;

use App\Repository\RacaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RacaRepository::class)
 */
class Raca
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

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
     */
    private $especie;

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
     * @return Raca
     */
    public function setNome(string $nome): Raca
    {
        $this->nome = $nome;
        return $this;
    }


}
