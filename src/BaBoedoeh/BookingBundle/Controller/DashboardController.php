<?php

namespace BaBoedoeh\BookingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     * @Method("GET")
     * @Template()
     */
    public function dashboardAction()
    {
        return [];
    }
}
