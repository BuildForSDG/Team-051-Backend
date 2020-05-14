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
    protected $towResponseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->towResponseRepo = \App::make(TowResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tow_response()
    {
        $towResponse = factory(TowResponse::class)->make()->toArray();

        $createdTowResponse = $this->towResponseRepo->create($towResponse);

        $createdTowResponse = $createdTowResponse->toArray();
        $this->assertArrayHasKey('id', $createdTowResponse);
        $this->assertNotNull($createdTowResponse['id'], 'Created TowResponse must have id specified');
        $this->assertNotNull(TowResponse::find($createdTowResponse['id']), 'TowResponse with given id must be in DB');
        $this->assertModelData($towResponse, $createdTowResponse);
    }

    /**
     * @test read
     */
    public function test_read_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $dbTowResponse = $this->towResponseRepo->find($towResponse->id);

        $dbTowResponse = $dbTowResponse->toArray();
        $this->assertModelData($towResponse->toArray(), $dbTowResponse);
    }

    /**
     * @test update
     */
    public function test_update_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();
        $fakeTowResponse = factory(TowResponse::class)->make()->toArray();

        $updatedTowResponse = $this->towResponseRepo->update($fakeTowResponse, $towResponse->id);

        $this->assertModelData($fakeTowResponse, $updatedTowResponse->toArray());
        $dbTowResponse = $this->towResponseRepo->find($towResponse->id);
        $this->assertModelData($fakeTowResponse, $dbTowResponse->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tow_response()
    {
        $towResponse = factory(TowResponse::class)->create();

        $resp = $this->towResponseRepo->delete($towResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(TowResponse::find($towResponse->id), 'TowResponse should not exist in DB');
    }
}
