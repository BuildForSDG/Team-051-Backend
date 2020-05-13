<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Accident
 * @package App\Models
 * @version May 12, 2020, 10:41 pm UTC
 *
 * @property string $type
 * @property string $status
 * @property string $description
 */
class Accident extends Model
{
    use SoftDeletes;

    public $table = 'accidents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'status',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'status' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required',
        'status' => 'required',
        'description' => 'required'
    ];

    
}
