<?php

namespace App\Repositories;

use App\Models\Hospital;
use App\Repositories\BaseRepository;

/**
 * Class HospitalRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:43 am UTC
*/

class HospitalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'state_id',
        'lga_id',
        'name',
        'email',
        'longitude',
        'latitude',
        'trusted',
        'verified',
        'total_calls',
        'total_response',
        'total_success',
        'total_fails',
        'rating'
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
        return Hospital::class;
    }
}
