<?php

namespace App\Repositories;

use App\Models\UserNotification;
use App\Repositories\BaseRepository;

/**
 * Class UserNotificationRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:38 am UTC
*/

class UserNotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'channel_id',
        'incidentable_id',
        ' incidentable_type'
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
        return UserNotification::class;
    }
}
