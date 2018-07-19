<?php

namespace App\Repositories;

use App\Models\MemberProfile;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MemberProfileRepository
 * @package App\Repositories
 * @version July 19, 2018, 7:48 am UTC
 *
 * @method MemberProfile findWithoutFail($id, $columns = ['*'])
 * @method MemberProfile find($id, $columns = ['*'])
 * @method MemberProfile first($columns = ['*'])
*/
class MemberProfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fullname',
        'gender',
        'status',
        'nationality',
        'religion',
        'birthdate',
        'height',
        'weight',
        'military_status',
        'address',
        'phone',
        'interested_job',
        'type_interested_job',
        'money_need',
        'work_time'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MemberProfile::class;
    }
}
