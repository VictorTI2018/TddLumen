<?php

namespace Tests\Models\User;

use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserModelTest extends TestCase
{



    public function testUserCreate()
    {
        $params = [
            'username' => 'Victor Hugo',
            'email' => 'victor1@teste.com',
            'password' => Hash::make('123456')
        ];

        $response = $this->post('/api/user/register', $params);
        $response->assertResponseOk();
        $content = (array) json_decode($this->response->getContent());
        $this->assertArrayHasKey('username', $content);
        $this->assertArrayHasKey('email', $content);
        $this->assertArrayHasKey('id', $content);
    }
}
