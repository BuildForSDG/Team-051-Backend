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
    protected $towerRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->towerRepo = \App::make(TowerNotificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->make()->toArray();

        $created = $this->towerRepo->create($towerNotification);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created TowerNotification must have id specified');
        $this->assertNotNull(TowerNotification::find($created['id']), 'TowerNotification with given id must be in DB');
        $this->assertModelData($towerNotification, $created);
    }

    /**
     * @test read
     */
    public function test_read_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $db = $this->towerRepo->find($towerNotification->id);

        $db = $db->toArray();
        $this->assertModelData($towerNotification->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();
        $fake = factory(TowerNotification::class)->make()->toArray();

        $updated = $this->towerRepo->update($fake, $towerNotification->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->towerRepo->find($towerNotification->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $resp = $this->towerRepo->delete($towerNotification->id);

        $this->assertTrue($resp);
        $this->assertNull(TowerNotification::find($towerNotification->id), 'TowerNotification should not exist in DB');
    }
}
