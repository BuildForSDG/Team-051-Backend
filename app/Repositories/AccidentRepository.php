<?php

namespace App\Repositories;

use App\Models\Accident;
use App\Repositories\BaseRepository;

/**
 * Class AccidentRepository
 * @package App\Repositories
 * @version May 12, 2020, 10:41 pm UTC
*/

class AccidentRepository extends BaseRepository
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
        return Accident::class;
    }
}
