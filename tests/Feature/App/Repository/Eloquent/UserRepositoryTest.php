<?php

namespace Tests\Feature\App\Repository\Eloquent;

use App\Models\User;
use App\Repository\Eloquent\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $repository = new UserRepository(new User());
        $response = $repository->findAll();

        $this->assertIsArray($response);
    }
}
