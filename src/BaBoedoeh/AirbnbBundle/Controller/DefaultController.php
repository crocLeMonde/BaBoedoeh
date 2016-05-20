<?php

namespace BaBoedoeh\AirbnbBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/availability/{id}", requirements={"id" = "\d+"})
     * @Template()
     */
    public function availabilityAction($id)
    {
    }
}
