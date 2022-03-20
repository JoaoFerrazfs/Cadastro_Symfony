<?php

namespace App\Controller\Api;

use App\Entity\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @Route("/api/v1",name="api_v1_usuario")
 */

class UsuarioController extends AbstractController
{

    /**
     *@Route("/lista",methods={"GET"},name="lista")
     */
    public function lista(ManagerRegistry $doctrine): JsonResponse
    {
        $em=$doctrine->getRepository(Usuario::class);

        dump($em->findAll());


        return new JsonResponse(["implementar lista na API"], 404);
    }

    public function pegarTo(ManagerRegistry $doctrine){
        //
    }


    /**
     *@Route("/cadastra", methods={"POST"},name="cadastra")
     */
    public function cadatra(): JsonResponse
    {
        return new JsonResponse(["implementar cadastro API"], 404);
    }
}
