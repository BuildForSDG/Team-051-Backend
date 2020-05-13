<?php

namespace App\Repositories;

use App\Models\Trip;
use App\Repositories\BaseRepository;

/**
 * Class TripRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:44 am UTC
*/

class TripRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'road_id',
        'incident_id',
        'start_time',
        'end_time',
        'status'
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
        return Trip::class;
    }
}
