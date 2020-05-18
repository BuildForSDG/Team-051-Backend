<?php namespace Tests\Repositories;

use App\Models\RoadSafetyResponse;
use App\Repositories\RoadSafetyResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RoadSafetyResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RoadSafetyResponseRepository
     */
    protected $safetyRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->safetyRepo = \App::make(RoadSafetyResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_road_safety_response()
    {
        $safety = factory(RoadSafetyResponse::class)->make()->toArray();

        $created = $this->safetyRepo->create($safety);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created RoadSafetyResponse must have id specified');
        $this->assertNotNull(RoadSafetyResponse::find($created['id']), 'RoadSafetyResponse with given id must be in DB');
        $this->assertModelData($safety, $created);
    }

    /**
     * @test read
     */
    public function test_read_road_safety_response()
    {
        $safety = factory(RoadSafetyResponse::class)->create();

        $db = $this->safetyRepo->find($safety->id);

        $db = $db->toArray();
        $this->assertModelData($safety->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_road_safety_response()
    {
        $safety = factory(RoadSafetyResponse::class)->create();
        $fake = factory(RoadSafetyResponse::class)->make()->toArray();

        $updated = $this->safetyRepo->update($fake, $safety->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->safetyRepo->find($safety->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_road_safety_response()
    {
        $safety = factory(RoadSafetyResponse::class)->create();

        $resp = $this->safetyRepo->delete($safety->id);

        $this->assertTrue($resp);
        $this->assertNull(RoadSafetyResponse::find($safety->id), 'RoadSafetyResponse should not exist in DB');
    }
}
