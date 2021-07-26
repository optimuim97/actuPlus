<?php namespace Tests\Repositories;

use App\Models\Proposition;
use App\Repositories\PropositionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PropositionRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PropositionRepository
     */
    protected $propositionRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->propositionRepo = \App::make(PropositionRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_proposition()
    {
        $proposition = Proposition::factory()->make()->toArray();

        $createdProposition = $this->propositionRepo->create($proposition);

        $createdProposition = $createdProposition->toArray();
        $this->assertArrayHasKey('id', $createdProposition);
        $this->assertNotNull($createdProposition['id'], 'Created Proposition must have id specified');
        $this->assertNotNull(Proposition::find($createdProposition['id']), 'Proposition with given id must be in DB');
        $this->assertModelData($proposition, $createdProposition);
    }

    /**
     * @test read
     */
    public function test_read_proposition()
    {
        $proposition = Proposition::factory()->create();

        $dbProposition = $this->propositionRepo->find($proposition->id);

        $dbProposition = $dbProposition->toArray();
        $this->assertModelData($proposition->toArray(), $dbProposition);
    }

    /**
     * @test update
     */
    public function test_update_proposition()
    {
        $proposition = Proposition::factory()->create();
        $fakeProposition = Proposition::factory()->make()->toArray();

        $updatedProposition = $this->propositionRepo->update($fakeProposition, $proposition->id);

        $this->assertModelData($fakeProposition, $updatedProposition->toArray());
        $dbProposition = $this->propositionRepo->find($proposition->id);
        $this->assertModelData($fakeProposition, $dbProposition->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_proposition()
    {
        $proposition = Proposition::factory()->create();

        $resp = $this->propositionRepo->delete($proposition->id);

        $this->assertTrue($resp);
        $this->assertNull(Proposition::find($proposition->id), 'Proposition should not exist in DB');
    }
}
