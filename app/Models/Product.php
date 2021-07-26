<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version July 22, 2021, 9:15 am UTC
 *
 * @property string $name
 * @property  $sku
 * @property string $image_url
 * @property number $price
 * @property string $display_price
 * @property string $pourcentage
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'sku',
        'image_url',
        'price',
        'display_price',
        'pourcentage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image_url' => 'string',
        'price' => 'float',
        'display_price' => 'string',
        'pourcentage' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
