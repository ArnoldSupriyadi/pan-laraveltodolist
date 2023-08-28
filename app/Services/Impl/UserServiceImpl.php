<?php

namespace App\Services\Impl;

Use App\Services\UserService;

class UserServiceImpl implements UserService
{
    private array $users = [
        "arnold" => "rahasia"
    ];

    function login(string $user, string $password): bool
    {
        if(!isset($this->users[$user])) {
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}