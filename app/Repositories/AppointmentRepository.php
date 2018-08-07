<?php

namespace App\Repositories;

use App\Models\Appointment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AppointmentRepository
 * @package App\Repositories
 * @version August 7, 2018, 9:27 am UTC
 *
 * @method Appointment findWithoutFail($id, $columns = ['*'])
 * @method Appointment find($id, $columns = ['*'])
 * @method Appointment first($columns = ['*'])
*/
class AppointmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'datetime',
        'des'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Appointment::class;
    }
}
