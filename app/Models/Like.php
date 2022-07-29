<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Like
 * @package App\Models
 * @version July 3, 2021, 8:28 pm UTC
 *
 * @property  $post_id
 * @property  $user_id
 */
class Like extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'likes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'post_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function post()
    {
        $this->belongsTo(Post::class);
    } 
    
}
