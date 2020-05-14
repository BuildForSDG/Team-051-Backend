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
    protected $policeResponseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->policeResponseRepo = \App::make(PoliceResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->make()->toArray();

        $createdPoliceResponse = $this->policeResponseRepo->create($policeResponse);

        $createdPoliceResponse = $createdPoliceResponse->toArray();
        $this->assertArrayHasKey('id', $createdPoliceResponse);
        $this->assertNotNull($createdPoliceResponse['id'], 'Created PoliceResponse must have id specified');
        $this->assertNotNull(PoliceResponse::find($createdPoliceResponse['id']), 'PoliceResponse with given id must be in DB');
        $this->assertModelData($policeResponse, $createdPoliceResponse);
    }

    /**
     * @test read
     */
    public function test_read_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $dbPoliceResponse = $this->policeResponseRepo->find($policeResponse->id);

        $dbPoliceResponse = $dbPoliceResponse->toArray();
        $this->assertModelData($policeResponse->toArray(), $dbPoliceResponse);
    }

    /**
     * @test update
     */
    public function test_update_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();
        $fakePoliceResponse = factory(PoliceResponse::class)->make()->toArray();

        $updatedPoliceResponse = $this->policeResponseRepo->update($fakePoliceResponse, $policeResponse->id);

        $this->assertModelData($fakePoliceResponse, $updatedPoliceResponse->toArray());
        $dbPoliceResponse = $this->policeResponseRepo->find($policeResponse->id);
        $this->assertModelData($fakePoliceResponse, $dbPoliceResponse->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_police_response()
    {
        $policeResponse = factory(PoliceResponse::class)->create();

        $resp = $this->policeResponseRepo->delete($policeResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(PoliceResponse::find($policeResponse->id), 'PoliceResponse should not exist in DB');
    }
}
