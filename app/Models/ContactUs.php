<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactUs
 * @package App\Models
 * @version August 3, 2018, 7:40 am UTC
 *
 * @property string contact_type
 * @property string contact_name
 * @property string email
 * @property string phone
 * @property string details
 */
class ContactUs extends Model
{
    use SoftDeletes;

    public $table = 'contactuses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'contact_type',
        'contact_name',
        'email',
        'phone',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'contact_type' => 'string',
        'contact_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contact_type' => 'required',
        'contact_name' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ];

    
}
