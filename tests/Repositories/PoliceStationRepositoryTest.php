<?php namespace Tests\Repositories;

use App\Models\PoliceStation;
use App\Repositories\PoliceStationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PoliceStationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PoliceStationRepository
     */
    protected $policeStationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->policeStationRepo = \App::make(PoliceStationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_station()
    {
        $policeStation = factory(PoliceStation::class)->make()->toArray();

        $createdPoliceStation = $this->policeStationRepo->create($policeStation);

        $createdPoliceStation = $createdPoliceStation->toArray();
        $this->assertArrayHasKey('id', $createdPoliceStation);
        $this->assertNotNull($createdPoliceStation['id'], 'Created PoliceStation must have id specified');
        $this->assertNotNull(PoliceStation::find($createdPoliceStation['id']), 'PoliceStation with given id must be in DB');
        $this->assertModelData($policeStation, $createdPoliceStation);
    }

    /**
     * @test read
     */
    public function test_read_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $dbPoliceStation = $this->policeStationRepo->find($policeStation->id);

        $dbPoliceStation = $dbPoliceStation->toArray();
        $this->assertModelData($policeStation->toArray(), $dbPoliceStation);
    }

    /**
     * @test update
     */
    public function test_update_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();
        $fakePoliceStation = factory(PoliceStation::class)->make()->toArray();

        $updatedPoliceStation = $this->policeStationRepo->update($fakePoliceStation, $policeStation->id);

        $this->assertModelData($fakePoliceStation, $updatedPoliceStation->toArray());
        $dbPoliceStation = $this->policeStationRepo->find($policeStation->id);
        $this->assertModelData($fakePoliceStation, $dbPoliceStation->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $resp = $this->policeStationRepo->delete($policeStation->id);

        $this->assertTrue($resp);
        $this->assertNull(PoliceStation::find($policeStation->id), 'PoliceStation should not exist in DB');
    }
}
