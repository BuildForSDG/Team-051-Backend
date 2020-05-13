<?php

namespace App\Repositories;

use App\Models\Tower;
use App\Repositories\BaseRepository;

/**
 * Class TowerRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:43 am UTC
*/

class TowerRepository extends BaseRepository
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
        return Tower::class;
    }
}
