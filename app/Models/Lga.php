<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lga
 * @package App\Models
 * @version May 13, 2020, 12:40 am UTC
 *
 * @property string $name
 * @property string $state_slug
 * @property string $status
 * @property string $description
 */
class Lga extends Model
{
    use SoftDeletes;

    public $table = 'lgas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'state_slug',
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
        'name' => 'string',
        'state_slug' => 'string',
        'status' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'state_slug' => 'required',
        'status' => 'required',
        'description' => 'required'
    ];

    
}
