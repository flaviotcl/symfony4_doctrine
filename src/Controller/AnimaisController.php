<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimaisController extends AbstractController
{
    /**
     * @Route("/animais", name="listar_animais")
     * @Template("animais/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $animais = $em->getRepository(Animal::class)->findAll();

        return [
            'animais' => $animais
        ];
    }

    /**
     * @Route("/animal/visualizar/{id}", name="visualizar_animal")
     * @Template("animais/view.html.twig")
     * @param Animal $animal
     **/
    public function view( Animal $animal)
    {

        return[
            'animal' => $animal
        ];

    }
}
