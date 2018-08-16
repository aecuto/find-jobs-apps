<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Appointment
 * @package App\Models
 * @version August 7, 2018, 9:27 am UTC
 *
 * @property string|\Carbon\Carbon datetime
 * @property string des
 */
class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'date',
        'time',
        'des',
        'confirmed',
        'user_id',
        'job_position_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'time' => 'time',
        'des' => 'string',
        'confirmed' => 'boolean',
        'user_id' => 'integer',
        'job_position_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'time' => 'required',
        'user_id' => 'required',
        'job_position_id' => 'required',
    ];

    
}
