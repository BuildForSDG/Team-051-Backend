<?php namespace Tests\Repositories;

use App\Models\PickupResponse;
use App\Repositories\PickupResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PickupResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PickupResponseRepository
     */
    protected $pickupResponseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->pickupResponseRepo = \App::make(PickupResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->make()->toArray();

        $createdPickupResponse = $this->pickupResponseRepo->create($pickupResponse);

        $createdPickupResponse = $createdPickupResponse->toArray();
        $this->assertArrayHasKey('id', $createdPickupResponse);
        $this->assertNotNull($createdPickupResponse['id'], 'Created PickupResponse must have id specified');
        $this->assertNotNull(PickupResponse::find($createdPickupResponse['id']), 'PickupResponse with given id must be in DB');
        $this->assertModelData($pickupResponse, $createdPickupResponse);
    }

    /**
     * @test read
     */
    public function test_read_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();

        $dbPickupResponse = $this->pickupResponseRepo->find($pickupResponse->id);

        $dbPickupResponse = $dbPickupResponse->toArray();
        $this->assertModelData($pickupResponse->toArray(), $dbPickupResponse);
    }

    /**
     * @test update
     */
    public function test_update_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();
        $fakePickupResponse = factory(PickupResponse::class)->make()->toArray();

        $updatedPickupResponse = $this->pickupResponseRepo->update($fakePickupResponse, $pickupResponse->id);

        $this->assertModelData($fakePickupResponse, $updatedPickupResponse->toArray());
        $dbPickupResponse = $this->pickupResponseRepo->find($pickupResponse->id);
        $this->assertModelData($fakePickupResponse, $dbPickupResponse->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_pickup_response()
    {
        $pickupResponse = factory(PickupResponse::class)->create();

        $resp = $this->pickupResponseRepo->delete($pickupResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(PickupResponse::find($pickupResponse->id), 'PickupResponse should not exist in DB');
    }
}
