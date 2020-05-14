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
    protected $safetyForceRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->safetyForceRepo = \App::make(SafetyForceRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->make()->toArray();

        $createdSafetyForce = $this->safetyForceRepo->create($safetyForce);

        $createdSafetyForce = $createdSafetyForce->toArray();
        $this->assertArrayHasKey('id', $createdSafetyForce);
        $this->assertNotNull($createdSafetyForce['id'], 'Created SafetyForce must have id specified');
        $this->assertNotNull(SafetyForce::find($createdSafetyForce['id']), 'SafetyForce with given id must be in DB');
        $this->assertModelData($safetyForce, $createdSafetyForce);
    }

    /**
     * @test read
     */
    public function test_read_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $dbSafetyForce = $this->safetyForceRepo->find($safetyForce->id);

        $dbSafetyForce = $dbSafetyForce->toArray();
        $this->assertModelData($safetyForce->toArray(), $dbSafetyForce);
    }

    /**
     * @test update
     */
    public function test_update_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();
        $fakeSafetyForce = factory(SafetyForce::class)->make()->toArray();

        $updatedSafetyForce = $this->safetyForceRepo->update($fakeSafetyForce, $safetyForce->id);

        $this->assertModelData($fakeSafetyForce, $updatedSafetyForce->toArray());
        $dbSafetyForce = $this->safetyForceRepo->find($safetyForce->id);
        $this->assertModelData($fakeSafetyForce, $dbSafetyForce->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $resp = $this->safetyForceRepo->delete($safetyForce->id);

        $this->assertTrue($resp);
        $this->assertNull(SafetyForce::find($safetyForce->id), 'SafetyForce should not exist in DB');
    }
}
