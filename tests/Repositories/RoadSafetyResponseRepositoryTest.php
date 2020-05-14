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
    protected $roadSafetyResponseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->roadSafetyResponseRepo = \App::make(RoadSafetyResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_road_safety_response()
    {
        $roadSafetyResponse = factory(RoadSafetyResponse::class)->make()->toArray();

        $createdRoadSafetyResponse = $this->roadSafetyResponseRepo->create($roadSafetyResponse);

        $createdRoadSafetyResponse = $createdRoadSafetyResponse->toArray();
        $this->assertArrayHasKey('id', $createdRoadSafetyResponse);
        $this->assertNotNull($createdRoadSafetyResponse['id'], 'Created RoadSafetyResponse must have id specified');
        $this->assertNotNull(RoadSafetyResponse::find($createdRoadSafetyResponse['id']), 'RoadSafetyResponse with given id must be in DB');
        $this->assertModelData($roadSafetyResponse, $createdRoadSafetyResponse);
    }

    /**
     * @test read
     */
    public function test_read_road_safety_response()
    {
        $roadSafetyResponse = factory(RoadSafetyResponse::class)->create();

        $dbRoadSafetyResponse = $this->roadSafetyResponseRepo->find($roadSafetyResponse->id);

        $dbRoadSafetyResponse = $dbRoadSafetyResponse->toArray();
        $this->assertModelData($roadSafetyResponse->toArray(), $dbRoadSafetyResponse);
    }

    /**
     * @test update
     */
    public function test_update_road_safety_response()
    {
        $roadSafetyResponse = factory(RoadSafetyResponse::class)->create();
        $fakeRoadSafetyResponse = factory(RoadSafetyResponse::class)->make()->toArray();

        $updatedRoadSafetyResponse = $this->roadSafetyResponseRepo->update($fakeRoadSafetyResponse, $roadSafetyResponse->id);

        $this->assertModelData($fakeRoadSafetyResponse, $updatedRoadSafetyResponse->toArray());
        $dbRoadSafetyResponse = $this->roadSafetyResponseRepo->find($roadSafetyResponse->id);
        $this->assertModelData($fakeRoadSafetyResponse, $dbRoadSafetyResponse->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_road_safety_response()
    {
        $roadSafetyResponse = factory(RoadSafetyResponse::class)->create();

        $resp = $this->roadSafetyResponseRepo->delete($roadSafetyResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(RoadSafetyResponse::find($roadSafetyResponse->id), 'RoadSafetyResponse should not exist in DB');
    }
}
