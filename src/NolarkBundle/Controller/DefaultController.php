<?php

namespace NolarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('NolarkBundle::index.html.twig');
    }

    /**
     * @Route("/casque/{type}", defaults={"type" = "route"},
     *     requirements={"type": "\w+"})
     */
    public function casqueAction($type){
        
    }
}
