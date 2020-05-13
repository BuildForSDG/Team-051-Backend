<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Robbery
 * @package App\Models
 * @version May 13, 2020, 12:45 am UTC
 *
 * @property string $type
 * @property string $status
 * @property string $description
 */
class Robbery extends Model
{
    use SoftDeletes;

    public $table = 'robberies';
    
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
