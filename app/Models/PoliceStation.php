<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PoliceStation
 * @package App\Models
 * @version May 13, 2020, 12:41 am UTC
 *
 * @property integer $state_id
 * @property integer $lga_id
 * @property string $name
 * @property string $email
 * @property number $longitude
 * @property number $latitude
 * @property integer $total_calls
 * @property integer $total_response
 * @property integer $total_success
 * @property integer $total_fails
 * @property integer $rating
 */
class PoliceStation extends Model
{
    use SoftDeletes;

    public $table = 'police_stations';
    
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
        'total_calls' => 'required',
        'total_response' => 'required',
        'total_success' => 'required',
        'total_fails' => 'required',
        'rating' => 'required'
    ];

    
}
