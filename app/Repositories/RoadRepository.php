<?php

namespace App\Repositories;

use App\Models\Road;
use App\Repositories\BaseRepository;

/**
 * Class RoadRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:44 am UTC
*/

class RoadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'total_accidents',
        'total_robberies',
        'total_death',
        'total_kidnapping',
        'risk_rating'
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
        return Road::class;
    }
}
