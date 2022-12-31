<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserList
 * @package App\Models
 * @version October 31, 2022, 12:16 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $image
 * @property string $user_type
 * @property string $password
 */
class UserList extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'email',
        'image',
        'user_type',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'image' => 'string',
        'user_type' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
