<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FrontPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testTheWebRootDirStatusCode()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testWebRootText()
    {
        $response = $this->get('/');
        $response->assertSeeText('SCS Login');
    }

}
