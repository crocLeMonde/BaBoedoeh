<?php

namespace BaBoedoeh\BookingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BungalowControllerTest extends WebTestCase
{
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/bungalow/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'Unexpected HTTP status code for GET /bungalow/');
        $crawler = $client->click($crawler->selectLink('New bungalow')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form([
            'baboedoeh_bookingbundle_bungalow[name]'         => 'nameBungalow',
            'baboedoeh_bookingbundle_bungalow[description]'  => 'descriptionBungalow',
        ]);

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("nameBungalow")')->count(), 'Missing element td:contains("nameBungalow")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form([
            'baboedoeh_bookingbundle_bungalow[field_name]'  => 'Foo',
            // ... other fields to fill
        ]);

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }
}
