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
        $this->towerRepo = app(TowerNotificationRepository::class);
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
        $this->assertNotNull((new TowerNotification)->find($created['id']), 'TowerNotification with given id must be in DB');
        $this->assertModelData($towerNotification, $created);
    }

    /**
     * @test read
     */
    public function test_read_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $database = $this->towerRepo->find($towerNotification->id);

        $database = $database ->toArray();
        $this->assertModelData($towerNotification->toArray(), $database);
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
        $database = $this->towerRepo->find($towerNotification->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $resp = $this->towerRepo->delete($towerNotification->id);

        $this->assertTrue($resp);
        $this->assertNull((new TowerNotification)->find($towerNotification->id), 'TowerNotification should not exist in DB');
    }
}
