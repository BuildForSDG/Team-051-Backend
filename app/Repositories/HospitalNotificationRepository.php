<?php

namespace App\Repositories;

use App\Models\HospitalNotification;
use App\Repositories\BaseRepository;

/**
 * Class HospitalNotificationRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:39 am UTC
*/

class HospitalNotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hospital_id',
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
        return HospitalNotification::class;
    }
}
