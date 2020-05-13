<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Phone
 * @package App\Models
 * @version May 13, 2020, 12:43 am UTC
 *
 * @property integer $number
 * @property integer $phoneable_id
 * @property string $phoneable_type
 */
class Phone extends Model
{
    use SoftDeletes;

    public $table = 'phones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'number',
        'phoneable_id',
        'phoneable_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'integer',
        'phoneable_id' => 'integer',
        'phoneable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'phoneable_id' => 'required',
        'phoneable_type' => 'required'
    ];

    
}
