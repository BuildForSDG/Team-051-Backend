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
    protected $stationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->stationRepo = app(PoliceStationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_station()
    {
        $policeStation = factory(PoliceStation::class)->make()->toArray();

        $created = $this->stationRepo->create($policeStation);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created PoliceStation must have id specified');
        $this->assertNotNull(PoliceStation::find($created['id']), 'PoliceStation with given id must be in DB');
        $this->assertModelData($policeStation, $created);
    }

    /**
     * @test read
     */
    public function test_read_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $database = $this->stationRepo->find($policeStation->id);

        $database = $database ->toArray();
        $this->assertModelData($policeStation->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();
        $fake = factory(PoliceStation::class)->make()->toArray();

        $updated = $this->stationRepo->update($fake, $policeStation->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->stationRepo->find($policeStation->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $resp = $this->stationRepo->delete($policeStation->id);

        $this->assertTrue($resp);
        $this->assertNull(PoliceStation::find($policeStation->id), 'PoliceStation should not exist in DB');
    }
}
