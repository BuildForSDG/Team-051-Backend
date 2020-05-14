<?php namespace Tests\Repositories;

use App\Models\TowerNotification;
use App\Repositories\TowerNotificationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TowerNotificationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TowerNotificationRepository
     */
    protected $towerNotificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->towerNotificationRepo = \App::make(TowerNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->make()->toArray();

        $createdTowerNotification = $this->towerNotificationRepo->create($towerNotification);

        $createdTowerNotification = $createdTowerNotification->toArray();
        $this->assertArrayHasKey('id', $createdTowerNotification);
        $this->assertNotNull($createdTowerNotification['id'], 'Created TowerNotification must have id specified');
        $this->assertNotNull(TowerNotification::find($createdTowerNotification['id']), 'TowerNotification with given id must be in DB');
        $this->assertModelData($towerNotification, $createdTowerNotification);
    }

    /**
     * @test read
     */
    public function test_read_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $dbTowerNotification = $this->towerNotificationRepo->find($towerNotification->id);

        $dbTowerNotification = $dbTowerNotification->toArray();
        $this->assertModelData($towerNotification->toArray(), $dbTowerNotification);
    }

    /**
     * @test update
     */
    public function test_update_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();
        $fakeTowerNotification = factory(TowerNotification::class)->make()->toArray();

        $updatedTowerNotification = $this->towerNotificationRepo->update($fakeTowerNotification, $towerNotification->id);

        $this->assertModelData($fakeTowerNotification, $updatedTowerNotification->toArray());
        $dbTowerNotification = $this->towerNotificationRepo->find($towerNotification->id);
        $this->assertModelData($fakeTowerNotification, $dbTowerNotification->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $resp = $this->towerNotificationRepo->delete($towerNotification->id);

        $this->assertTrue($resp);
        $this->assertNull(TowerNotification::find($towerNotification->id), 'TowerNotification should not exist in DB');
    }
}
