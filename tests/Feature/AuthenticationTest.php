<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{

    public function setUp() 
    {
        parent::setUp();
        
        // lets create some users and test
        // to see if we can log in as them

        

    }

    public function tearDown()
    {
        parent::tearDown();
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    



}
