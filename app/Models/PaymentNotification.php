<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaymentNotification
 * @package App\Models
 * @version August 3, 2018, 7:37 am UTC
 *
 * @property string service_type
 * @property string companyname
 * @property string email
 * @property string phone
 * @property string bankname
 * @property float money
 * @property date date
 * @property string details
 */
class PaymentNotification extends Model
{
    use SoftDeletes;

    public $table = 'payment_notifications';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'service_type',
        'companyname',
        'email',
        'phone',
        'bankname',
        'money',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'service_type' => 'string',
        'companyname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'bankname' => 'string',
        'money' => 'float',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'service_type' => 'required',
        'companyname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'bankname' => 'required',
        'money' => 'required'
    ];

    
}
