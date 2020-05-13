<?php namespace Tests\Repositories;

use App\Models\PoliceStationNotification;
use App\Repositories\PoliceStationNotificationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PoliceStationNotificationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PoliceStationNotificationRepository
     */
    protected $policeStationNotificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->policeStationNotificationRepo = \App::make(PoliceStationNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->make()->toArray();

        $createdPoliceStationNotification = $this->policeStationNotificationRepo->create($policeStationNotification);

        $createdPoliceStationNotification = $createdPoliceStationNotification->toArray();
        $this->assertArrayHasKey('id', $createdPoliceStationNotification);
        $this->assertNotNull($createdPoliceStationNotification['id'], 'Created PoliceStationNotification must have id specified');
        $this->assertNotNull(PoliceStationNotification::find($createdPoliceStationNotification['id']), 'PoliceStationNotification with given id must be in DB');
        $this->assertModelData($policeStationNotification, $createdPoliceStationNotification);
    }

    /**
     * @test read
     */
    public function test_read_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();

        $dbPoliceStationNotification = $this->policeStationNotificationRepo->find($policeStationNotification->id);

        $dbPoliceStationNotification = $dbPoliceStationNotification->toArray();
        $this->assertModelData($policeStationNotification->toArray(), $dbPoliceStationNotification);
    }

    /**
     * @test update
     */
    public function test_update_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();
        $fakePoliceStationNotification = factory(PoliceStationNotification::class)->make()->toArray();

        $updatedPoliceStationNotification = $this->policeStationNotificationRepo->update($fakePoliceStationNotification, $policeStationNotification->id);

        $this->assertModelData($fakePoliceStationNotification, $updatedPoliceStationNotification->toArray());
        $dbPoliceStationNotification = $this->policeStationNotificationRepo->find($policeStationNotification->id);
        $this->assertModelData($fakePoliceStationNotification, $dbPoliceStationNotification->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();

        $resp = $this->policeStationNotificationRepo->delete($policeStationNotification->id);

        $this->assertTrue($resp);
        $this->assertNull(PoliceStationNotification::find($policeStationNotification->id), 'PoliceStationNotification should not exist in DB');
    }
}
