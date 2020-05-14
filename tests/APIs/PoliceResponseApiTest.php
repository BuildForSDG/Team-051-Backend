<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PoliceResponse;

class PoliceResponseApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/police-responses', $policeResponse
        );

        $this->assertApiResponse($policeResponse);
    }

    /**
     * @test
     */
    public function test_read_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/police-responses/'.$policeResponse->id
        );

        $this->assertApiResponse($policeResponse->toArray());
    }

    /**
     * @test
     */
    public function test_update_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();
        $editedPoliceResponse = factory(PoliceResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/police-responses/'.$policeResponse->id,
            $editedPoliceResponse
        );

        $this->assertApiResponse($editedPoliceResponse);
    }

    /**
     * @test
     */
    public function test_delete_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/police-responses/'.$policeResponse->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/police-responses/'.$policeResponse->id
        );

        $this->response->assertStatus(404);
    }
}
