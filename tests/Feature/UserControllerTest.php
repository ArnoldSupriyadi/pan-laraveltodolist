<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testLoginPageForMember()
    {
        $this->withSession([
            "user" => "arnold"
        ])->get("/login")
            ->assertRedirect("/");
    }

    public function testLoginPage()
    {
        $this->get('/login')->assertSeeText('Login');
    }


    public function testLoginPageForMember()
    {
        $this->withSession([
            "user" => "arnold"
        ])->get('/login')
            ->assertRedirect("/");
    }

    public function testLoginPageForUserAlreadyLogin()
    {
        $this->withSession([
            "user" => "arnold"
        ])->post('/login', [
            "user" => "arnold",
            "password" => "rahasia"
        ])->assertRedirect("/");
    }

    public function testLoginSuccess()
    {
        $this->post('/login', [
            "user" => "arnold",
            "password" => "rahasia"
        ])->assertRedirect("/")
            ->assertSessionHas("user", "arnold");
    }

    public function testLoginForUserAlreadyLogin()
    {
        $this->withSession([
            "user" => "arnold"
        ])->post('/login', [
            "user" => "arnold",
            "password" => "rahasia"
        ])->assertRedirect("/");
    }

    public function testLoginValidationError()
    {
        $this->post('/login', [])
            ->assertSeeText("User or Password is required");
    }

    public function testLoginFailed()
    {
        $this->post('/login', [
            'user' => "wrong",
            'password' => "wrong"
        ])->assertSeeText("User or Password Wrong");
    }

    public function testLogout()
    {
        $this->withSession([
            "user" => "arnold"
        ])->post('/logout')
            ->assertRedirect("/")
            ->assertSessionMissing("user");
    }
    
    // public function testLogoutGuest()
    // {
    //     $this->post('/logout')
    //         ->assertRedirect("/");
    // }
}
