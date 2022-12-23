<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    protected string $endpoint = '/api/users';

    public function test_paginate_empty()
    {
        $response = $this->getJson($this->endpoint);

        // Exemplo didático: maneiras diferentes de testar o mesmo resultado de status
        // $response->assertStatus(Response::HTTP_OK);
        $response->assertOk();
        $response->assertJsonCount(0, 'data');
        $response->assertJsonStructure([
            'meta' => [
                'total',
                'current_page',
                'last_page',
                'first_page',
                'per_page'
            ],
            'data'
        ]);
        $response->assertJsonFragment([
            'total' => 0
        ]);
    }

    public function test_paginate()
    {
        User::factory()->count(100)->create();

        $response = $this->getJson($this->endpoint);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonCount(15, 'data');
        $response->assertJsonStructure([
            'meta' => [
                'total',
                'current_page',
                'last_page',
                'first_page',
                'per_page'
            ]
        ]);
        $response->assertJsonFragment(['total' => 100]);
        $response->assertJsonFragment(['current_page' => 1]);
    }

    public function test_paginate_page_two()
    {
        User::factory()->count(20)->create();

        $response = $this->getJson("{$this->endpoint}?page=2");

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonCount(5, 'data');
        $response->assertJsonFragment(['total' => 20]);
        $response->assertJsonFragment(['current_page' => 2]);
    }
}
