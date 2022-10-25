<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('admin/index.html.twig', [
            'user' => $user,
        ]);
    }
}