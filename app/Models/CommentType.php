<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CommentType
 * @package App\Models
 * @version July 3, 2021, 8:27 pm UTC
 *
 * @property string $name
 * @property  $description
 * @property string $slug
 */
class CommentType extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'comment_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
