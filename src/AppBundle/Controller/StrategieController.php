<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 * @Route("strategies")
 */
class StrategieController extends Controller
{
    /**
     * Display all strategies
     *
     *
     * @Route("/", name="strategies_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $strategys = $em->getRepository("AppBundle:Strategy")->findAll();

        // replace this example code with whatever you need
        return $this->render('strategies/index.html.twig', [
           'strategys' => $strategys,
        ]);
    }
/*
    /**
     * Finds and displays a number of strategies in function of the season.
     *
     * @Route("/{id}", name="strategie_season")
     * @Method("GET")
     *//*
    public function showAction(Genre $genre) {
        return $this->render('strategies/show.html.twig',[
            'genre' => $genre,
        ]);
    }*/
}
