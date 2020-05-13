<?php

namespace App\Repositories;

use App\Models\UserSetting;
use App\Repositories\BaseRepository;

/**
 * Class UserSettingRepository
 * @package App\Repositories
 * @version May 13, 2020, 12:38 am UTC
*/

class UserSettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'track_venhicle'
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
        return UserSetting::class;
    }
}
