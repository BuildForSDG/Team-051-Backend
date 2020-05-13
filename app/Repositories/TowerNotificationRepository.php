<?php

namespace App\Repositories;

use App\Models\TowerNotification;
use App\Repositories\BaseRepository;

/**
 * Class TowerNotificationRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:39 am UTC
*/

class TowerNotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'towe_idr',
        'channel_id',
        'incidentable_id',
        'incidentable_type'
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
        return TowerNotification::class;
    }
}
