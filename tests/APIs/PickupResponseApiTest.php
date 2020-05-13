<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PickupResponse;

class PickupResponseApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/pickup_responses', $pickupResponse
        );

        $this->assertApiResponse($pickupResponse);
    }

    /**
     * @test
     */
    public function test_read_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/pickup_responses/'.$pickupResponse->id
        );

        $this->assertApiResponse($pickupResponse->toArray());
    }

    /**
     * @test
     */
    public function test_update_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();
        $editedPickupResponse = factory(PickupResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/pickup_responses/'.$pickupResponse->id,
            $editedPickupResponse
        );

        $this->assertApiResponse($editedPickupResponse);
    }

    /**
     * @test
     */
    public function test_delete_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/pickup_responses/'.$pickupResponse->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/pickup_responses/'.$pickupResponse->id
        );

        $this->response->assertStatus(404);
    }
}
