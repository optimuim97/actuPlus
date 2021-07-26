<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Critical;

class CriticalApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_critical()
    {
        $critical = Critical::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/criticals', $critical
        );

        $this->assertApiResponse($critical);
    }

    /**
     * @test
     */
    public function test_read_critical()
    {
        $critical = Critical::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/criticals/'.$critical->id
        );

        $this->assertApiResponse($critical->toArray());
    }

    /**
     * @test
     */
    public function test_update_critical()
    {
        $critical = Critical::factory()->create();
        $editedCritical = Critical::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/criticals/'.$critical->id,
            $editedCritical
        );

        $this->assertApiResponse($editedCritical);
    }

    /**
     * @test
     */
    public function test_delete_critical()
    {
        $critical = Critical::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/criticals/'.$critical->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/criticals/'.$critical->id
        );

        $this->response->assertStatus(404);
    }
}
