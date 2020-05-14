<?php namespace Tests\Repositories;

use App\Models\Accident;
use App\Repositories\AccidentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AccidentRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AccidentRepository
     */
    protected $accidentRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->accidentRepo = \App::make(AccidentRepository::class);
    }

    /**
     * @test_create_accident
     */
    public function test_create_accident()
    {
        $accident = factory(Accident::class)->make()->toArray();

        $createdAccident = $this->accidentRepo->create($accident);

        $createdAccident = $createdAccident->toArray();
        $this->assertArrayHasKey('id', $createdAccident);
        $this->assertNotNull($createdAccident['id'], 'Created Accident must have id specified');
        $this->assertNotNull(Accident::find($createdAccident['id']), 'Accident with given id must be in DB');
        $this->assertModelData($accident, $createdAccident);
    }

    /**
     * @test read
     */
    public function test_read_accident()
    {
        $accident = factory(Accident::class)->create();

        $dbAccident = $this->accidentRepo->find($accident->id);

        $dbAccident = $dbAccident->toArray();
        $this->assertModelData($accident->toArray(), $dbAccident);
    }

    /**
     * @test update
     */
    public function test_update_accident()
    {
        $accident = factory(Accident::class)->create();
        $fakeAccident = factory(Accident::class)->make()->toArray();

        $updatedAccident = $this->accidentRepo->update($fakeAccident, $accident->id);

        $this->assertModelData($fakeAccident, $updatedAccident->toArray());
        $dbAccident = $this->accidentRepo->find($accident->id);
        $this->assertModelData($fakeAccident, $dbAccident->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_accident()
    {
        $accident = factory(Accident::class)->create();

        $resp = $this->accidentRepo->delete($accident->id);

        $this->assertTrue($resp);
        $this->assertNull(Accident::find($accident->id), 'Accident should not exist in DB');
    }
}
