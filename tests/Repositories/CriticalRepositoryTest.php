<?php namespace Tests\Repositories;

use App\Models\Critical;
use App\Repositories\CriticalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CriticalRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CriticalRepository
     */
    protected $criticalRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->criticalRepo = \App::make(CriticalRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_critical()
    {
        $critical = Critical::factory()->make()->toArray();

        $createdCritical = $this->criticalRepo->create($critical);

        $createdCritical = $createdCritical->toArray();
        $this->assertArrayHasKey('id', $createdCritical);
        $this->assertNotNull($createdCritical['id'], 'Created Critical must have id specified');
        $this->assertNotNull(Critical::find($createdCritical['id']), 'Critical with given id must be in DB');
        $this->assertModelData($critical, $createdCritical);
    }

    /**
     * @test read
     */
    public function test_read_critical()
    {
        $critical = Critical::factory()->create();

        $dbCritical = $this->criticalRepo->find($critical->id);

        $dbCritical = $dbCritical->toArray();
        $this->assertModelData($critical->toArray(), $dbCritical);
    }

    /**
     * @test update
     */
    public function test_update_critical()
    {
        $critical = Critical::factory()->create();
        $fakeCritical = Critical::factory()->make()->toArray();

        $updatedCritical = $this->criticalRepo->update($fakeCritical, $critical->id);

        $this->assertModelData($fakeCritical, $updatedCritical->toArray());
        $dbCritical = $this->criticalRepo->find($critical->id);
        $this->assertModelData($fakeCritical, $dbCritical->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_critical()
    {
        $critical = Critical::factory()->create();

        $resp = $this->criticalRepo->delete($critical->id);

        $this->assertTrue($resp);
        $this->assertNull(Critical::find($critical->id), 'Critical should not exist in DB');
    }
}
