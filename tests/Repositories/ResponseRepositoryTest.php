<?php namespace Tests\Repositories;

use App\Models\Response;
use App\Repositories\ResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ResponseRepository
     */
    protected $responseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->responseRepo = \App::make(ResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_response()
    {
        $response = factory(Response::class)->make()->toArray();

        $created = $this->responseRepo->create($response);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created Response must have id specified');
        $this->assertNotNull(Response::find($created['id']), 'Response with given id must be in DB');
        $this->assertModelData($response, $created);
    }

    /**
     * @test read
     */
    public function test_read_response()
    {
        $response = factory(Response::class)->create();

        $db = $this->responseRepo->find($response->id);

        $db = $db->toArray();
        $this->assertModelData($response->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_response()
    {
        $response = factory(Response::class)->create();
        $fake = factory(Response::class)->make()->toArray();

        $updated = $this->responseRepo->update($fake, $response->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->responseRepo->find($response->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_response()
    {
        $response = factory(Response::class)->create();

        $resp = $this->responseRepo->delete($response->id);

        $this->assertTrue($resp);
        $this->assertNull(Response::find($response->id), 'Response should not exist in DB');
    }
}
