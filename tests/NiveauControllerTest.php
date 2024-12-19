<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NiveauControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/niveaux');
        
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Liste des Niveaux');
    }
}
