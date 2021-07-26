<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Agent
 * @package App\Models
 * @version July 19, 2021, 7:03 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $photo
 */
class Agent extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'agents';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'photo'
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
        'phone' => 'string',
        'password' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
