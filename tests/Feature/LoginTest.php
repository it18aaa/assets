<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Role;

class LoginTest extends TestCase
{

   use DatabaseTransactions;    

   public function testLoginFormDisplayed()
   {
       $response = $this->get('/');
       $response->assertStatus(200);
   }

   public function testLoginAndValidUser() 
   {
       $user = factory(User::class)->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret'
        ]);
    
        $response->assertStatus(302);
    
        $this->assertAuthenticatedAs($user);
    }

}
