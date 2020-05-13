<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoadSafetyResponse
 * @package App\Models
 * @version May 13, 2020, 12:47 am UTC
 *
 * @property integer $road_id
 * @property integer $trip_id
 * @property integer $user_id
 * @property integer $incident_id
 * @property string $status
 * @property string $description
 */
class RoadSafetyResponse extends Model
{
    use SoftDeletes;

    public $table = 'road_safety_responses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'road_id',
        'trip_id',
        'user_id',
        'incident_id',
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
        'road_id' => 'integer',
        'trip_id' => 'integer',
        'user_id' => 'integer',
        'incident_id' => 'integer',
        'status' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'road_id' => 'required',
        'trip_id' => 'required',
        'user_id' => 'required',
        'incident_id' => 'required',
        'status' => 'required',
        'description' => 'required'
    ];

    
}
