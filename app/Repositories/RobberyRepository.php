<?php

namespace App\Repositories;

use App\Models\Robbery;
use App\Repositories\BaseRepository;

/**
 * Class RobberyRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:45 am UTC
*/

class RobberyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
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
        return Robbery::class;
    }
}
