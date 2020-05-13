<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserSetting
 * @package App\Models
 * @version May 13, 2020, 12:38 am UTC
 *
 * @property integer $user_id
 * @property boolean $track_venhicle
 */
class UserSetting extends Model
{
    use SoftDeletes;

    public $table = 'user_settings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'track_venhicle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'track_venhicle' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'track_venhicle' => 'required'
    ];

    
}
