<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trip
 * @package App\Models
 * @version May 13, 2020, 12:44 am UTC
 *
 * @property integer $road_id
 * @property integer $incident_id
 * @property string|\Carbon\Carbon $start_time
 * @property string|\Carbon\Carbon $end_time
 * @property string $status
 */
class Trip extends Model
{
    use SoftDeletes;

    public $table = 'trips';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'road_id',
        'incident_id',
        'start_time',
        'end_time',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'road_id' => 'integer',
        'incident_id' => 'integer',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'road_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required'
    ];

    
}
