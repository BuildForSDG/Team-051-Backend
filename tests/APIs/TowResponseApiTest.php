<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\TowResponse;

class TowResponseApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tow_response()
    {
        $towResponse = factory(TowResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tow-responses', $towResponse
        );

        $this->assertApiResponse($towResponse);
    }

    /**
     * @test
     */
    public function test_read_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tow-responses/'.$towResponse->id
        );

        $this->assertApiResponse($towResponse->toArray());
    }

    /**
     * @test
     */
    public function test_update_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();
        $editedTowResponse = factory(TowResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tow-responses/'.$towResponse->id,
            $editedTowResponse
        );

        $this->assertApiResponse($editedTowResponse);
    }

    /**
     * @test
     */
    public function test_delete_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tow-responses/'.$towResponse->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tow-responses/'.$towResponse->id
        );

        $this->response->assertStatus(404);
    }
}
