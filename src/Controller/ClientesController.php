<?php

namespace App\Controller;

use App\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientesController extends AbstractController
{
    /**
     * @Route("/clientes", name="listar_clientes")
     * @Template("clientes/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository(Cliente::class)->findAll();

        return [
            'clientes' => $clientes
        ];
    }
}
