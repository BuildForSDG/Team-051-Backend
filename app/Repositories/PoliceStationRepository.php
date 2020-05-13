<?php

namespace App\Repositories;

use App\Models\PoliceStation;
use App\Repositories\BaseRepository;

/**
 * Class PoliceStationRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:41 am UTC
*/

class PoliceStationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PoliceStation::class;
    }
}
