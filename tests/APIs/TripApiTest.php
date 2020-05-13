<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Trip;

class TripApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_trip()
    {
        $trip = factory(Trip::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/trips', $trip
        );

        $this->assertApiResponse($trip);
    }

    /**
     * @test
     */
    public function test_read_trip()
    {
        $trip = factory(Trip::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/trips/'.$trip->id
        );

        $this->assertApiResponse($trip->toArray());
    }

    /**
     * @test
     */
    public function test_update_trip()
    {
        $trip = factory(Trip::class)->create();
        $editedTrip = factory(Trip::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/trips/'.$trip->id,
            $editedTrip
        );

        $this->assertApiResponse($editedTrip);
    }

    /**
     * @test
     */
    public function test_delete_trip()
    {
        $trip = factory(Trip::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/trips/'.$trip->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/trips/'.$trip->id
        );

        $this->response->assertStatus(404);
    }
}
