<?php

namespace App\Models;

use App\Http\Resources\LikeResource;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version July 3, 2021, 5:12 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $publisher_name
 * @property integer $publisher_id
 * @property boolean $is_publish
 * @property  $is_visible_by_user
 * @property  $is_visible_by_agent
 * @property boolean $expiration_date
 * @property string $medias
 * @property string $cover
 * @property boolean $is_draft
 * @property integer $entity_id
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';


    protected $dates = ['deleted_at'];

    protected $appends = 
    [
        'likes_count', 'comments_count', 'comments', 'likes', 'user_image'
    ];

    public $fillable = [
        'title',
        'description',
        'publisher_name',
        'publisher_id',
        'is_publish',
        'is_visible_by_user',
        'is_visible_by_agent',
        'expiration_date',
        'medias',
        'cover',
        'is_draft',
        'entity_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'publisher_name' => 'string',
        'publisher_id' => 'integer',
        'entity_id' => 'integer',
        'is_publish' => 'boolean',
        'expiration_date' => 'date',
        'medias' => 'string',
        'cover' => 'string',
        'is_draft' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function getCommentsCountAttribute(){
        return $this->comments->count();
    }

    public function getLikesCountAttribute(){
        return $this->likes->count();
    }

    public function getCommentsAttribute(){
        return $this->comments();
    }

    public function getLikesAttribute(){

        $likes = Like::where("post_id", $this->id)->get();

        return  LikeResource::collection($likes);
    }

    public function getUserImageAttribute(){
        $user = User::where('id', $this->user_id)->first();

        if(empty($user)){
            return null;
        }

        return $user->image;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    } 

    public function comments()
    {
        return $this->hasMany(Comment::class);
    } 



}
