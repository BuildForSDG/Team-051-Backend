<?php namespace Tests\Repositories;

use App\Models\PoliceResponse;
use App\Repositories\PoliceResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PoliceResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PoliceResponseRepository
     */
    protected $policeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->policeRepo = app(PoliceResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->make()->toArray();

        $created = $this->policeRepo->create($policeResponse);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created PoliceResponse must have id specified');
        $this->assertNotNull((new PoliceResponse)->find($created['id']), 'PoliceResponse with given id must be in DB');
        $this->assertModelData($policeResponse, $created);
    }

    /**
     * @test read
     */
    public function test_read_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $dbPoliceResponse = $this->policeRepo->find($policeResponse->id);

        $dbPoliceResponse = $dbPoliceResponse->toArray();
        $this->assertModelData($policeResponse->toArray(), $dbPoliceResponse);
    }

    /**
     * @test update
     */
    public function test_update_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();
        $fake = factory(PoliceResponse::class)->make()->toArray();

        $updated = $this->policeRepo->update($fake, $policeResponse->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->policeRepo->find($policeResponse->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $resp = $this->policeRepo->delete($policeResponse->id);

        $this->assertTrue($resp);
        $this->assertNull((new PoliceResponse)->find($policeResponse->id), 'PoliceResponse should not exist in DB');
    }
}
