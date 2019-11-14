<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserViewController extends AbstractController
{

    public function index()
    {
        $userlogeado = '';
        if ($this->getUser(0)) {
            $userlogeado = $this->getUser(0)->getRoles();
            dump($userlogeado);
            if ($userlogeado[0] == 'ROLE_ADMIN') {
                return $this->redirectToRoute('dasboard');
            }
        }

        return $this->render('user_view/index.html.twig', [
        ]);
    }

    public function about()
    {

        return $this->render('user_view/about.html.twig', [
        ]);
    }

    public function store()
    {

        return $this->render('user_view/store.html.twig', [
        ]);
    }

    public function products()
    {


        return $this->render('user_view/products.html.twig', [
        ]);
    }

    public function register()
    {


        return $this->render('user_view/register.html.twig', [
        ]);
    }
}
