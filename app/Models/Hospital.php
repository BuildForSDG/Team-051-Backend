<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hospital
 * @package App\Models
 * @version May 13, 2020, 12:43 am UTC
 *
 * @property integer $state_id
 * @property integer $lga_id
 * @property string $name
 * @property string $email
 * @property number $longitude
 * @property number $latitude
 * @property boolean $trusted
 * @property boolean $verified
 * @property integer $total_calls
 * @property integer $total_response
 * @property integer $total_success
 * @property integer $total_fails
 * @property integer $rating
 */
class Hospital extends Model
{
    use SoftDeletes;

    public $table = 'hospitals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'state_id',
        'lga_id',
        'name',
        'email',
        'longitude',
        'latitude',
        'trusted',
        'verified',
        'total_calls',
        'total_response',
        'total_success',
        'total_fails',
        'rating'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'state_id' => 'integer',
        'lga_id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'longitude' => 'float',
        'latitude' => 'float',
        'trusted' => 'boolean',
        'verified' => 'boolean',
        'total_calls' => 'integer',
        'total_response' => 'integer',
        'total_success' => 'integer',
        'total_fails' => 'integer',
        'rating' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'state_id' => 'required',
        'lga_id' => 'required',
        'name' => 'required',
        'longitude' => 'required',
        'latitude' => 'required',
        'trusted' => 'required',
        'verified' => 'required',
        'total_calls' => 'required',
        'total_response' => 'required',
        'total_success' => 'required',
        'total_fails' => 'required',
        'rating' => 'required'
    ];

    
}
