<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Tower;

class TowerApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tower()
    {
        $tower = factory(Tower::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/towers', $tower
        );

        $this->assertApiResponse($tower);
    }

    /**
     * @test
     */
    public function test_read_tower()
    {
        $tower = factory(Tower::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/towers/'.$tower->id
        );

        $this->assertApiResponse($tower->toArray());
    }

    /**
     * @test
     */
    public function test_update_tower()
    {
        $tower = factory(Tower::class)->create();
        $editedTower = factory(Tower::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/towers/'.$tower->id,
            $editedTower
        );

        $this->assertApiResponse($editedTower);
    }

    /**
     * @test
     */
    public function test_delete_tower()
    {
        $tower = factory(Tower::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/towers/'.$tower->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/towers/'.$tower->id
        );

        $this->response->assertStatus(404);
    }
}
