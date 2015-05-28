<?php

namespace BaBoedoeh\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard")
     * @Method("GET")
     * @Template()
     */
    public function dashboardAction()
    {
        return array();
    }
}
