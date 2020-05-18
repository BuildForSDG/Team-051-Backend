<?php namespace Tests\Repositories;

use App\Models\Panic;
use App\Repositories\PanicRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PanicRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PanicRepository
     */
    protected $panicRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->panicRepo = app(PanicRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_panic()
    {
        $panic = factory(Panic::class)->make()->toArray();

        $createdPanic = $this->panicRepo->create($panic);

        $createdPanic = $createdPanic->toArray();
        $this->assertArrayHasKey('id', $createdPanic);
        $this->assertNotNull($createdPanic['id'], 'Created Panic must have id specified');
        $this->assertNotNull(Panic::find($createdPanic['id']), 'Panic with given id must be in DB');
        $this->assertModelData($panic, $createdPanic);
    }

    /**
     * @test read
     */
    public function test_read_panic()
    {
        $panic = factory(Panic::class)->create();

        $dbPanic = $this->panicRepo->find($panic->id);

        $dbPanic = $dbPanic->toArray();
        $this->assertModelData($panic->toArray(), $dbPanic);
    }

    /**
     * @test update
     */
    public function test_update_panic()
    {
        $panic = factory(Panic::class)->create();
        $fakePanic = factory(Panic::class)->make()->toArray();

        $updatedPanic = $this->panicRepo->update($fakePanic, $panic->id);

        $this->assertModelData($fakePanic, $updatedPanic->toArray());
        $dbPanic = $this->panicRepo->find($panic->id);
        $this->assertModelData($fakePanic, $dbPanic->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_panic()
    {
        $panic = factory(Panic::class)->create();

        $resp = $this->panicRepo->delete($panic->id);

        $this->assertTrue($resp);
        $this->assertNull(Panic::find($panic->id), 'Panic should not exist in DB');
    }
}
