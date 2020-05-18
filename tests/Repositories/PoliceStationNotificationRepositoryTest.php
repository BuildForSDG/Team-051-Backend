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
    protected $notificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->notificationRepo = app(PoliceStationNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->make()->toArray();

        $created = $this->notificationRepo->create($notification);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created PoliceStationNotification must have id specified');
        $this->assertNotNull((new PoliceStationNotification)->find($created['id']), 'PoliceStationNotification with given id must be in DB');
        $this->assertModelData($notification, $created);
    }

    /**
     * @test read
     */
    public function test_read_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();

        $database = $this->notificationRepo->find($notification->id);

        $database = $database ->toArray();
        $this->assertModelData($notification->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();
        $fake = factory(PoliceStationNotification::class)->make()->toArray();

        $updated = $this->notificationRepo->update($fake, $notification->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->notificationRepo->find($notification->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();

        $resp = $this->notificationRepo->delete($notification->id);

        $this->assertTrue($resp);
        $this->assertNull((new PoliceStationNotification)->find($notification->id), 'PoliceStationNotification should not exist in DB');
    }
}
