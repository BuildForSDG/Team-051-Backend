<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Road
 * @package App\Models
 * @version May 13, 2020, 12:44 am UTC
 *
 * @property string $code
 * @property string $name
 * @property integer $total_accidents
 * @property integer $total_robberies
 * @property integer $total_death
 * @property integer $total_kidnapping
 * @property integer $risk_rating
 */
class Road extends Model
{
    use SoftDeletes;

    public $table = 'roads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'code',
        'name',
        'total_accidents',
        'total_robberies',
        'total_death',
        'total_kidnapping',
        'risk_rating'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
        'total_accidents' => 'integer',
        'total_robberies' => 'integer',
        'total_death' => 'integer',
        'total_kidnapping' => 'integer',
        'risk_rating' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'total_accidents' => 'required',
        'total_robberies' => 'required',
        'total_death' => 'required',
        'total_kidnapping' => 'required',
        'risk_rating' => 'required'
    ];

    
}
