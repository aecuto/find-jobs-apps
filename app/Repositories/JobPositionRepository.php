<?php

namespace App\Repositories;

use App\Models\JobPosition;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobPositionRepository
 * @package App\Repositories
 * @version July 23, 2018, 3:55 am UTC
 *
 * @method JobPosition findWithoutFail($id, $columns = ['*'])
 * @method JobPosition find($id, $columns = ['*'])
 * @method JobPosition first($columns = ['*'])
*/
class JobPositionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobname',
        'job',
        'certificate',
        'country',
        'salary',
        'experience',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobPosition::class;
    }
}
