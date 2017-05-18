<?php

namespace ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultsControllerTest extends WebTestCase
{
    public function testWho()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/v1/defaults/who');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('cmobi-service-standard', $client->getResponse()->getContent());
    }
}
