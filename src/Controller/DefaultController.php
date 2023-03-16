<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="homepage")
     */
    public function index()
    {
        return $this->render('ajax_test/index.html.twig');
    }
}
