<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Proposition
 * @package App\Models
 * @version July 3, 2021, 8:25 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property  $images
 * @property  $video_url
 * @property  $image_urls
 */
class Proposition extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'propositions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'images',
        'video_url',
        'image_urls'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
