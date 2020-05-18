<?php namespace Tests\Repositories;

use App\Models\Kidnapping;
use App\Repositories\KidnappingRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class KidnappingRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var KidnappingRepository
     */
    protected $kidnappingRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->kidnappingRepo = \App::make(KidnappingRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->make()->toArray();

        $created = $this->kidnappingRepo->create($kidnapping);

        $created = $created->toArray();
        $this->assertArrayHasKey('id', $created);
        $this->assertNotNull($created['id'], 'Created Kidnapping must have id specified');
        $this->assertNotNull(Kidnapping::find($created['id']), 'Kidnapping with given id must be in DB');
        $this->assertModelData($kidnapping, $created);
    }

    /**
     * @test read
     */
    public function test_read_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();

        $db = $this->kidnappingRepo->find($kidnapping->id);

        $db = $db->toArray();
        $this->assertModelData($kidnapping->toArray(), $db);
    }

    /**
     * @test update
     */
    public function test_update_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();
        $fake = factory(Kidnapping::class)->make()->toArray();

        $updated = $this->kidnappingRepo->update($fake, $kidnapping->id);

        $this->assertModelData($fake, $updated->toArray());
        $db = $this->kidnappingRepo->find($kidnapping->id);
        $this->assertModelData($fake, $db->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();

        $resp = $this->kidnappingRepo->delete($kidnapping->id);

        $this->assertTrue($resp);
        $this->assertNull(Kidnapping::find($kidnapping->id), 'Kidnapping should not exist in DB');
    }
}
