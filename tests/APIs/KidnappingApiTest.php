<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Kidnapping;

class KidnappingApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/kidnappings', $kidnapping
        );

        $this->assertApiResponse($kidnapping);
    }

    /**
     * @test
     */
    public function test_read_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/kidnappings/'.$kidnapping->id
        );

        $this->assertApiResponse($kidnapping->toArray());
    }

    /**
     * @test
     */
    public function test_update_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();
        $editedKidnapping = factory(Kidnapping::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/kidnappings/'.$kidnapping->id,
            $editedKidnapping
        );

        $this->assertApiResponse($editedKidnapping);
    }

    /**
     * @test
     */
    public function test_delete_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/kidnappings/'.$kidnapping->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/kidnappings/'.$kidnapping->id
        );

        $this->response->assertStatus(404);
    }
}
