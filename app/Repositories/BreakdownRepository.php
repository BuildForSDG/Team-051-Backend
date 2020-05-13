<?php

namespace App\Repositories;

use App\Models\Breakdown;
use App\Repositories\BaseRepository;

/**
 * Class BreakdownRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:34 am UTC
*/

class BreakdownRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'status'
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
        return Breakdown::class;
    }
}
