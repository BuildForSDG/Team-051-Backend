<?php namespace Tests\Repositories;

use App\Models\HospitalResponse;
use App\Repositories\HospitalResponseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class HospitalResponseRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var HospitalResponseRepository
     */
    protected $hospitalRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->hospitalRepo = app(HospitalResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hospital_response()
    {
        $hospital = factory(HospitalResponse::class)->make()->toArray();

        $created = $this->hospitalRepo->create($hospital);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created HospitalResponse must have id specified');
        $this->assertNotNull(HospitalResponse::find($created['id']), 'HospitalResponse with given id must be in DB');
        $this->assertModelData($hospital, $created);
    }

    /**
     * @test read
     */
    public function test_read_hospital_response()
    {
        $hospital = factory(HospitalResponse::class)->create();

        $database = $this->hospitalRepo->find($hospital->id);

        $database = $database ->toArray();
        $this->assertModelData($hospital->toArray(), $database);
    }

    /**
     * @test update
     */
    public function test_update_hospital_response()
    {
        $hospital = factory(HospitalResponse::class)->create();
        $fake = factory(HospitalResponse::class)->make()->toArray();

        $updated = $this->hospitalRepo->update($fake, $hospital->id);

        $this->assertModelData($fake, $updated->toArray());
        $database = $this->hospitalRepo->find($hospital->id);
        $this->assertModelData($fake, $database ->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hospital_response()
    {
        $hospital = factory(HospitalResponse::class)->create();

        $resp = $this->hospitalRepo->delete($hospital->id);

        $this->assertTrue($resp);
        $this->assertNull(HospitalResponse::find($hospital->id), 'HospitalResponse should not exist in DB');
    }
}
