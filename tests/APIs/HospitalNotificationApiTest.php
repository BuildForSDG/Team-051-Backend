<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\HospitalNotification;

class HospitalNotificationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/hospital-notifications', $hospitalNotification
        );

        $this->assertApiResponse($hospitalNotification);
    }

    /**
     * @test
     */
    public function test_read_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/hospital-notifications/'.$hospitalNotification->id
        );

        $this->assertApiResponse($hospitalNotification->toArray());
    }

    /**
     * @test
     */
    public function test_update_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();
        $editedHospitalNotification = factory(HospitalNotification::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/hospital-notifications/'.$hospitalNotification->id,
            $editedHospitalNotification
        );

        $this->assertApiResponse($editedHospitalNotification);
    }

    /**
     * @test
     */
    public function test_delete_hospital_notification()
    {
        $hospitalNotification = factory(HospitalNotification::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/hospital-notifications/'.$hospitalNotification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/hospital-notifications/'.$hospitalNotification->id
        );

        $this->response->assertStatus(404);
    }
}
