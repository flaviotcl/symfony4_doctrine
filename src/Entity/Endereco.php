<?php

namespace App\Entity;

use App\Repository\EnderecoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnderecoRepository::class)
 */
class Endereco
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
     * @ORM\Column(type="string", length=150)
     *
     */
    private $rua;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     *
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     *
     */
    private $bairro;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRua(): string
    {
        return $this->rua;
    }

    /**
     * @param string $rua
     * @return Endereco
     */
    public function setRua(string $rua): Endereco
    {
        $this->rua = $rua;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return Endereco
     */
    public function setNumero(string $numero): Endereco
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return Endereco
     */
    public function setBairro(string $bairro): Endereco
    {
        $this->bairro = $bairro;
        return $this;
    }


}
