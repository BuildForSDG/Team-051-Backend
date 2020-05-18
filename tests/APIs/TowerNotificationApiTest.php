<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\TowerNotification;

class TowerNotificationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @group api_test_create_tower_notification
     */
    public function test_create_tower_notification()
    {
        $notification = factory(TowerNotification::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tower-notifications', $notification
        );

        $this->assertApiResponse($notification);
    }

    /**
     * @test
     */
    public function test_read_tower_notification()
    {
        $notification = factory(TowerNotification::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tower-notifications/'.$notification->id
        );

        $this->assertApiResponse($notification->toArray());
    }

    /**
     * @test
     */
    public function test_update_tower_notification()
    {
        $notification = factory(TowerNotification::class)->create();
        $editedTowerNotification = factory(TowerNotification::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tower-notifications/'.$notification->id,
            $editedTowerNotification
        );

        $this->assertApiResponse($editedTowerNotification);
    }

    /**
     * @test
     */
    public function test_delete_tower_notification()
    {
        $notification = factory(TowerNotification::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tower-notifications/'.$notification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tower-notifications/'.$notification->id
        );

        $this->response->assertStatus(404);
    }
}
