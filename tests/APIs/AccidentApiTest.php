<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Accident;

class AccidentApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_accident()
    {
        $accident = factory(Accident::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/accidents', $accident
        );

        $this->assertApiResponse($accident);
    }

    /**
     * @test
     */
    public function test_read_accident()
    {
        $accident = factory(Accident::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/accidents/'.$accident->id
        );

        $this->assertApiResponse($accident->toArray());
    }

    /**
     * @test
     */
    public function test_update_accident()
    {
        $accident = factory(Accident::class)->create();
        $editedAccident = factory(Accident::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/accidents/'.$accident->id,
            $editedAccident
        );

        $this->assertApiResponse($editedAccident);
    }

    /**
     * @test
     */
    public function test_delete_accident()
    {
        $accident = factory(Accident::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/accidents/'.$accident->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/accidents/'.$accident->id
        );

        $this->response->assertStatus(404);
    }
}
