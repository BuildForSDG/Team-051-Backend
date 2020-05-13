<?php

namespace App\Repositories;

use App\Models\Response;
use App\Repositories\BaseRepository;

/**
 * Class ResponseRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:46 am UTC
*/

class ResponseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Response::class;
    }
}
