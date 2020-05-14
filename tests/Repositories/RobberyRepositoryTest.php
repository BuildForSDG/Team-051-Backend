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

        $createdRobbery = $this->robberyRepo->create($robbery);

        $createdRobbery = $createdRobbery->toArray();
        $this->assertArrayHasKey('id', $createdRobbery);
        $this->assertNotNull($createdRobbery['id'], 'Created Robbery must have id specified');
        $this->assertNotNull(Robbery::find($createdRobbery['id']), 'Robbery with given id must be in DB');
        $this->assertModelData($robbery, $createdRobbery);
    }

    /**
     * @test read
     */
    public function test_read_robbery()
    {
        $robbery = factory(Robbery::class)->create();

        $dbRobbery = $this->robberyRepo->find($robbery->id);

        $dbRobbery = $dbRobbery->toArray();
        $this->assertModelData($robbery->toArray(), $dbRobbery);
    }

    /**
     * @test update
     */
    public function test_update_robbery()
    {
        $robbery = factory(Robbery::class)->create();
        $fakeRobbery = factory(Robbery::class)->make()->toArray();

        $updatedRobbery = $this->robberyRepo->update($fakeRobbery, $robbery->id);

        $this->assertModelData($fakeRobbery, $updatedRobbery->toArray());
        $dbRobbery = $this->robberyRepo->find($robbery->id);
        $this->assertModelData($fakeRobbery, $dbRobbery->toArray());
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
