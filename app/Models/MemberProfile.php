<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MemberProfile
 * @package App\Models
 * @version July 19, 2018, 7:48 am UTC
 *
 * @property string fullname
 * @property string gender
 * @property string status
 * @property string nationality
 * @property string religion
 * @property date birthdate
 * @property integer height
 * @property integer weight
 * @property string military_status
 * @property string address
 * @property string phone
 * @property string interested_job
 * @property string type_interested_job
 * @property string money_need
 * @property string work_time
 */
class MemberProfile extends Model
{
    use SoftDeletes;

    public $table = 'member_profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullname',
        'gender',
        'status',
        'nationality',
        'religion',
        'birthdate',
        'height',
        'weight',
        'military_status',
        'address',
        'phone',
        'interested_job',
        'type_interested_job',
        'money_need',
        'work_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'gender' => 'string',
        'status' => 'string',
        'nationality' => 'string',
        'religion' => 'string',
        'birthdate' => 'date',
        'height' => 'integer',
        'weight' => 'integer',
        'military_status' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'interested_job' => 'string',
        'type_interested_job' => 'string',
        'money_need' => 'string',
        'work_time' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'gender' => 'required',
        'status' => 'required',
        'nationality' => 'required',
        'religion' => 'required',
        'birthdate' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'interested_job' => 'required',
        'money_need' => 'required',
        'work_time' => 'required'
    ];

    
}
