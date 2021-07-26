<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\CommentType;

class CommentTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_comment_type()
    {
        $commentType = CommentType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/comment_types', $commentType
        );

        $this->assertApiResponse($commentType);
    }

    /**
     * @test
     */
    public function test_read_comment_type()
    {
        $commentType = CommentType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/comment_types/'.$commentType->id
        );

        $this->assertApiResponse($commentType->toArray());
    }

    /**
     * @test
     */
    public function test_update_comment_type()
    {
        $commentType = CommentType::factory()->create();
        $editedCommentType = CommentType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/comment_types/'.$commentType->id,
            $editedCommentType
        );

        $this->assertApiResponse($editedCommentType);
    }

    /**
     * @test
     */
    public function test_delete_comment_type()
    {
        $commentType = CommentType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/comment_types/'.$commentType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/comment_types/'.$commentType->id
        );

        $this->response->assertStatus(404);
    }
}
