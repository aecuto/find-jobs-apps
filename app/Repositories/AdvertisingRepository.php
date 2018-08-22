<?php

namespace App\Repositories;

use App\Models\Advertising;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdvertisingRepository
 * @package App\Repositories
 * @version August 22, 2018, 7:24 am UTC
 *
 * @method Advertising findWithoutFail($id, $columns = ['*'])
 * @method Advertising find($id, $columns = ['*'])
 * @method Advertising first($columns = ['*'])
*/
class AdvertisingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'show_name',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Advertising::class;
    }
}
