<?php

namespace BaBoedoeh\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     * @Template()
     */
    public function homeAction()
    {	
    	$securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    		return $this->redirect($this->generateUrl('fos_user_security_login'));
    	}
        return array();
    }
}
