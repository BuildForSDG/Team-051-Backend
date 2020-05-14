<?php namespace Tests\Repositories;

use App\Models\Tower;
use App\Repositories\TowerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TowerRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TowerRepository
     */
    protected $towerRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->towerRepo = \App::make(TowerRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tower()
    {
        $tower = factory(Tower::class)->make()->toArray();

        $createdTower = $this->towerRepo->create($tower);

        $createdTower = $createdTower->toArray();
        $this->assertArrayHasKey('id', $createdTower);
        $this->assertNotNull($createdTower['id'], 'Created Tower must have id specified');
        $this->assertNotNull(Tower::find($createdTower['id']), 'Tower with given id must be in DB');
        $this->assertModelData($tower, $createdTower);
    }

    /**
     * @test read
     */
    public function test_read_tower()
    {
        $tower = factory(Tower::class)->create();

        $dbTower = $this->towerRepo->find($tower->id);

        $dbTower = $dbTower->toArray();
        $this->assertModelData($tower->toArray(), $dbTower);
    }

    /**
     * @test update
     */
    public function test_update_tower()
    {
        $tower = factory(Tower::class)->create();
        $fakeTower = factory(Tower::class)->make()->toArray();

        $updatedTower = $this->towerRepo->update($fakeTower, $tower->id);

        $this->assertModelData($fakeTower, $updatedTower->toArray());
        $dbTower = $this->towerRepo->find($tower->id);
        $this->assertModelData($fakeTower, $dbTower->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tower()
    {
        $tower = factory(Tower::class)->create();

        $resp = $this->towerRepo->delete($tower->id);

        $this->assertTrue($resp);
        $this->assertNull(Tower::find($tower->id), 'Tower should not exist in DB');
    }
}
