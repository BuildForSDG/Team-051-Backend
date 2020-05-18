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
    protected $pickup;

    public function setUp() : void
    {
        parent::setUp();
        $this->pickup = app(PickupResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_pickup_response()
    {
        $pickup = factory(PickupResponse::class)->make()->toArray();

        $created = $this->pickup->create($pickup);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created PickupResponse must have id specified');
        $this->assertNotNull((new PickupResponse)->find($created['id']), 'PickupResponse with given id must be in DB');
        $this->assertModelData($pickup, $created);
    }

    /**
     * @test read
     */
    public function test_read_pickup_response()
    {
        $pickup = factory(PickupResponse::class)->create();

        $database = $this->pickup->find($pickup->id);

        $database = $database ->toArray();
        $this->assertModelData($pickup->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_pickup_response()
    {
        $pickup = factory(PickupResponse::class)->create();
        $fake = factory(PickupResponse::class)->make()->toArray();

        $updated = $this->pickup->update($fake, $pickup->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->pickup->find($pickup->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_pickup_response()
    {
        $pickup = factory(PickupResponse::class)->create();

        $resp = $this->pickup->delete($pickup->id);

        $this->assertTrue($resp);
        $this->assertNull((new PickupResponse)->find($pickup->id), 'PickupResponse should not exist in DB');
    }
}
