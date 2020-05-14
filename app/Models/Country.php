<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Country
 * @package App\Models
 * @version May 13, 2020, 12:37 am UTC
 *
 * @property string $iso
 * @property string $iso3
 * @property string $name
 * @property string $status
 * @property string $description
 * @property string $fips
 * @property string $continent
 * @property string $currency_code
 * @property string $currency_name
 * @property string $phone_prefix
 * @property string $postal_code
 * @property string $languages
 * @property string $geonameid
 */
class Country extends Model
{
    use SoftDeletes;

    public $table = 'countries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'iso',
        'iso3',
        'name',
        'status',
        'description',
        'fips',
        'continent',
        'currency_code',
        'currency_name',
        'languages',
        'phone_prefix',
        'postal_code',
        'geonameid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'iso' => 'string',
        'iso3' => 'string',
        'name' => 'string',
        'status' => 'string',
        'description' => 'string',
        'fips' => 'string',
        'continent' => 'string',
        'currency_code' => 'string',
        'currency_name' => 'string',
        'phone_prefix' => 'string',
        'postal_code' => 'string',
        'languages' => 'string',
        'geonameid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'iso' => 'required',
        'iso3' => 'required',
        'name' => 'required',
        'status' => 'required',
        'description' => 'required',
        'fips' => 'required',
        'continent' => 'required',
        'currency_code' => 'required',
        'currency_name' => 'required',
        'phone_prefix' => 'required',
        'postal_code' => 'required',
        'languages' => 'required',
        'geonameid' => 'required'
    ];

    /**
     *
     * @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_iso', 'iso');
    }
}
