<?php

namespace App\Repositories;

use App\Models\Panic;
use App\Repositories\BaseRepository;

/**
 * Class PanicRepository
 * @package App\Repositories
 * @version May 13, 2020, 1:36 am UTC
*/

class PanicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
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
        return Panic::class;
    }
}
