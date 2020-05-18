<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\RoadSafetyResponse;

class RoadSafetyResponseApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_road_safety_response()
    {
        $response = factory(RoadSafetyResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/road-safety-responses', $response
        );

        $this->assertApiResponse($response);
    }

    /**
     * @test
     */
    public function test_read_road_safety_response()
    {
        $response = factory(RoadSafetyResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/road-safety-responses/'.$response->id
        );

        $this->assertApiResponse($response->toArray());
    }

    /**
     * @test
     */
    public function test_update_road_safety_response()
    {
        $response = factory(RoadSafetyResponse::class)->create();
        $editedRoadSafetyResponse = factory(RoadSafetyResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/road-safety-responses/'.$response->id,
            $editedRoadSafetyResponse
        );

        $this->assertApiResponse($editedRoadSafetyResponse);
    }

    /**
     * @test
     */
    public function test_delete_road_safety_response()
    {
        $response = factory(RoadSafetyResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/road-safety-responses/'.$response->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/road-safety-responses/'.$response->id
        );

        $this->response->assertStatus(404);
    }
}
