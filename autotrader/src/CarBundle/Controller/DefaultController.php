<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/our-cars", name="offer")
     */
    public function indexAction()
    {
        $cars = [
            ['make' => 'BMW', 'name' => 'x1'],
            ['make' => 'Audi', 'name' => 'TT'],
            ['make' => 'Honda', 'name' => 'Civic'],
        ];

        return $this->render('CarBundle:Default:index.html.twig', ['cars' => $cars]);
    }
}
