<?php

namespace App\Repositories;

use App\Models\Phone;
use App\Repositories\BaseRepository;

/**
 * Class PhoneRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:43 am UTC
*/

class PhoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'phoneable_id',
        'phoneable_type'
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
        return Phone::class;
    }
}
