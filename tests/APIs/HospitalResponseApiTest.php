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
        $response = factory(HospitalResponse::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/hospital-responses', $response
        );

        $this->assertApiResponse($response);
    }

    /**
     * @test
     */
    public function test_read_hospital_response()
    {
        $response = factory(HospitalResponse::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/hospital-responses/'.$response->id
        );

        $this->assertApiResponse($response->toArray());
    }

    /**
     * @test
     */
    public function test_update_hospital_response()
    {
        $response = factory(HospitalResponse::class)->create();
        $edited = factory(HospitalResponse::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/hospital-responses/'.$response->id,
            $edited
        );

        $this->assertApiResponse($edited);
    }

    /**
     * @test
     */
    public function test_delete_hospital_response()
    {
        $response = factory(HospitalResponse::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/hospital-responses/'.$response->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/hospital-responses/'.$response->id
        );

        $this->response->assertStatus(404);
    }
}
