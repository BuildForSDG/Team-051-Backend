<?php

namespace App\Repositories;

use App\Models\Pickup;
use App\Repositories\BaseRepository;

/**
 * Class PickupRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:43 am UTC
*/

class PickupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'state_id',
        'lga_id',
        'name',
        'email',
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
        return Pickup::class;
    }
}
