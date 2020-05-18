<?php namespace Tests\Repositories;

use App\Models\TowResponse;
use App\Repositories\TowResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TowResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TowResponseRepository
     */
    protected $towRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->towRepo = \App::make(TowResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tow_response()
    {
        $towResponse = factory(TowResponse::class)->make()->toArray();

        $created = $this->towRepo->create($towResponse);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created TowResponse must have id specified');
        $this->assertNotNull(TowResponse::find($created['id']), 'TowResponse with given id must be in DB');
        $this->assertModelData($towResponse, $created);
    }

    /**
     * @test read
     */
    public function test_read_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $db = $this->towRepo->find($towResponse->id);

        $db = $db->toArray();
        $this->assertModelData($towResponse->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();
        $fake = factory(TowResponse::class)->make()->toArray();

        $updated = $this->towRepo->update($fake, $towResponse->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->towRepo->find($towResponse->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $resp = $this->towRepo->delete($towResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(TowResponse::find($towResponse->id), 'TowResponse should not exist in DB');
    }
}
