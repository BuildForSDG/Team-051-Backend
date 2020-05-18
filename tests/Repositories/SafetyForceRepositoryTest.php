<?php namespace Tests\Repositories;

use App\Models\SafetyForce;
use App\Repositories\SafetyForceRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class SafetyForceRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var SafetyForceRepository
     */
    protected $safetyRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->safetyRepo = app(SafetyForceRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->make()->toArray();

        $created = $this->safetyRepo->create($safetyForce);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created SafetyForce must have id specified');
        $this->assertNotNull(SafetyForce::find($created['id']), 'SafetyForce with given id must be in DB');
        $this->assertModelData($safetyForce, $created);
    }

    /**
     * @test read
     */
    public function test_read_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $database = $this->safetyRepo->find($safetyForce->id);

        $database = $database ->toArray();
        $this->assertModelData($safetyForce->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();
        $fake = factory(SafetyForce::class)->make()->toArray();

        $updated = $this->safetyRepo->update($fake, $safetyForce->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->safetyRepo->find($safetyForce->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $resp = $this->safetyRepo->delete($safetyForce->id);

        $this->assertTrue($resp);
        $this->assertNull(SafetyForce::find($safetyForce->id), 'SafetyForce should not exist in DB');
    }
}
