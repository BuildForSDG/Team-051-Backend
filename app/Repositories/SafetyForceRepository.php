<?php

namespace App\Repositories;

use App\Models\SafetyForce;
use App\Repositories\BaseRepository;

/**
 * Class SafetyForceRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:42 am UTC
*/

class SafetyForceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'state_id',
        'lga_id',
        'name',
        'email',
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
        return SafetyForce::class;
    }
}
