<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AjaxTestController extends AbstractController
{

    #[Route('/ajax', name: 'ajax_json')]

    public function index()
    {
        return $this->render('test.html.twig');
    }

    #[Route('/ajax-test', name: 'ajax_test')]
    public function ajaxTest()
    {
        $data = ['message' => 'Coucou cela fonctionne'];
        $response = new JsonResponse($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
