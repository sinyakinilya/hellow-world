<?php

namespace test\common\component;

use common\component\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testPasswordNotValid()
    {
        $user = new User();
        $user->setPassword('123');

        $this->assertFalse($user->checkPassword('435'));
    }

    public function testUserJsonData()
    {
        $user = new User();
        $user->setUsername('elias');
        $user->setPassword('pass');

        $jsonData = $user->getJsonData();

        $this->assertJson($jsonData);
        $data = json_decode($jsonData, true);
        $this->assertArrayHasKey('username', $data);
        $this->assertArrayHasKey('password', $data);
        $this->assertNotEmpty($data['username']);
        $this->assertNotEmpty($data['password']);
        $this->assertNotEmpty($data['username']);
        $this->assertNotEmpty($data['password']);

    }
}

