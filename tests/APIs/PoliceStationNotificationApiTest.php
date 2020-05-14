<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PoliceStationNotification;

class PoliceStationNotificationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/police-station-notifications', $policeStationNotification
        );

        $this->assertApiResponse($policeStationNotification);
    }

    /**
     * @test
     */
    public function test_read_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/police-station-notifications/'.$policeStationNotification->id
        );

        $this->assertApiResponse($policeStationNotification->toArray());
    }

    /**
     * @test
     */
    public function test_update_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();
        $editedPoliceStationNotification = factory(PoliceStationNotification::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/police-station-notifications/'.$policeStationNotification->id,
            $editedPoliceStationNotification
        );

        $this->assertApiResponse($editedPoliceStationNotification);
    }

    /**
     * @test
     */
    public function test_delete_police_station_notification()
    {
        $policeStationNotification = factory(PoliceStationNotification::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/police-station-notifications/'.$policeStationNotification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/police-station-notifications/'.$policeStationNotification->id
        );

        $this->response->assertStatus(404);
    }
}
