<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main-index')]
    public function indexAction(): Response
    {
        return $this->redirectToRoute('main-app');
    }

    #[Route('/app', name: 'main-app')]
    public function appAction()
    {
        dump($this);

        return $this->render('app.html.twig', [
            'message' => 'OK - Authentication success'
        ]);
    }
}
