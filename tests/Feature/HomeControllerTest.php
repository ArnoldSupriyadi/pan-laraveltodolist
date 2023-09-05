<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuest()
    {
<<<<<<< HEAD
        $this->get('/')
            ->assertRedirect("/login");
=======
        $this->get('/')->assertRedirect('/login');
>>>>>>> bb861dcdee2fdeb13c2377f2f1e517f1d9c8f7de
    }

    public function testMember()
    {
        $this->withSession([
            "user" => "arnold"
<<<<<<< HEAD
        ])->get('/')
            ->assertRedirect("/todolist");
=======
        ])->get('/')->assertRedirect('/todolist');
>>>>>>> bb861dcdee2fdeb13c2377f2f1e517f1d9c8f7de
    }
}
