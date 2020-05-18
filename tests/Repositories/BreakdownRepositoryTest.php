<?php namespace Tests\Repositories;

use App\Models\Breakdown;
use App\Repositories\BreakdownRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class BreakdownRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var BreakdownRepository
     */
    protected $breakdownRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->breakdownRepo = app(BreakdownRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_breakdown()
    {
        $breakdown = factory(Breakdown::class)->make()->toArray();

        $createdBreakdown = $this->breakdownRepo->create($breakdown);

        $createdBreakdown = $createdBreakdown->toArray();
        $this->assertArrayHasKey('id', $createdBreakdown);
        $this->assertNotNull($createdBreakdown['id'], 'Created Breakdown must have id specified');
        $this->assertNotNull((new Breakdown)->find($createdBreakdown['id']), 'Breakdown with given id must be in DB');
        $this->assertModelData($breakdown, $createdBreakdown);
    }

    /**
     * @test read
     */
    public function test_read_breakdown()
    {
        $breakdown = factory(Breakdown::class)->create();

        $dbBreakdown = $this->breakdownRepo->find($breakdown->id);

        $dbBreakdown = $dbBreakdown->toArray();
        $this->assertModelData($breakdown->toArray(), $dbBreakdown);
    }

    /**
     * @test update
     */
    public function test_update_breakdown()
    {
        $breakdown = factory(Breakdown::class)->create();
        $fakeBreakdown = factory(Breakdown::class)->make()->toArray();

        $updatedBreakdown = $this->breakdownRepo->update($fakeBreakdown, $breakdown->id);

        $this->assertModelData($fakeBreakdown, $updatedBreakdown->toArray());
        $dbBreakdown = $this->breakdownRepo->find($breakdown->id);
        $this->assertModelData($fakeBreakdown, $dbBreakdown->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_breakdown()
    {
        $breakdown = factory(Breakdown::class)->create();

        $resp = $this->breakdownRepo->delete($breakdown->id);

        $this->assertTrue($resp);
        $this->assertNull((new Breakdown)->find($breakdown->id), 'Breakdown should not exist in DB');
    }
}
