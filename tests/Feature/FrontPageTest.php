<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FrontPageTest extends TestCase
{

    public function testTheWebRootDirStatusCode()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testWebRootText()
    {
        // this is definately the homepage because it has
        // SCS written on it somewhere :-)
        $response = $this->get('/');
        $response->assertSeeText('SCS');
    }   
    
}
