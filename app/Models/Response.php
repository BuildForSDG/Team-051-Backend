<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Response
 * @package App\Models
 * @version May 13, 2020, 12:46 am UTC
 *
 * @property integer $road_id
 * @property integer $trip_id
 * @property integer $incident_id
 * @property string|\Carbon\Carbon $start_time
 * @property string|\Carbon\Carbon $onsite_time
 * @property string|\Carbon\Carbon $end_time
 * @property string $status
 * @property integer $incidentable_id
 * @property string $incidentable_type
 */
class Response extends Model
{
    use SoftDeletes;

    public $table = 'responses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'road_id',
        'trip_id',
        'incident_id',
        'start_time',
        'onsite_time',
        'end_time',
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
        'incident_id' => 'integer',
        'start_time' => 'datetime',
        'onsite_time' => 'datetime',
        'end_time' => 'datetime',
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
        'incident_id' => 'required',
        'start_time' => 'required',
        'onsite_time' => 'required',
        'end_time' => 'required',
        'status' => 'required',
        'incidentable_id' => 'required',
        'incidentable_type' => 'required'
    ];

    
}
