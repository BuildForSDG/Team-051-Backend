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

        $createdKidnapping = $this->kidnappingRepo->create($kidnapping);

        $createdKidnapping = $createdKidnapping->toArray();
        $this->assertArrayHasKey('id', $createdKidnapping);
        $this->assertNotNull($createdKidnapping['id'], 'Created Kidnapping must have id specified');
        $this->assertNotNull(Kidnapping::find($createdKidnapping['id']), 'Kidnapping with given id must be in DB');
        $this->assertModelData($kidnapping, $createdKidnapping);
    }

    /**
     * @test read
     */
    public function test_read_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();

        $dbKidnapping = $this->kidnappingRepo->find($kidnapping->id);

        $dbKidnapping = $dbKidnapping->toArray();
        $this->assertModelData($kidnapping->toArray(), $dbKidnapping);
    }

    /**
     * @test update
     */
    public function test_update_kidnapping()
    {
        $kidnapping = factory(Kidnapping::class)->create();
        $fakeKidnapping = factory(Kidnapping::class)->make()->toArray();

        $updatedKidnapping = $this->kidnappingRepo->update($fakeKidnapping, $kidnapping->id);

        $this->assertModelData($fakeKidnapping, $updatedKidnapping->toArray());
        $dbKidnapping = $this->kidnappingRepo->find($kidnapping->id);
        $this->assertModelData($fakeKidnapping, $dbKidnapping->toArray());
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
