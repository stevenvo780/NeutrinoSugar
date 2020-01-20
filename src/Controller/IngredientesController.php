<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Ingredientes;
use App\Form\IngredientesType;

class IngredientesController extends AbstractController
{
    public function list(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Ingredientes::class);
        $ingredientes = $repository->findAll();

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);


        return new Response($serializer->serialize($ingredientes, 'json'));
    }

    public function new(Request $request)
    {
        $task = new Ingredientes();{}

        $form = $this->createForm(IngredientesType::class, $task);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('ingredientes');
        }

        return $this->render('admin_view/ingredientes/ingredientesNew.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
