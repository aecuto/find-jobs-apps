<?php

namespace App\Repositories;

use App\Models\government_jobs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class government_jobsRepository
 * @package App\Repositories
 * @version July 31, 2018, 6:46 am UTC
 *
 * @method government_jobs findWithoutFail($id, $columns = ['*'])
 * @method government_jobs find($id, $columns = ['*'])
 * @method government_jobs first($columns = ['*'])
*/
class government_jobsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return government_jobs::class;
    }
}
