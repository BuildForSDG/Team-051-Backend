<?php

namespace App\Repositories;

use App\Models\Incident;
use App\Repositories\BaseRepository;

/**
 * Class IncidentRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:44 am UTC
*/

class IncidentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Incident::class;
    }
}
