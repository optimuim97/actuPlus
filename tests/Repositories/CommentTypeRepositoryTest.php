<?php namespace Tests\Repositories;

use App\Models\CommentType;
use App\Repositories\CommentTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CommentTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CommentTypeRepository
     */
    protected $commentTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->commentTypeRepo = \App::make(CommentTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_comment_type()
    {
        $commentType = CommentType::factory()->make()->toArray();

        $createdCommentType = $this->commentTypeRepo->create($commentType);

        $createdCommentType = $createdCommentType->toArray();
        $this->assertArrayHasKey('id', $createdCommentType);
        $this->assertNotNull($createdCommentType['id'], 'Created CommentType must have id specified');
        $this->assertNotNull(CommentType::find($createdCommentType['id']), 'CommentType with given id must be in DB');
        $this->assertModelData($commentType, $createdCommentType);
    }

    /**
     * @test read
     */
    public function test_read_comment_type()
    {
        $commentType = CommentType::factory()->create();

        $dbCommentType = $this->commentTypeRepo->find($commentType->id);

        $dbCommentType = $dbCommentType->toArray();
        $this->assertModelData($commentType->toArray(), $dbCommentType);
    }

    /**
     * @test update
     */
    public function test_update_comment_type()
    {
        $commentType = CommentType::factory()->create();
        $fakeCommentType = CommentType::factory()->make()->toArray();

        $updatedCommentType = $this->commentTypeRepo->update($fakeCommentType, $commentType->id);

        $this->assertModelData($fakeCommentType, $updatedCommentType->toArray());
        $dbCommentType = $this->commentTypeRepo->find($commentType->id);
        $this->assertModelData($fakeCommentType, $dbCommentType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_comment_type()
    {
        $commentType = CommentType::factory()->create();

        $resp = $this->commentTypeRepo->delete($commentType->id);

        $this->assertTrue($resp);
        $this->assertNull(CommentType::find($commentType->id), 'CommentType should not exist in DB');
    }
}
