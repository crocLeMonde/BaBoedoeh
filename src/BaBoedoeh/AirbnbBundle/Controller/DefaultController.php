<?php

namespace BaBoedoeh\AirbnbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/availability/{id}", requirements={"id" = "\d+"})
     * @Template()
     */
    public function availabilityAction($id)
    {
    	$wtc = new WebTestCase;
		$client = $wtc::createClient();

        $crawler = $client->request('GET', 'https://www.airbnb.fr/rooms/'.$id);

        $crawler = $crawler->filter('body');


        return array('id' => $id);
    }
}
