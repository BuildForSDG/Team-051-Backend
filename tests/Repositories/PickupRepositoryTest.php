<?php namespace Tests\Repositories;

use App\Models\Pickup;
use App\Repositories\PickupRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PickupRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PickupRepository
     */
    protected $pickupRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->pickupRepo = app(PickupRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_pickup()
    {
        $pickup = factory(Pickup::class)->make()->toArray();

        $createdPickup = $this->pickupRepo->create($pickup);

        $createdPickup = $createdPickup->toArray();
        $this->assertArrayHasKey('id', $createdPickup);
        $this->assertNotNull($createdPickup['id'], 'Created Pickup must have id specified');
        $this->assertNotNull(Pickup::find($createdPickup['id']), 'Pickup with given id must be in DB');
        $this->assertModelData($pickup, $createdPickup);
    }

    /**
     * @test read
     */
    public function test_read_pickup()
    {
        $pickup = factory(Pickup::class)->create();

        $dbPickup = $this->pickupRepo->find($pickup->id);

        $dbPickup = $dbPickup->toArray();
        $this->assertModelData($pickup->toArray(), $dbPickup);
    }

    /**
     * @test update
     */
    public function test_update_pickup()
    {
        $pickup = factory(Pickup::class)->create();
        $fakePickup = factory(Pickup::class)->make()->toArray();

        $updatedPickup = $this->pickupRepo->update($fakePickup, $pickup->id);

        $this->assertModelData($fakePickup, $updatedPickup->toArray());
        $dbPickup = $this->pickupRepo->find($pickup->id);
        $this->assertModelData($fakePickup, $dbPickup->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_pickup()
    {
        $pickup = factory(Pickup::class)->create();

        $resp = $this->pickupRepo->delete($pickup->id);

        $this->assertTrue($resp);
        $this->assertNull(Pickup::find($pickup->id), 'Pickup should not exist in DB');
    }
}
