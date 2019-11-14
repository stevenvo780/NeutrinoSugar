<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminViewController extends AbstractController
{

    public function index()
    {
        $userlogeado = '';
        if ($this->getUser(0)) {
            $userlogeado = $this->getUser(0)->getEmail();
        }

        return $this->render('admin_view/index.html.twig', [
            'user' => $userlogeado,
        ]);
    }
}
