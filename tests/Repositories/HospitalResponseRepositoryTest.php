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
    protected $hospitalResponseRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->hospitalResponseRepo = \App::make(HospitalResponseRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->make()->toArray();

        $createdHospitalResponse = $this->hospitalResponseRepo->create($hospitalResponse);

        $createdHospitalResponse = $createdHospitalResponse->toArray();
        $this->assertArrayHasKey('id', $createdHospitalResponse);
        $this->assertNotNull($createdHospitalResponse['id'], 'Created HospitalResponse must have id specified');
        $this->assertNotNull(HospitalResponse::find($createdHospitalResponse['id']), 'HospitalResponse with given id must be in DB');
        $this->assertModelData($hospitalResponse, $createdHospitalResponse);
    }

    /**
     * @test read
     */
    public function test_read_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();

        $dbHospitalResponse = $this->hospitalResponseRepo->find($hospitalResponse->id);

        $dbHospitalResponse = $dbHospitalResponse->toArray();
        $this->assertModelData($hospitalResponse->toArray(), $dbHospitalResponse);
    }

    /**
     * @test update
     */
    public function test_update_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();
        $fakeHospitalResponse = factory(HospitalResponse::class)->make()->toArray();

        $updatedHospitalResponse = $this->hospitalResponseRepo->update($fakeHospitalResponse, $hospitalResponse->id);

        $this->assertModelData($fakeHospitalResponse, $updatedHospitalResponse->toArray());
        $dbHospitalResponse = $this->hospitalResponseRepo->find($hospitalResponse->id);
        $this->assertModelData($fakeHospitalResponse, $dbHospitalResponse->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();

        $resp = $this->hospitalResponseRepo->delete($hospitalResponse->id);

        $this->assertTrue($resp);
        $this->assertNull(HospitalResponse::find($hospitalResponse->id), 'HospitalResponse should not exist in DB');
    }
}
