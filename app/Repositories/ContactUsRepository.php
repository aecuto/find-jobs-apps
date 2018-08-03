<?php

namespace App\Repositories;

use App\Models\ContactUs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactUsRepository
 * @package App\Repositories
 * @version August 3, 2018, 7:40 am UTC
 *
 * @method ContactUs findWithoutFail($id, $columns = ['*'])
 * @method ContactUs find($id, $columns = ['*'])
 * @method ContactUs first($columns = ['*'])
*/
class ContactUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contact_type',
        'contact_name',
        'email',
        'phone',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactUs::class;
    }
}
