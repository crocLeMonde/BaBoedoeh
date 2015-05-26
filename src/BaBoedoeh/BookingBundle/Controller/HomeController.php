<?php

namespace BaBoedoeh\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class homeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function HomeAction()
    {
        return array();
    }
}
