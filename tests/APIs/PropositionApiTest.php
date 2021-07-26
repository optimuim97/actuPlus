<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Proposition;

class PropositionApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_proposition()
    {
        $proposition = Proposition::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/propositions', $proposition
        );

        $this->assertApiResponse($proposition);
    }

    /**
     * @test
     */
    public function test_read_proposition()
    {
        $proposition = Proposition::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/propositions/'.$proposition->id
        );

        $this->assertApiResponse($proposition->toArray());
    }

    /**
     * @test
     */
    public function test_update_proposition()
    {
        $proposition = Proposition::factory()->create();
        $editedProposition = Proposition::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/propositions/'.$proposition->id,
            $editedProposition
        );

        $this->assertApiResponse($editedProposition);
    }

    /**
     * @test
     */
    public function test_delete_proposition()
    {
        $proposition = Proposition::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/propositions/'.$proposition->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/propositions/'.$proposition->id
        );

        $this->response->assertStatus(404);
    }
}
