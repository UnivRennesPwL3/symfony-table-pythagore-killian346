<?php

namespace App\Controller;

use App\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    
    
    /**
     * @Route("/pythagore/view", name="pythagore_view")
    */
    public function displayPythagoreAction(): Response
    {
        $tableHTML = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'htmlResponse' => $tableHTML, 
            'name' => 'LE BOULHO Killian'  
        ]);
    }
}
