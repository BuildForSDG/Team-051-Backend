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
    protected $hospitalNotificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->hospitalNotificationRepo = \App::make(HospitalNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->make()->toArray();

        $createdHospitalNotification = $this->hospitalNotificationRepo->create($hospitalNotification);

        $createdHospitalNotification = $createdHospitalNotification->toArray();
        $this->assertArrayHasKey('id', $createdHospitalNotification);
        $this->assertNotNull($createdHospitalNotification['id'], 'Created HospitalNotification must have id specified');
        $this->assertNotNull(HospitalNotification::find($createdHospitalNotification['id']), 'HospitalNotification with given id must be in DB');
        $this->assertModelData($hospitalNotification, $createdHospitalNotification);
    }

    /**
     * @test read
     */
    public function test_read_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();

        $dbHospitalNotification = $this->hospitalNotificationRepo->find($hospitalNotification->id);

        $dbHospitalNotification = $dbHospitalNotification->toArray();
        $this->assertModelData($hospitalNotification->toArray(), $dbHospitalNotification);
    }

    /**
     * @test update
     */
    public function test_update_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();
        $fakeHospitalNotification = factory(HospitalNotification::class)->make()->toArray();

        $updatedHospitalNotification = $this->hospitalNotificationRepo->update($fakeHospitalNotification, $hospitalNotification->id);

        $this->assertModelData($fakeHospitalNotification, $updatedHospitalNotification->toArray());
        $dbHospitalNotification = $this->hospitalNotificationRepo->find($hospitalNotification->id);
        $this->assertModelData($fakeHospitalNotification, $dbHospitalNotification->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();

        $resp = $this->hospitalNotificationRepo->delete($hospitalNotification->id);

        $this->assertTrue($resp);
        $this->assertNull(HospitalNotification::find($hospitalNotification->id), 'HospitalNotification should not exist in DB');
    }
}
