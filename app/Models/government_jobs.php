<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class government_jobs
 * @package App\Models
 * @version July 31, 2018, 6:46 am UTC
 *
 * @property string name
 * @property string details
 */
class government_jobs extends Model
{
    use SoftDeletes;

    public $table = 'government_jobs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'details',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'details' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'details' => 'required'
    ];

    
}
