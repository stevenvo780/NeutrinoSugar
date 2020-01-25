<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminViewController extends AbstractController
{

    public function index()
    {
        return $this->render('admin_view/index.html.twig', [

        ]);
    }

    public function productos()
    {
        return $this->render('admin_view/producto/productos.html.twig', [

        ]);
    }

    public function ingredientes()
    {
        return $this->render('admin_view/ingredientes/ingredientes.html.twig', [

        ]);
    }
}
