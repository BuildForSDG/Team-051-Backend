<?php

namespace App\Repositories;

use App\Models\Kidnapping;
use App\Repositories\BaseRepository;

/**
 * Class KidnappingRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:45 am UTC
*/

class KidnappingRepository extends BaseRepository
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
        return Kidnapping::class;
    }
}
