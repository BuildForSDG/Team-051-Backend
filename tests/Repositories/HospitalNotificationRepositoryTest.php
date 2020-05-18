<?php namespace Tests\Repositories;

use App\Models\HospitalNotification;
use App\Repositories\HospitalNotificationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class HospitalNotificationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var HospitalNotificationRepository
     */
    protected $notificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->notificationRepo = app(HospitalNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hospital_notification()
    {
        $notification = factory(HospitalNotification::class)->make()->toArray();

        $created = $this->notificationRepo->create($notification);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created HospitalNotification must have id specified');
        $this->assertNotNull((new HospitalNotification)->find($created['id']), 'HospitalNotification with given id must be in DB');
        $this->assertModelData($notification, $created);
    }

    /**
     * @test read
     */
    public function test_read_hospital_notification()
    {
        $notification = factory(HospitalNotification::class)->create();

        $database = $this->notificationRepo->find($notification->id);

        $database = $database ->toArray();
        $this->assertModelData($notification->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_hospital_notification()
    {
        $notification = factory(HospitalNotification::class)->create();
        $fake = factory(HospitalNotification::class)->make()->toArray();

        $updated = $this->notificationRepo->update($fake, $notification->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->notificationRepo->find($notification->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hospital_notification()
    {
        $notification = factory(HospitalNotification::class)->create();

        $resp = $this->notificationRepo->delete($notification->id);

        $this->assertTrue($resp);
        $this->assertNull((new HospitalNotification)->find($notification->id), 'HospitalNotification should not exist in DB');
    }
}
