<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Critical
 * @package App\Models
 * @version July 3, 2021, 8:20 pm UTC
 *
 * @property integer $post_id
 * @property integer $user_id
 * @property string $content
 * @property string $title
 */
class Critical extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'criticals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'post_id',
        'user_id',
        'content',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'user_id' => 'integer',
        'content' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
