<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PoliceStation;

class PoliceStationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_police_station()
    {
        $policeStation = factory(PoliceStation::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/police_stations', $policeStation
        );

        $this->assertApiResponse($policeStation);
    }

    /**
     * @test
     */
    public function test_read_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/police_stations/'.$policeStation->id
        );

        $this->assertApiResponse($policeStation->toArray());
    }

    /**
     * @test
     */
    public function test_update_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();
        $editedPoliceStation = factory(PoliceStation::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/police_stations/'.$policeStation->id,
            $editedPoliceStation
        );

        $this->assertApiResponse($editedPoliceStation);
    }

    /**
     * @test
     */
    public function test_delete_police_station()
    {
        $policeStation = factory(PoliceStation::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/police_stations/'.$policeStation->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/police_stations/'.$policeStation->id
        );

        $this->response->assertStatus(404);
    }
}
