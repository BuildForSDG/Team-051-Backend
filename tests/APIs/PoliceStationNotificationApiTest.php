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
        $notification = factory(PoliceStationNotification::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/police-station-notifications', $notification
        );

        $this->assertApiResponse($notification);
    }

    /**
     * @test
     */
    public function test_read_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/police-station-notifications/'.$notification->id
        );

        $this->assertApiResponse($notification->toArray());
    }

    /**
     * @test
     */
    public function test_update_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();
        $edited = factory(PoliceStationNotification::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/police-station-notifications/'.$notification->id,
            $edited
        );

        $this->assertApiResponse($edited);
    }

    /**
     * @test
     */
    public function test_delete_police_station_notification()
    {
        $notification = factory(PoliceStationNotification::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/police-station-notifications/'.$notification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/police-station-notifications/'.$notification->id
        );

        $this->response->assertStatus(404);
    }
}
