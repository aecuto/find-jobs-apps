<?php

namespace App\Repositories;

use App\Models\company;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class companyRepository
 * @package App\Repositories
 * @version July 23, 2018, 9:26 am UTC
 *
 * @method company findWithoutFail($id, $columns = ['*'])
 * @method company find($id, $columns = ['*'])
 * @method company first($columns = ['*'])
*/
class companyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companyname',
        'companytype',
        'details',
        'start_year',
        'worker_count',
        'address',
        'country',
        'phone',
        'fax',
        'email',
        'website',
        'fullname_contact',
        'position_context'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return company::class;
    }
}
