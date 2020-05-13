<?php

namespace App\Repositories;

use App\Models\Lga;
use App\Repositories\BaseRepository;

/**
 * Class LgaRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:40 am UTC
*/

class LgaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'state_slug',
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
        return Lga::class;
    }
}
