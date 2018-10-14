<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Strategy;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 *Strategy controller.
 *
 * @Route("strategy")
 * @Method("GET")
 */
class StrategyController extends Controller
{
    /**
     * Finds and displays a single strategy.
     *
     * @Route("/{id}", name="strategy_show")
     */
    public function showAction(Strategy $strategy)
    {
        $em = $this->getDoctrine()->getManager();

        $strategycontentid = $em->getRepository("AppBundle:Strategy_Content")->findBy([
            "strategy" => $strategy,

        ]);


       return $this->render('strategy/index.html.twig',[
           'strategy' => $strategy,
           //'exemples' => $exemples,
       ]);
    }
}
