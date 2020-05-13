<?php

namespace App\Repositories;

use App\Models\PoliceStationNotification;
use App\Repositories\BaseRepository;

/**
 * Class PoliceStationNotificationRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:39 am UTC
*/

class PoliceStationNotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'police_station_id',
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
        return PoliceStationNotification::class;
    }
}
