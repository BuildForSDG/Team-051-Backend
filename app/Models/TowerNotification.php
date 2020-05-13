<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TowerNotification
 * @package App\Models
 * @version May 13, 2020, 12:39 am UTC
 *
 * @property integer $towe_idr
 * @property integer $channel_id
 * @property integer $incidentable_id
 * @property string $incidentable_type
 */
class TowerNotification extends Model
{
    use SoftDeletes;

    public $table = 'tower_notifications';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'towe_idr',
        'channel_id',
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
        'towe_idr' => 'integer',
        'channel_id' => 'integer',
        'incidentable_id' => 'integer',
        'incidentable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'towe_idr' => 'required',
        'channel_id' => 'required',
        'incidentable_id' => 'required',
        'incidentable_type' => 'required'
    ];

    
}
