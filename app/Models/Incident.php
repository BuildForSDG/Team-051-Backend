<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Incident
 * @package App\Models
 * @version May 13, 2020, 12:44 am UTC
 *
 * @property integer $road_id
 * @property integer $trip_id
 * @property string|\Carbon\Carbon $datetime
 * @property number $longitude
 * @property number $latitude
 * @property integer $fatalities
 * @property integer $casualties
 * @property string $status
 * @property integer $incidentable_id
 * @property string $incidentable_type
 */
class Incident extends Model
{
    use SoftDeletes;

    public $table = 'incidents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'road_id',
        'trip_id',
        'datetime',
        'longitude',
        'latitude',
        'fatalities',
        'casualties',
        'status',
        'incidentable_id',
        'incidentable_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'road_id' => 'integer',
        'trip_id' => 'integer',
        'datetime' => 'datetime',
        'longitude' => 'float',
        'latitude' => 'float',
        'fatalities' => 'integer',
        'casualties' => 'integer',
        'status' => 'string',
        'incidentable_id' => 'integer',
        'incidentable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'road_id' => 'required',
        'trip_id' => 'required',
        'datetime' => 'required',
        'longitude' => 'required',
        'latitude' => 'required',
        'fatalities' => 'required',
        'casualties' => 'required',
        'status' => 'required',
        'incidentable_id' => 'required',
        'incidentable_type' => 'required'
    ];

    
}
