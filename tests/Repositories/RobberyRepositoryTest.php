<?php namespace Tests\Repositories;

use App\Models\Robbery;
use App\Repositories\RobberyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RobberyRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RobberyRepository
     */
    protected $robberyRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->robberyRepo = \App::make(RobberyRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_robbery()
    {
        $robbery = factory(Robbery::class)->make()->toArray();

        $created = $this->robberyRepo->create($robbery);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created Robbery must have id specified');
        $this->assertNotNull(Robbery::find($created['id']), 'Robbery with given id must be in DB');
        $this->assertModelData($robbery, $created);
    }

    /**
     * @test read
     */
    public function test_read_robbery()
    {
        $robbery = factory(Robbery::class)->create();

        $db = $this->robberyRepo->find($robbery->id);

        $db = $db->toArray();
        $this->assertModelData($robbery->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_robbery()
    {
        $robbery = factory(Robbery::class)->create();
        $fake = factory(Robbery::class)->make()->toArray();

        $updated = $this->robberyRepo->update($fake, $robbery->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->robberyRepo->find($robbery->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_robbery()
    {
        $robbery = factory(Robbery::class)->create();

        $resp = $this->robberyRepo->delete($robbery->id);

        $this->assertTrue($resp);
        $this->assertNull(Robbery::find($robbery->id), 'Robbery should not exist in DB');
    }
}
