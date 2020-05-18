<?php namespace Tests\Repositories;

use App\Models\Road;
use App\Repositories\RoadRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RoadRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RoadRepository
     */
    protected $roadRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->roadRepo = app(RoadRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_road()
    {
        $road = factory(Road::class)->make()->toArray();

        $createdRoad = $this->roadRepo->create($road);

        $createdRoad = $createdRoad->toArray();
        $this->assertArrayHasKey('id', $createdRoad);
        $this->assertNotNull($createdRoad['id'], 'Created Road must have id specified');
        $this->assertNotNull(Road::find($createdRoad['id']), 'Road with given id must be in DB');
        $this->assertModelData($road, $createdRoad);
    }

    /**
     * @test read
     */
    public function test_read_road()
    {
        $road = factory(Road::class)->create();

        $dbRoad = $this->roadRepo->find($road->id);

        $dbRoad = $dbRoad->toArray();
        $this->assertModelData($road->toArray(), $dbRoad);
    }

    /**
     * @test update
     */
    public function test_update_road()
    {
        $road = factory(Road::class)->create();
        $fakeRoad = factory(Road::class)->make()->toArray();

        $updatedRoad = $this->roadRepo->update($fakeRoad, $road->id);

        $this->assertModelData($fakeRoad, $updatedRoad->toArray());
        $dbRoad = $this->roadRepo->find($road->id);
        $this->assertModelData($fakeRoad, $dbRoad->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_road()
    {
        $road = factory(Road::class)->create();

        $resp = $this->roadRepo->delete($road->id);

        $this->assertTrue($resp);
        $this->assertNull(Road::find($road->id), 'Road should not exist in DB');
    }
}
