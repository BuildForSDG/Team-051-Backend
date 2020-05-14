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
     * @test
     */
    public function test_create_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tower-notifications', $towerNotification
        );

        $this->assertApiResponse($towerNotification);
    }

    /**
     * @test
     */
    public function test_read_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tower-notifications/'.$towerNotification->id
        );

        $this->assertApiResponse($towerNotification->toArray());
    }

    /**
     * @test
     */
    public function test_update_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();
        $editedTowerNotification = factory(TowerNotification::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tower-notifications/'.$towerNotification->id,
            $editedTowerNotification
        );

        $this->assertApiResponse($editedTowerNotification);
    }

    /**
     * @test
     */
    public function test_delete_tower_notification()
    {
        $towerNotification = factory(TowerNotification::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tower-notifications/'.$towerNotification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tower-notifications/'.$towerNotification->id
        );

        $this->response->assertStatus(404);
    }
}
