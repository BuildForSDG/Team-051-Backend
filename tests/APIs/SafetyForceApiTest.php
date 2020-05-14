<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\SafetyForce;

class SafetyForceApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/safety_forces', $safetyForce
        );

        $this->assertApiResponse($safetyForce);
    }

    /**
     * @test
     */
    public function test_read_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/safety_forces/'.$safetyForce->id
        );

        $this->assertApiResponse($safetyForce->toArray());
    }

    /**
     * @test
     */
    public function test_update_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();
        $editedSafetyForce = factory(SafetyForce::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/safety_forces/'.$safetyForce->id,
            $editedSafetyForce
        );

        $this->assertApiResponse($editedSafetyForce);
    }

    /**
     * @test
     */
    public function test_delete_safety_force()
    {
        $safetyForce = factory(SafetyForce::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/safety_forces/'.$safetyForce->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/safety_forces/'.$safetyForce->id
        );

        $this->response->assertStatus(404);
    }
}
