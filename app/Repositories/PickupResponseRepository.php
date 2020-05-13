<?php

namespace App\Repositories;

use App\Models\PickupResponse;
use App\Repositories\BaseRepository;

/**
 * Class PickupResponseRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:47 am UTC
*/

class PickupResponseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'road_id',
        'trip_id',
        'user_id',
        'incident_id',
        'status',
        'description'
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
        return PickupResponse::class;
    }
}
