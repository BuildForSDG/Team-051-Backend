<?php

namespace App\Repositories;

use App\Models\State;
use App\Repositories\BaseRepository;

/**
 * Class StateRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:40 am UTC
*/

class StateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'country_iso',
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
        return State::class;
    }
}
