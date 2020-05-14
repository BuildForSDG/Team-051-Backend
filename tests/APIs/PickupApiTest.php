<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Pickup;

class PickupApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_pickup()
    {
        $pickup = factory(Pickup::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/pickups', $pickup
        );

        $this->assertApiResponse($pickup);
    }

    /**
     * @test
     */
    public function test_read_pickup()
    {
        $pickup = factory(Pickup::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/pickups/'.$pickup->id
        );

        $this->assertApiResponse($pickup->toArray());
    }

    /**
     * @test
     */
    public function test_update_pickup()
    {
        $pickup = factory(Pickup::class)->create();
        $editedPickup = factory(Pickup::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/pickups/'.$pickup->id,
            $editedPickup
        );

        $this->assertApiResponse($editedPickup);
    }

    /**
     * @test
     */
    public function test_delete_pickup()
    {
        $pickup = factory(Pickup::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/pickups/'.$pickup->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/pickups/'.$pickup->id
        );

        $this->response->assertStatus(404);
    }
}
