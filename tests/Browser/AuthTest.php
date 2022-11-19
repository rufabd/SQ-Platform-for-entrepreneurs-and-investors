<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_register_success()
    {
        
        $this->browse(function (Browser $browser) {
            $btn = $browser->element("#button1");
            $browser->visit('/')
                    ->clickLink('Login/Register')
                    ->clickLink('Create Account')
                    ->value('#name','Samson4')
                    ->value('#email_reg','samson4@test.com')
                    ->value('#password_reg','00000001')
                    ->value('#password-confirm','00000001')
                    ->press($btn)
                    ->assertPathIs('/dashboard');
                    }
                );
    }
}

