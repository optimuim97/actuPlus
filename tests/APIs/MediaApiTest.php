<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Media;

class MediaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_media()
    {
        $media = Media::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/media', $media
        );

        $this->assertApiResponse($media);
    }

    /**
     * @test
     */
    public function test_read_media()
    {
        $media = Media::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/media/'.$media->id
        );

        $this->assertApiResponse($media->toArray());
    }

    /**
     * @test
     */
    public function test_update_media()
    {
        $media = Media::factory()->create();
        $editedMedia = Media::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/media/'.$media->id,
            $editedMedia
        );

        $this->assertApiResponse($editedMedia);
    }

    /**
     * @test
     */
    public function test_delete_media()
    {
        $media = Media::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/media/'.$media->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/media/'.$media->id
        );

        $this->response->assertStatus(404);
    }
}
