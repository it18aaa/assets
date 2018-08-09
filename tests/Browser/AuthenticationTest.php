<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use \App\User;

class AuthenticationTest extends DuskTestCase
{
    
    private $user_admin;
    private $user_tech;

    public function setUp() 
    {
        parent::setUp();
        
        // lets create some users and test
        // to see if we can log in as them

        $this->user_admin = User::create([
            'name' => 'Bazil',
            'email' => 'b.bobbins@bob.com',
            'password' => bcrypt('secret')
        ]);
        
        $this->user_tech =  User::create([
            'name' => 'Bob',
            'email' => 'bob@bobmail.com',
            'password' => bcrypt('secret'),
        ]);
        
    }

    public function tearDown()
    {
        parent::tearDown();

        $this->user_admin->delete();
        $this->user_tech->delete();

    }

    public function testSeeSCSonFrontPage()
    {
        $this->browse(function (Browser $browser) {            
            $browser->visit('/')
                    ->assertSee('SCS');
        });

    }

    public function testUnauthenticaedAccess()
    {
        $this->browse(function (Browser $browser) {            
            $browser->visit('/admin')
                    ->assertPathIs('/')
                    ->visit('/tech')
                    ->assertPathIs('/');
        });

    }


    public function testAdminLogin()
    {
        $this->browse( function($browser) {
            $browser->visit('/')
                ->type('email', $this->user_admin->email)
                ->type('password', 'secret')
                ->press('submit')
                ->assertSee('admin');

        });
    }

}
