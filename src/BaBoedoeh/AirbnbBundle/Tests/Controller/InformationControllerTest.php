<?php

namespace BaBoedoeh\AirbnbBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InformationControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/availability/1');

        $this->assertTrue($crawler->filter('html:contains("1")')->count() > 0);
    }
}
