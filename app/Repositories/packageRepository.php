<?php

namespace App\Repositories;

use App\Models\package;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class packageRepository
 * @package App\Repositories
 * @version August 1, 2018, 10:24 am UTC
 *
 * @method package findWithoutFail($id, $columns = ['*'])
 * @method package find($id, $columns = ['*'])
 * @method package first($columns = ['*'])
*/
class packageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return package::class;
    }
}
