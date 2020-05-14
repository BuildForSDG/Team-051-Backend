<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\HospitalResponse;

class HospitalResponseApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/hospital-responses', $hospitalResponse
        );

        $this->assertApiResponse($hospitalResponse);
    }

    /**
     * @test
     */
    public function test_read_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/hospital-responses/'.$hospitalResponse->id
        );

        $this->assertApiResponse($hospitalResponse->toArray());
    }

    /**
     * @test
     */
    public function test_update_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();
        $editedHospitalResponse = factory(HospitalResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/hospital-responses/'.$hospitalResponse->id,
            $editedHospitalResponse
        );

        $this->assertApiResponse($editedHospitalResponse);
    }

    /**
     * @test
     */
    public function test_delete_hospital_response()
    {
        $hospitalResponse = factory(HospitalResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/hospital-responses/'.$hospitalResponse->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/hospital-responses/'.$hospitalResponse->id
        );

        $this->response->assertStatus(404);
    }
}
