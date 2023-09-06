<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodolistControllerTest extends TestCase
{
   public function testTodolist()
   {
        $this->withSession([
            "user" => "arnold",
            "todolist" => [
                [
                    "id" => "1",
                    "todo" => "Arnold"
                ],
                [
                    "id" => "2",
                    "todo" => "eko"
                ]
            ]
        ])->get('/todolist')
                ->assertSeeText("1")
                ->assertSeeText("Arnold")
                ->assertSeeText("2")
                ->assertSeeText("eko");
   }

   public function testAddTodoFailed()
   {
        $this->withSession([
            "user" => "arnold"
        ])->post("/todolist", [])
            ->assertSeeText("Todo is Required");
   }

   public function testAddTodoSuccess()
   {
        $this->withSession([
            "user" => "arnold"
        ])->post("/todolist", [
            "todo" => "arnold"
        ])->assertRedirect("/todolist");
   }
}
