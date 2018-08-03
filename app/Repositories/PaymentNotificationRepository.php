<?php

namespace App\Repositories;

use App\Models\PaymentNotification;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaymentNotificationRepository
 * @package App\Repositories
 * @version August 3, 2018, 7:37 am UTC
 *
 * @method PaymentNotification findWithoutFail($id, $columns = ['*'])
 * @method PaymentNotification find($id, $columns = ['*'])
 * @method PaymentNotification first($columns = ['*'])
*/
class PaymentNotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'service_type',
        'companyname',
        'email',
        'phone',
        'bankname',
        'money',
        'date',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentNotification::class;
    }
}
