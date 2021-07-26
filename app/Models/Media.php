<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Media
 * @package App\Models
 * @version July 3, 2021, 5:19 pm UTC
 *
 * @property integer $post_id
 * @property string $photo_url
 * @property string $post_title
 */
class Media extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'media';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'post_id',
        'photo_url',
        'post_title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'photo_url' => 'string',
        'post_title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
