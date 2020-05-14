<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Robbery;

class RobberyApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_robbery()
    {
        $robbery = factory(Robbery::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/robberies', $robbery
        );

        $this->assertApiResponse($robbery);
    }

    /**
     * @test
     */
    public function test_read_robbery()
    {
        $robbery = factory(Robbery::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/robberies/'.$robbery->id
        );

        $this->assertApiResponse($robbery->toArray());
    }

    /**
     * @test
     */
    public function test_update_robbery()
    {
        $robbery = factory(Robbery::class)->create();
        $editedRobbery = factory(Robbery::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/robberies/'.$robbery->id,
            $editedRobbery
        );

        $this->assertApiResponse($editedRobbery);
    }

    /**
     * @test
     */
    public function test_delete_robbery()
    {
        $robbery = factory(Robbery::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/robberies/'.$robbery->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/robberies/'.$robbery->id
        );

        $this->response->assertStatus(404);
    }
}
