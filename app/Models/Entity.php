<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Entity
 * @package App\Models
 * @version July 3, 2021, 8:50 pm UTC
 *
 * @property string $name
 * @property  $description
 * @property string $logo
 * @property string $photo_url
 * @property string $photo_url
 * @property string $entity_type_idl
 */
class Entity extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'entities';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'logo',
        'email',
        'password',
        'photo_url',
        'entity_type_id'
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
        'password' => 'string',
        'logo' => 'string',
        'photo_url' => 'string',
        'entity_type_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function entity_type(){
        return $this->belongsTo(EntityType::class);
    }


}
